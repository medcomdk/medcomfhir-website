/* Open every profile on its complete Snapshot view. Select by tab target
 * because profiles and extensions have different tab orders.
 */
(function ($) {
  "use strict";
  var tabs = $("#tabs");
  var links = tabs.find("> ul > li > a");
  var active = links.index(links.filter('[href="#tabs-snap"]'));
  if (active < 0) active = 0;

  tabs.tabs({active: active});
}(jQuery));
