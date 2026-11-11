/* Menu-led orientation for the current IG. Only explicit page steps navigate;
 * a predefined URL parameter preserves the tour across those page loads.
 */
(function () {
  "use strict";

  function initialize() {
    var launcher = document.querySelector(".medcom-tour-launch");
    var sourceNav = document.getElementById("segment-navbar");
    if (!launcher || !sourceNav || typeof HTMLDialogElement === "undefined") return;
    var home = new URL(launcher.dataset.tourHome, window.location.href);
    var base = new URL(".", home);
    var parameter = "medcom-tour";
    var profile = launcher.dataset.tourProfile ? new URL(launcher.dataset.tourProfile, base) : null;
    if (profile && (profile.origin !== base.origin || !profile.pathname.startsWith(base.pathname))) profile = null;

    function element(tag, className, text) {
      var node = document.createElement(tag);
      if (className) node.className = className;
      if (text) node.textContent = text;
      return node;
    }
    function linkFor(links, page) {
      var url = new URL(page, base);
      return links.find(function (link) {
        return !link.getAttribute("href").endsWith("#") && link.origin === url.origin && link.pathname === url.pathname;
      });
    }
    function label(link) { return link.textContent.trim().replace(/\s+/g, " "); }
    // The modal owns a copy of the actual menu, so it stays visible and its
    // highlighted link can be activated without making the background interactive.
    var nav = sourceNav.cloneNode(true);
    nav.removeAttribute("id");
    nav.classList.add("medcom-tour-navbar");
    nav.querySelectorAll("[id]").forEach(function (node) { node.removeAttribute("id"); });
    nav.querySelectorAll(".navbar-toggle").forEach(function (node) { node.remove(); });
    nav.querySelectorAll("[data-toggle], [data-target]").forEach(function (node) {
      node.removeAttribute("data-toggle");
      node.removeAttribute("data-target");
    });
    var menuLinks = Array.from(nav.querySelectorAll("a[href]"));
    menuLinks.forEach(function (link) {
      link.tabIndex = -1;
      link.setAttribute("aria-disabled", "true");
    });
    var scroller = nav.querySelector(".nav-collapse") || nav;
    var steps = [];
    function menuStep(id, page, title, text, opens) {
      if (linkFor(menuLinks, page)) steps.push({id: id, menu: page, title: title, text: text, opens: opens});
    }
    menuStep("home", "index.html", "Find the guide's overview", "Home introduces this guide's purpose and scope.");
    [
      ["terminology-menu", "Terminology", "Terminology lists the CodeSystems, ValueSets, and other terminology resources published in this guide. Use it to find the code definitions and sets relevant to your implementation."]
    ].forEach(function (item) {
      if (menuLinks.some(function (link) { return label(link) === item[1]; })) steps.push({id: item[0], menuLabel: item[1], title: item[1], text: item[2]});
    });
    if (profile && nav.querySelector(".medcom-profiles-menu")) {
      menuStep("profiles-menu", profile.href, "Choose a profile", "Open the Profiles dropdown to select a profile directly. Each profile defines requirements for a FHIR resource or data type. Next, we will open one example profile to see how these rules are presented.", "Open example profile");
    } else if (linkFor(menuLinks, "profiles.html")) {
      menuStep("profiles-menu", "profiles.html", "Find Profiles", "You can find a list of profiles here. Each profile defines requirements for a particular FHIR resource or data type.", "Open Profiles");
      steps.push({id: "profiles", page: "profiles.html", target: ".medcom-artifact-overview, #segment-content .col-12", title: "Profiles in this guide", text: profile ? "A FHIR profile is a reusable, machine-readable set of rules for a resource such as Patient: required fields, allowed repetitions, codes, and references. A MedCom EDI, CDA, or XML standard specification typically describes a complete message or document. An IG brings profiles together with workflow and exchange rules to specify the complete standard. Next, we will choose one example profile to see how these rules are presented.": "A FHIR profile is a reusable, machine-readable set of rules for a resource such as Patient: required fields, allowed repetitions, codes, and references. A MedCom EDI, CDA, or XML standard specification typically describes a complete message or document. An IG brings profiles together with workflow and exchange rules to specify the complete standard. This page lists the profiles defined here.", next: profile ? "Open example profile" : "Next"});
    }
    if (profile && (nav.querySelector(".medcom-profiles-menu") || linkFor(menuLinks, "profiles.html"))) steps.push(
        {id: "profile", page: profile.href, target: ".col-12 > .nav-tabs, .medcom-page-title", title: "One example profile", text: "We have chosen one example from this guide's Profiles menu. These tabs provide its rules, detailed element definitions, mappings, examples, and XML/JSON definitions."},
        {id: "profile-tables", page: profile.href, target: "#tabs, #segment-content .col-12", title: "Compare the example's table views", text: "'Key Elements Table' contains elements that have 'Flags' or 'Cardinality'; This is just an overview. The 'Differential Table' shows changes from the base/inherited definition; Snapshot includes all elements including inherited and is the most important view here."}
      );
    if (linkFor(menuLinks, "extensions.html")) {
      menuStep("extensions-menu", "extensions.html", "Find Extensions", "Extensions lists the additional data structures defined in this guide. Click the highlighted menu item or choose Open Extensions to see them.", "Open Extensions");
      steps.push({id: "extensions", page: "extensions.html", target: ".medcom-artifact-overview, #segment-content .col-12", title: "Extensions", text: "These extensions are add-on elements to a FHIR profile that the base does not provide. Profiles may also reuse extensions from other guides."});
    }
    menuStep("downloads-menu", "downloads.html", "Find Downloads", "Downloads provides the package and examples for this IG version. Click the highlighted menu item or choose Open Downloads to find the FHIR package.", "Open Downloads");
    steps.push({id: "downloads", page: "downloads.html", scroll: false, target: '#segment-content a[href="package.tgz"]', title: "Download the FHIR package", text: "This button downloads the FHIR package for the IG version you are reading. For offline validation, also obtain the required dependency packages shown on Dependencies."});
    menuStep("dependencies-menu", "dependencies.html", "Find Dependencies", "Dependencies shows which other FHIR packages this IG uses. Understanding its direct dependencies helps you obtain the supporting packages needed for offline validation.", "Open Dependencies");
    steps.push({id: "dependencies", page: "dependencies.html", target: ".medcom-table-scroll, #segment-content .col-12", title: "Check direct dependencies", text: "Start with this IG's direct dependencies and their exact versions. For offline validation, download these supporting packages as well as this IG's package. The dependency hierarchy also shows indirect dependencies that may be needed."});

    var dialog = element("dialog", "medcom-tour");
    dialog.setAttribute("aria-labelledby", "medcom-tour-title");
    dialog.setAttribute("aria-describedby", "medcom-tour-description");
    var spotlight = element("div", "medcom-tour-spotlight");
    spotlight.setAttribute("aria-hidden", "true");
    var dropdown = element("div", "medcom-tour-dropdown");
    dropdown.hidden = true;
    var panel = element("div", "medcom-tour-panel");
    var close = element("button", "medcom-tour-close", "×");
    close.type = "button";
    close.setAttribute("aria-label", "Close guide tour");
    var status = element("p", "medcom-tour-status");
    status.setAttribute("aria-live", "polite");
    var title = element("h2", "medcom-tour-title");
    title.id = "medcom-tour-title";
    title.tabIndex = -1;
    var description = element("p", "medcom-tour-description");
    description.id = "medcom-tour-description";
    var controls = element("div", "medcom-tour-controls");
    var back = element("button", "medcom-tour-back", "Back");
    var next = element("button", "medcom-tour-next", "Next");
    back.type = next.type = "button";
    controls.append(back, next);
    panel.append(close, status, title, description, controls);
    dialog.append(spotlight, nav, dropdown, panel);
    document.body.appendChild(dialog);
    var spacer = element("div", "medcom-tour-spacer");
    spacer.setAttribute("aria-hidden", "true");
    var current = -1;
    var target;
    var positioned = false;
    var openMenu;

    function clearParameter() {
      var url = new URL(window.location.href);
      if (url.searchParams.has(parameter)) {
        url.searchParams.delete(parameter);
        window.history.replaceState(window.history.state, "", url);
      }
    }
    function closeDropdown() {
      if (openMenu) {
        openMenu.owner.appendChild(openMenu.menu);
        openMenu.owner.classList.remove("open");
        openMenu.toggle.setAttribute("aria-expanded", "false");
        openMenu = null;
      }
      dropdown.hidden = true;
    }
    function end() {
      clearParameter();
      if (dialog.open) dialog.close();
      closeDropdown();
      document.body.classList.remove("medcom-tour-active");
      spacer.remove();
      current = -1;
      launcher.focus({preventScroll: true});
    }
    function centerMenuLink(link) {
      var view = scroller.getBoundingClientRect();
      var rect = link.getBoundingClientRect();
      scroller.scrollLeft += rect.left - view.left - (view.width - rect.width) / 2;
    }
    function revealMenuLink(link) {
      var owner = link.closest(".dropdown");
      var toggle = owner ? owner.querySelector("a") : link;
      centerMenuLink(toggle);
      if (owner) {
        var menu = owner.querySelector(".dropdown-menu");
        if (menu) {
          openMenu = {owner: owner, menu: menu, toggle: toggle};
          owner.classList.add("open");
          toggle.setAttribute("aria-expanded", "true");
          toggle.classList.add("medcom-tour-menu-route");
          dropdown.appendChild(menu);
          dropdown.hidden = false;
        }
      }
    }
    function positionDropdown() {
      if (!openMenu) return;
      var bounds = openMenu.toggle.getBoundingClientRect();
      var bottom = Math.max(bounds.bottom, nav.getBoundingClientRect().bottom);
      dropdown.style.top = bottom + 4 + "px";
      dropdown.style.left = Math.max(8, Math.min(bounds.left, window.innerWidth - dropdown.offsetWidth - 8)) + "px";
      dropdown.style.maxHeight = Math.max(48, panel.getBoundingClientRect().top - bottom - 24) + "px";
    }
    function position() {
      if (!dialog.open || !target) return;
      var menuBottom = nav.getBoundingClientRect().bottom;
      if (!positioned) {
        if (steps[current].page && steps[current].scroll !== false) window.scrollTo({top: Math.max(0, target.getBoundingClientRect().top + window.scrollY - menuBottom - 24), behavior: "instant"});
        positioned = true;
      }
      positionDropdown();
      var bounds = target.getBoundingClientRect();
      var top = bounds.top - 6;
      var left = Math.max(8, bounds.left - 6);
      var right = Math.min(window.innerWidth - 8, bounds.right + 6);
      var bottom = bounds.bottom + 6;
      spotlight.style.top = top + "px";
      spotlight.style.left = left + "px";
      spotlight.style.width = Math.max(1, right - left) + "px";
      spotlight.style.height = Math.max(1, bottom - top) + "px";
    }
    function show(index) {
      current = index;
      var step = steps[index];
      closeDropdown();
      menuLinks.forEach(function (link) {
        link.classList.remove("medcom-tour-menu-target", "medcom-tour-menu-route");
        link.tabIndex = -1;
        link.setAttribute("aria-disabled", "true");
      });
      title.textContent = step.title;
      description.textContent = step.text;
      if (step.id === "profile") {
        var heading = document.querySelector(".medcom-page-title");
        if (heading) description.textContent = "We have chosen " + heading.textContent.replace(/^Resource Profile:\s*/, "").trim() + " as one example from this guide's Profiles menu. These tabs provide its rules, detailed definitions, mappings, examples, and XML/JSON definitions.";
      }
      status.textContent = "Step " + (index + 1) + " of " + steps.length;
      back.disabled = index === 0;
      next.textContent = index === steps.length - 1 ? "Finish" : step.opens || step.next || "Next";
      if (!dialog.open) {
        document.body.appendChild(spacer);
        document.body.classList.add("medcom-tour-active");
        dialog.showModal();
      }
      if (step.menu || step.menuLabel) {
        target = step.menu ? linkFor(menuLinks, step.menu) : menuLinks.find(function (link) { return label(link) === step.menuLabel; });
        if (target) {
          target.classList.add("medcom-tour-menu-target");
          revealMenuLink(target);
          if (step.opens) { target.tabIndex = 0; target.removeAttribute("aria-disabled"); }
        }
      } else {
        target = step.target.split(",").map(function (selector) { return document.querySelector(selector.trim()); }).find(Boolean);
        var location = nav.querySelector(".medcom-menu-current");
        if (location) centerMenuLink(location);
      }
      target = target || nav;
      positioned = false;
      title.focus({preventScroll: true});
      window.requestAnimationFrame(position);
    }
    function go(index) {
      var step = steps[index];
      var url = step.page ? new URL(step.page, base) : new URL(window.location.href);
      url.searchParams.set(parameter, step.id);
      if (url.pathname === window.location.pathname && url.origin === window.location.origin) {
        window.history.replaceState(window.history.state, "", url);
        show(index);
      } else {
        clearParameter();
        window.location.assign(url.href);
      }
    }
    function restore() {
      var id = new URL(window.location.href).searchParams.get(parameter);
      if (!id) { if (dialog.open) end(); return; }
      var index = steps.findIndex(function (step) { return step.id === id; });
      if (index === -1) { clearParameter(); return; }
      if (steps[index].page && new URL(steps[index].page, base).pathname !== window.location.pathname) { go(index); return; }
      show(index);
    }
    document.addEventListener("click", function (event) {
      if (event.target.closest("[data-medcom-start-tour]")) { event.preventDefault(); go(0); }
    });
    dialog.addEventListener("click", function (event) {
      var link = event.target.closest("a");
      if (!link || (!nav.contains(link) && !dropdown.contains(link))) return;
      event.preventDefault();
      event.stopPropagation();
      if (link === target && steps[current].opens) go(current + 1);
    });
    dialog.addEventListener("keydown", function (event) {
      if (event.key !== "Tab") return;
      var focusable = Array.from(dialog.querySelectorAll('button:not([disabled]), a[href]:not([aria-disabled="true"])')).filter(function (node) { return node.getClientRects().length; });
      var first = focusable[0];
      var last = focusable[focusable.length - 1];
      if (event.shiftKey && document.activeElement === first) { event.preventDefault(); last.focus(); }
      else if (!event.shiftKey && document.activeElement === last) { event.preventDefault(); first.focus(); }
    });
    close.addEventListener("click", end);
    dialog.addEventListener("cancel", function (event) { event.preventDefault(); end(); });
    back.addEventListener("click", function () { if (current > 0) go(current - 1); });
    next.addEventListener("click", function () { if (current === steps.length - 1) end(); else go(current + 1); });
    scroller.addEventListener("scroll", position);
    dropdown.addEventListener("scroll", position);
    // The spotlight follows the complete target, including lists taller than the
    // viewport. Let readers scroll the background while keeping modal controls usable.
    function scrollPage(delta) {
      if (!dialog.open || !steps[current].page) return;
      window.scrollBy({top: delta, behavior: "instant"});
    }
    function overControls(node) { return node.closest(".medcom-tour-panel, .medcom-tour-navbar, .medcom-tour-dropdown"); }
    dialog.addEventListener("wheel", function (event) {
      if (overControls(event.target) || event.ctrlKey) return;
      event.preventDefault();
      scrollPage(event.deltaY * (event.deltaMode === 1 ? 20 : event.deltaMode === 2 ? window.innerHeight : 1));
    }, {passive: false});
    var touchY = null;
    dialog.addEventListener("touchstart", function (event) {
      touchY = !overControls(event.target) && event.touches.length === 1 ? event.touches[0].clientY : null;
    }, {passive: true});
    dialog.addEventListener("touchmove", function (event) {
      if (touchY === null || event.touches.length !== 1) return;
      event.preventDefault();
      scrollPage(touchY - event.touches[0].clientY);
      touchY = event.touches[0].clientY;
    }, {passive: false});
    dialog.addEventListener("keydown", function (event) {
      if (overControls(event.target) && event.target !== title) return;
      var delta = {ArrowDown: 40, ArrowUp: -40, PageDown: window.innerHeight * .7, PageUp: -window.innerHeight * .7, End: document.documentElement.scrollHeight, Home: -document.documentElement.scrollHeight}[event.key];
      if (delta !== undefined) { event.preventDefault(); scrollPage(delta); }
    });
    window.addEventListener("scroll", position, {passive: true});
    window.addEventListener("resize", function () { positioned = false; position(); });
    window.addEventListener("load", function () { positioned = false; position(); });
    window.addEventListener("pageshow", restore);
    window.addEventListener("popstate", restore);
    restore();
  }
  if (document.readyState === "loading") document.addEventListener("DOMContentLoaded", initialize);
  else initialize();
}());
