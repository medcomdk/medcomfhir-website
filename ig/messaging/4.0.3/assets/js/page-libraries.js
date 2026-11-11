/* Load rendering libraries only when the page contains content that uses them. */
(function () {
  "use strict";

  // Resolve from the loader, so nested pages use the same assets as the IG root.
  var assets = new URL("../", document.currentScript.src);

  function loadScript(name, ready) {
    var script = document.createElement("script");
    script.src = new URL("js/" + name, assets).href;
    script.async = true;
    script.onload = ready;
    document.head.appendChild(script);
  }

  function language(code) {
    // Prism allows the language class on the code element or any ancestor.
    for (var node = code; node; node = node.parentElement) {
      var match = /\blang(?:uage)?-([\w-]+)\b/i.exec(node.className);
      if (match) return match[1].toLowerCase();
    }
    return "none";
  }

  function initialize() {
    var codeBlocks = [];
    document.querySelectorAll("code").forEach(function (code) {
      var name = language(code);
      if (name === "mermaid") {
        var pre = code.closest("pre");
        if (!pre) return;
        var diagram = document.createElement("div");
        diagram.className = "mermaid";
        diagram.textContent = code.textContent;
        pre.replaceWith(diagram);
      } else if (!/^(none|plain|plaintext|text)$/.test(name) && !code.closest(".mermaid")) {
        codeBlocks.push(code);
      }
    });

    var diagrams = document.querySelectorAll(".mermaid");
    if (diagrams.length) {
      loadScript("mermaid.js", function () {
        // Loading after DOMContentLoaded requires an explicit render call.
        window.mermaid.initialize({securityLevel: "sandbox", startOnLoad: false});
        window.mermaid.run({nodes: diagrams}).catch(function (error) {
          console.error("Unable to render Mermaid diagrams", error);
        });
      });
    }

    if (codeBlocks.length) {
      var stylesheet = document.createElement("link");
      stylesheet.rel = "stylesheet";
      stylesheet.href = new URL("css/prism.css", assets).href;
      document.head.appendChild(stylesheet);
      window.Prism = window.Prism || {};
      window.Prism.manual = true;
      loadScript("prism.js", function () {
        codeBlocks.forEach(function (code) { window.Prism.highlightElement(code); });
      });
    }
  }

  if (document.readyState === "loading") document.addEventListener("DOMContentLoaded", initialize);
  else initialize();
}());
