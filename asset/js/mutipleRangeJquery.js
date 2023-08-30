$(document).ready(function () {
  $("#multi-range-slider").slider({
    range: true,
    min: 79000,
    max: 1375000,
    values: [79000, 1375000],
    change: function (event, ui) {
      var startValue = ui.values[0];
      var endValue = ui.values[1];
      // $("#start-value").text(startValue);
      // $("#end-value").text(endValue);
      let a = 0;
      console.log(a);

      a = getValue(startValue, endValue);
      
      var dataId = $('.filter_type').attr('filter_type');
      console.log(dataId);
      if (dataId==='0') {
        location.href = `../../du_an1/index.php?action=price_filter_nam&start=${a[0]}&end=${a[1]}`;
      }else if(dataId==='1'){
        location.href = `../../du_an1/index.php?action=price_filter_nu&start=${a[0]}&end=${a[1]}`;  
      }else{
        location.href = `../../du_an1/index.php?action=price_filter&start=${a[0]}&end=${a[1]}`;  
      }  
    },
    slide: function (event, ui) {
      var startValue = ui.values[0];
      var endValue = ui.values[1];
      $("#start-value").text(startValue);
      $("#end-value").text(endValue);
    },
  });
  function getValue(startValue, endValue) {
    startValue = startValue === undefined ? 79000 : startValue;
    endValue = endValue === undefined ? 1375000 : endValue;
    let array = [];
    array.push(startValue);
    array.push(endValue);
    // $.ajax({
    //   type: "POST",
    //   url: "",
    //   data: {
    //     startValue: startValue,
    //     endValue: endValue,
    //   },
    //   success: function (result) {
    //     console.log(result);
    //   },
    //   error: function (error) {
    //     console.log(error);
    //   },
    // });
    console.log(startValue);
    console.log(endValue);
    return array;
  }
  $(".filter-list-size").click(function () {
    let that = this;
    let data_size_id = $(this).attr("data-size-id");
    console.log(data_size_id);
    var dataId_size = $('.filter_type_size').attr('filter_type_size');
      console.log(dataId_size);
      if (dataId_size==='0') {
        location.href = `../../du_an1/index.php?action=size_filter_nam&size_id=${data_size_id}`;
      }else if(dataId_size==='1'){
        location.href = `../../du_an1/index.php?action=size_filter_nu&size_id=${data_size_id}`;
      }else{
        location.href = `../../du_an1/index.php?action=size_filter&size_id=${data_size_id}`;
      }  
  });
});
