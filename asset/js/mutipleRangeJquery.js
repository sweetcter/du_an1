$(function () {
    $("#multi-range-slider").slider({
      range: true,
      min: 79000,
      max: 1375000,
      values: [79000, 1375000],
      slide: function (event, ui) {
        var startValue = ui.values[0];
        var endValue = ui.values[1];
        $("#start-value").text(startValue);
        $("#end-value").text(endValue);
      },
    });
  });