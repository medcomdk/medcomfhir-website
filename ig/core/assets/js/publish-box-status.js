(() => {
  function updatePublishBoxStatus() {
    const publishBox = document.getElementById("publish-box");

    if (!publishBox) {
      return;
    }

    const text = publishBox.textContent
      .replace(/\s+/g, " ")
      .trim();

    /*
     * The publishing infrastructure has historically used both
     * "supersedes" and the misspelling "supercedes".
     */
    const isOutdated =
      /super[sc]edes this version/i.test(text) ||
      /this version (?:is|has been) superseded/i.test(text);

    publishBox.classList.toggle(
      "publish-box-outdated",
      isOutdated
    );
  }

  if (document.readyState === "loading") {
    document.addEventListener(
      "DOMContentLoaded",
      updatePublishBoxStatus
    );
  } else {
    updatePublishBoxStatus();
  }
})();