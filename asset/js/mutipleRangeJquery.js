$(document).ready(function () {
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
      // getValue(startValue, endValue);
    },
  });
  // function getValue(startValue, endValue) {
  //   startValue = startValue === undefined ? 79000 : startValue;
  //   endValue = endValue === undefined ? 1375000 : endValue;
  //   $.ajax({
  //     type: "POST",
  //     url: "",
  //     data: {
  //       startValue: startValue,
  //       endValue: endValue,
  //     },
  //     success: function (result) {
  //       console.log(result);
  //     },
  //     error: function (error) {
  //       console.log(error);
  //     },
  //   });
  //   console.log(startValue);
  //   console.log(endValue);
  // }
  // getValue();
});
