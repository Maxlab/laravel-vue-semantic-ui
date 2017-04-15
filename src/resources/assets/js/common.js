$(document).ready(function () {
  $('#top_menu')
    .visibility({
      once: false,
      onBottomPassed: function () {
        $('#top_menu_double').transition('fade down');
      },
      onBottomPassedReverse: function () {
        $('#top_menu_double').transition('fade down');
      }
    });
  // create sidebar and attach to menu open
  $('.ui.sidebar').sidebar('attach events', '.toc.item');
});