$(document).ready(function () {
  function reloadShowQuantity() {
    $.ajax({
      type: "GET",
      url: "../../du_an1/index.php?action=show_quantity_in_cart",
      dataType: "json",
      success: function (responve) {
        console.log(responve);
        $(".product-quantity").text(`${responve}`);
        $(".cart-header-second span").text(`${responve} sản phẩm`);
      },
      error: function (error) {
        console.log(error, "lỗi");
      },
    });
  }
  $("#auto__fill__btn").on("click", function () {
    let customerId = $("#customer_id");
    let customerfirstAndLastName = $("#customerFirstAndLastName");
    let customerAddress = $("#customerAddress");
    let customerNumberPhone = $("#customerNumberPhone");
    let customerEmail = $("#customerEmail");
    // let customerNote = $("#customerNote");
    $.ajax({
      type: "POST",
      url: "../../du_an1/index.php?action=get_customer_info",
      data: {
        customerId: customerId.val(),
      },
      dataType: "json",
      success: function (result) {
        if (result) {
          customerfirstAndLastName.val(result.full_name);
          customerAddress.val(result.address);
          customerNumberPhone.val(result.phone);
          customerEmail.val(result.email);
        }
      },
      error: function (error) {
        console.log(error);
      },
    });
  });
  $("#btn-pay").on("click", function (e) {
    e.preventDefault();
    let customerId = $("#customer_id");
    let customerfirstAndLastName = $("#customerFirstAndLastName");
    let customerAddress = $("#customerAddress");
    let customerNumberPhone = $("#customerNumberPhone");
    let customerEmail = $("#customerEmail");
    let customerNote = $("#customerNote");
    
    $.ajax({
      type: "POST",
      url: "../../du_an1/index.php?action=order_handle",
      data: {
        customerId: customerId.val(),
        customerfirstAndLastName: customerfirstAndLastName.val(),
        customerAddress: customerAddress.val(),
        customerNumberPhone: customerNumberPhone.val(),
        customerEmail: customerEmail.val(),
        customerNote: customerNote.val(),
      },
      // dataType:"json",
      success: function (responve) {
        reloadShowQuantity();
        alert("Đặt hàng thành công, đang xử lý đơn hàng");
        // location.reload();
        console.log("OK");
        console.log(responve);
      },
      error: function (error) {
        console.log(error);
      },
    });
  });
});
