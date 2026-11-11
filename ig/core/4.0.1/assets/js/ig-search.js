/* Temporary, dependency-free search over this IG build's static index. */
(function () {
  "use strict";

  var search = document.getElementById("medcom-local-search");
  if (!search) return;
  var status = document.getElementById("medcom-search-status");
  var results = document.getElementById("medcom-search-results");
  var input = document.getElementById("medcom-search-query");
  var help = document.getElementById("medcom-search-help");
  if (help) help.hidden = true;
  var query = (new URL(window.location.href).searchParams.get("q") || "").trim().slice(0, 200);
  if (input) input.value = query;

  function normalize(text) {
    return text.normalize("NFD").replace(/[\u0300-\u036f]/g, "").toLowerCase();
  }
  var terms = Array.from(new Set(normalize(query).match(/[\p{L}\p{N}]+/gu) || []));
  if (!terms.length) {
    if (query) status.textContent = "Enter at least one letter or number to search this IG.";
    return;
  }

  // Decode entities left by strip_html when building the JSON index.
  function plainText(text) {
    var parsed = new DOMParser().parseFromString(String(text || ""), "text/html");
    return parsed.body.textContent.replace(/\s+/g, " ").trim();
  }

  function highlight(parent, text) {
    // A character map preserves offsets when Unicode normalization removes accents.
    var normalized = "";
    var positions = [];
    var offset = 0;
    Array.from(text).forEach(function (character) {
      var folded = normalize(character);
      for (var i = 0; i < folded.length; i++) positions.push(offset);
      normalized += folded;
      offset += character.length;
    });
    positions.push(text.length);
    var cursor = 0;
    var ranges = [];
    terms.forEach(function (term) {
      var start = normalized.indexOf(term);
      while (start !== -1) {
        ranges.push([positions[start], positions[start + term.length]]);
        start = normalized.indexOf(term, start + term.length);
      }
    });
    ranges.sort(function (a, b) { return a[0] - b[0]; });
    var merged = [];
    ranges.forEach(function (range) {
      var previous = merged[merged.length - 1];
      if (previous && range[0] <= previous[1]) previous[1] = Math.max(previous[1], range[1]);
      else merged.push(range);
    });
    merged.forEach(function (range) {
      parent.appendChild(document.createTextNode(text.slice(cursor, range[0])));
      var mark = document.createElement("mark");
      mark.textContent = text.slice(range[0], range[1]);
      parent.appendChild(mark);
      cursor = range[1];
    });
    parent.appendChild(document.createTextNode(text.slice(cursor)));
  }

  function snippet(text) {
    var normalized = normalize(text);
    var first = Math.min.apply(null, terms.map(function (term) {
      var position = normalized.indexOf(term);
      return position < 0 ? Infinity : position;
    }));
    var start = Number.isFinite(first) ? Math.max(0, first - 80) : 0;
    if (start) {
      var space = text.indexOf(" ", start);
      if (space !== -1 && space < start + 25) start = space + 1;
    }
    var excerpt = text.slice(start, start + 280);
    return (start ? "…" : "") + excerpt + (start + 280 < text.length ? "…" : "");
  }

  status.textContent = "Searching this IG…";
  results.setAttribute("aria-busy", "true");
  var indexURL = new URL(search.dataset.index, window.location.href);
  var base = new URL(".", indexURL);
  fetch(indexURL.href, {credentials: "same-origin"})
    .then(function (response) {
      if (!response.ok) throw new Error("Search index unavailable");
      return response.json();
    })
    .then(function (documents) {
      var matches = [];
      documents.forEach(function (entry) {
        var url = new URL(entry.url, base);
        if (url.origin !== base.origin || !url.pathname.startsWith(base.pathname) || !url.pathname.endsWith(".html")) return;
        var title = plainText(entry.title);
        var text = plainText(entry.text);
        var foldedTitle = normalize(title);
        var foldedText = normalize(text);
        if (!terms.every(function (term) { return foldedTitle.includes(term) || foldedText.includes(term); })) return;
        var score = terms.reduce(function (total, term) {
          return total + (foldedTitle.includes(term) ? 10 : 0);
        }, 0) + (foldedTitle.includes(normalize(query)) ? 20 : 0);
        matches.push({url: url.href, title: title, text: text, score: score});
      });
      matches.sort(function (a, b) { return b.score - a.score || a.title.localeCompare(b.title); });
      matches.slice(0, 50).forEach(function (match) {
        var item = document.createElement("li");
        var heading = document.createElement("h2");
        var link = document.createElement("a");
        link.href = match.url;
        highlight(link, match.title);
        heading.appendChild(link);
        var excerpt = document.createElement("p");
        highlight(excerpt, snippet(match.text));
        item.append(heading, excerpt);
        results.appendChild(item);
      });
      status.textContent = matches.length ? matches.length + (matches.length === 1 ? " result" : " results") + " for “" + query + "”." + (matches.length > 50 ? " Showing the first 50. Add more words to narrow your search." : "") : "No results for “" + query + "”. Try fewer words or a different term.";
    })
    .catch(function () {
      status.textContent = "Search could not load. Please reload the page to try again, or use the navigation menu to browse this guide.";
    })
    .finally(function () { results.removeAttribute("aria-busy"); });
}());
