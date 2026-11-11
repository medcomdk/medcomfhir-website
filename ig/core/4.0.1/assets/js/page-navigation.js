/* Page numbering extends https://github.com/HL7/ig-template-base/tree/master.
 * Navigation is derived from the rendered headings, preserving existing anchors.
 */
(function () {
  "use strict";

  function element(tag, className, text) {
    var node = document.createElement(tag);
    if (className) node.className = className;
    if (text) node.textContent = text;
    return node;
  }

  function headingText(heading) {
    var copy = heading.cloneNode(true);
    copy.querySelectorAll(".anchorjs-link, .self-link, .sectioncount").forEach(function (anchor) {
      anchor.remove();
    });
    return copy.textContent.trim().replace(/\s+/g, " ");
  }

  function collectSections(content, title) {
    var hierarchy = [];
    var sections = [];
    content.querySelectorAll("h1, h2, h3, h4, h5, h6").forEach(function (heading) {
      // Repeated headings in alternative resource views are not document sections.
      if (heading === title || heading.closest("[hidden], table, pre, blockquote, .modal, #tabs, [role='tabpanel']")) return;
      var text = headingText(heading);
      if (!text) return;
      var level = Number(heading.tagName.slice(1));
      var previous;
      while (hierarchy.length && hierarchy[hierarchy.length - 1].level >= level) {
        previous = hierarchy.pop();
      }
      var parent = hierarchy.length ? hierarchy[hierarchy.length - 1].number : [];
      var number = parent.concat(previous ? previous.number[previous.number.length - 1] + 1 : 1);
      var writtenNumber = text.match(/^(\d+(?:\.\d+)*)(?:[.)])?\s/);
      if (writtenNumber) {
        number = writtenNumber[1].split(".").map(Number);
      } else {
        heading.setAttribute("data-section-number", number.join("."));
      }
      if (!heading.id) {
        var base = "section-" + text.toLowerCase().normalize("NFKD").replace(/[\u0300-\u036f]/g, "").replace(/[^a-z0-9]+/g, "-").replace(/^-|-$/g, "");
        var id = base;
        var suffix = 2;
        while (document.getElementById(id)) id = base + "-" + suffix++;
        heading.id = id;
      }
      sections.push({heading: heading, text: writtenNumber ? text : number.join(".") + ". " + text, depth: hierarchy.length});
      hierarchy.push({level: level, number: number});
    });
    return sections;
  }

  function addContents(content, sections, title) {
    // Resource views such as Examples and JSON have no document section headings.
    if (!sections.length && title && content.querySelector(".nav-tabs")) {
      if (!title.id) title.id = "resource-view";
      var currentTab = content.querySelector(".nav-tabs .active a");
      sections = [{heading: title, text: currentTab ? currentTab.textContent.trim() : headingText(title), depth: 0}];
    }
    if (!sections.length) return;
    content.querySelectorAll(".markdown-toc").forEach(function (contents) { contents.remove(); });
    var aside = element("aside", "medcom-page-nav");
    aside.setAttribute("aria-label", "Page navigation");
    var contents = element("div", "medcom-contents");
    var toggle = element("button", "medcom-contents-title", "On this page");
    toggle.type = "button";
    var panel = element("div", "medcom-contents-panel");
    panel.id = "medcom-contents-panel";
    toggle.setAttribute("aria-controls", panel.id);
    contents.appendChild(toggle);
    contents.appendChild(panel);
    var progress = element("progress", "medcom-reading-progress");
    progress.max = 100;
    progress.value = 0;
    progress.setAttribute("aria-label", "Page reading progress");
    panel.appendChild(progress);
    var status = element("p", "medcom-reading-status");
    panel.appendChild(status);
    var nav = element("nav", "medcom-contents-links");
    nav.setAttribute("aria-label", "On this page");
    var root = element("ol");
    nav.appendChild(root);
    var lists = [root];
    var links = [];
    sections.forEach(function (section) {
      while (lists.length > section.depth + 1) lists.pop();
      while (lists.length < section.depth + 1) {
        var nested = element("ol");
        lists[lists.length - 1].lastElementChild.appendChild(nested);
        lists.push(nested);
      }
      var item = element("li");
      var link = element("a", "", section.text);
      link.setAttribute("href", "#" + section.heading.id);
      item.appendChild(link);
      lists[lists.length - 1].appendChild(item);
      links.push(link);
    });
    panel.appendChild(nav);
    aside.appendChild(contents);
    var footerTop = document.querySelector(".medcom-footer-top");
    if (footerTop) {
      var sidebarTop = footerTop.cloneNode(true);
      sidebarTop.classList.replace("medcom-footer-top", "medcom-sidebar-top");
      panel.appendChild(sidebarTop);
      footerTop.remove();
    }
    content.parentElement.classList.add("medcom-page-layout");
    content.parentElement.insertBefore(aside, content);

    var desktop = window.matchMedia("(min-width: 1100px)");
    function setExpanded(expanded) {
      content.parentElement.classList.toggle("medcom-nav-collapsed", !expanded);
      toggle.setAttribute("aria-expanded", String(expanded));
      toggle.setAttribute("aria-label", (expanded ? "Collapse" : "Expand") + " page navigation");
      panel.hidden = !expanded;
    }
    setExpanded(desktop.matches);
    desktop.addEventListener("change", function () { setExpanded(desktop.matches); });
    toggle.addEventListener("click", function () {
      setExpanded(toggle.getAttribute("aria-expanded") !== "true");
    });
    // Keep an explicitly chosen section active when its anchor is clamped by the
    // bottom of the document, until the reader starts navigating manually.
    var selected = null;
    var manualScrollPending = false;
    var selectedPosition = null;
    var selectionTimer;
    function settleSelection() {
      window.clearTimeout(selectionTimer);
      selectionTimer = window.setTimeout(function () {
        if (selected !== null) selectedPosition = window.scrollY;
      }, 180);
    }
    var initialHash = window.location.hash;
    sections.forEach(function (section, index) {
      if ("#" + section.heading.id === decodeURIComponent(initialHash)) selected = index;
    });
    var highlightTimer;
    var highlighted;
    nav.addEventListener("click", function (event) {
      var link = event.target.closest("a");
      if (!link) return;
      var target = document.getElementById(decodeURIComponent(link.hash.slice(1)));
      if (target) {
        selected = sections.findIndex(function (section) { return section.heading === target; });
        manualScrollPending = false;
        selectedPosition = null;
        settleSelection();
        schedule();
        if (highlighted) highlighted.classList.remove("medcom-section-highlight");
        window.clearTimeout(highlightTimer);
        target.classList.remove("medcom-section-highlight");
        void target.offsetWidth; // Restart the highlight when the same link is selected again.
        target.classList.add("medcom-section-highlight");
        highlighted = target;
        highlightTimer = window.setTimeout(function () { target.classList.remove("medcom-section-highlight"); }, 1400);
      }
      if (!desktop.matches) setExpanded(false);
    });

    var active = -1;
    var scheduled = false;
    function update() {
      scheduled = false;
      var current = 0;
      sections.forEach(function (section, index) {
        if (section.heading.getBoundingClientRect().top <= 100) current = index;
      });
      var atBottom = window.scrollY + window.innerHeight >= document.documentElement.scrollHeight - 4;
      if (selected !== null) current = selected;
      if (current !== active) {
        if (active >= 0) links[active].removeAttribute("aria-current");
        links[current].setAttribute("aria-current", "location");
        active = current;
        status.textContent = "Section " + (current + 1) + " of " + sections.length;
        // Scroll just the contents list, keeping the reader's page position intact.
        if (desktop.matches && nav.clientHeight) {
          var bounds = links[current].getBoundingClientRect();
          var viewport = nav.getBoundingClientRect();
          if (bounds.top < viewport.top) nav.scrollTop -= viewport.top - bounds.top;
          if (bounds.bottom > viewport.bottom) nav.scrollTop += bounds.bottom - viewport.bottom;
        }
      }
      var start = content.getBoundingClientRect().top + window.scrollY;
      var distance = content.offsetHeight - window.innerHeight;
      progress.value = atBottom ? 100 : Math.max(0, Math.min(100, (window.scrollY - start) / Math.max(1, distance) * 100));
    }
    function schedule() {
      if (!scheduled) { scheduled = true; window.requestAnimationFrame(update); }
    }
    function resumeTracking() {
      selected = null;
      selectedPosition = null;
      window.clearTimeout(selectionTimer);
      schedule();
    }
    function noteManualScroll() { manualScrollPending = true; }
    window.addEventListener("wheel", noteManualScroll, {passive: true});
    window.addEventListener("touchstart", noteManualScroll, {passive: true});
    window.addEventListener("keydown", function (event) {
      if (event.defaultPrevented || event.target.closest("input, textarea, select, button, [contenteditable]")) return;
      if (["ArrowUp", "ArrowDown", "PageUp", "PageDown", "Home", "End", " "].indexOf(event.key) !== -1) noteManualScroll();
    });
    document.addEventListener("pointerdown", function (event) {
      if (!aside.contains(event.target)) noteManualScroll();
    });
    window.addEventListener("hashchange", function () {
      if (selected !== null && decodeURIComponent(window.location.hash) !== "#" + sections[selected].heading.id) resumeTracking();
    });
    window.addEventListener("scroll", function () {
      if (manualScrollPending || (selectedPosition !== null && Math.abs(window.scrollY - selectedPosition) > 1)) resumeTracking();
      if (selected !== null) settleSelection();
      schedule();
    }, {passive: true});
    window.addEventListener("resize", schedule);
    window.addEventListener("load", function () { settleSelection(); schedule(); });
    settleSelection();
    update();
  }

  function markMenuLocation() {
    var nav = document.getElementById("segment-navbar");
    if (!nav) return;
    var links = Array.from(nav.querySelectorAll("a[href]"));
    var currentURL = new URL(window.location.href);
    if (currentURL.pathname.endsWith("/")) currentURL = new URL("index.html", currentURL);
    function linkFor(links, page) {
      var url = new URL(page, window.location.href);
      return links.find(function (link) {
        return !link.getAttribute("href").endsWith("#") && link.origin === url.origin && link.pathname === url.pathname;
      });
    }
    var link = linkFor(links, currentURL.href);
    if (!link && /StructureDefinition-/.test(currentURL.pathname)) {
      // Definitions, examples, mappings, and source tabs belong to the profile's main page.
      var profilePath = currentURL.pathname.replace(/(?:-(?:definitions|mappings|examples|testing)|\.profile\.(?:xml|json|ttl|history))\.html$/, ".html");
      link = links.find(function (candidate) {
        return candidate.closest(".medcom-profiles-menu") && candidate.origin === currentURL.origin && candidate.pathname === profilePath;
      });
    }
    if (!link) {
      var heading = document.querySelector(".medcom-page-title");
      var text = heading ? heading.textContent : "";
      if (/StructureDefinition-/.test(currentURL.pathname)) link = linkFor(links, /Extension:/.test(text) ? "extensions.html" : "profiles.html");
      else if (/(CodeSystem|ValueSet|ConceptMap)-/.test(currentURL.pathname)) link = linkFor(links, "terminology.html") || linkFor(links, "artifacts.html");
    }
    if (link) {
      link.classList.add("medcom-menu-current");
      link.setAttribute("aria-current", link.pathname === currentURL.pathname ? "page" : "location");
      var parent = link.closest(".dropdown");
      if (parent) parent.querySelector("a").classList.add("medcom-menu-current");
    }
  }

  function initialize() {
    var main = document.getElementById("segment-content");
    if (!main) return;
    main.setAttribute("role", "main");
    main.setAttribute("tabindex", "-1");
    document.querySelectorAll(".navbar-toggle").forEach(function (button) {
      button.setAttribute("aria-label", "Toggle site navigation");
    });
    var excluded = /^(searchform|search|toc|extensions|profiles|downloads|dependencies)\.html$/i.test(window.location.pathname.split("/").pop());
    if (excluded) document.querySelectorAll(".medcom-footer-top").forEach(function (link) { link.remove(); });
    main.querySelectorAll(".col-12").forEach(function (content) {
      var title = Array.from(content.children).find(function (child) { return /^H[1-6]$/.test(child.tagName); });
      if (title) title.classList.add("medcom-page-title");
      // The inherited profile layout wraps markdownified descriptions in <p>.
      // Browsers repair the nested paragraphs into empty spacer paragraphs.
      if (content.querySelector(":scope > .nav-tabs")) {
        content.querySelectorAll(":scope > p").forEach(function (paragraph) {
          if (!paragraph.children.length && !paragraph.textContent.trim()) paragraph.remove();
        });
      }
      var sections = collectSections(content, title);
      content.querySelectorAll("div").forEach(function (parent) {
        // Publisher list fragments contain bare list items; give them a semantic wrapper.
        if (!parent.children.length || !Array.from(parent.children).every(function (child) { return child.tagName === "LI"; })) return;
        var list = element("ul", "medcom-artifact-list");
        while (parent.firstChild) list.appendChild(parent.firstChild);
        parent.appendChild(list);
      });
      content.querySelectorAll("table").forEach(function (table) {
        if (table.parentElement.closest("table, #tabs, .medcom-table-scroll")) return;
        var wrapper = element("div", "medcom-table-scroll");
        table.parentElement.insertBefore(wrapper, table);
        wrapper.appendChild(table);
      });
      if (!excluded) addContents(content, sections, title);
    });
    markMenuLocation();
    function updateTopLinks() {
      document.querySelectorAll(".medcom-back-to-top").forEach(function (link) { link.hidden = window.scrollY <= 0; });
    }
    window.addEventListener("scroll", updateTopLinks, {passive: true});
    updateTopLinks();
  }

  if (document.readyState === "loading") document.addEventListener("DOMContentLoaded", initialize);
  else initialize();
}());
