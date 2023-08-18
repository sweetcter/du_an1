$(document).ready(function() {
  let a = {};
  $.ajax({
  type: "POST",
  url: "../../du_an1/index.php?action=check-phantrang",
  dataType: "json",
  success: function (result, status, xhr) {
    a = result;
    console.log(a);
  },
  error: function (xhr, stauts, error) {
    console.log(error);
  },
 })

 $('#example').DataTable({
      paging: true,
      searching: true,
      lengthChange: true,
      pageLength: 10,
      ordering: true,
      info: true,
      data: a, // Đưa dữ liệu của bạn vào đây
      columns: [
          { data: 'product_name' },
          { data: 'name' },
          // ...Thêm các cột dữ liệu khác...
      ]
  });
});