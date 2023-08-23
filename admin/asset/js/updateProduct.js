$(document).ready(function () {
  const responves = {};
  $(".update-color-and-size").on("click", function () {
    let that = this;
    $("#show-color-and-size-update").css("display", "block");
    let productId = $(that).prev().attr("product-id");
    let colorNameId = $(that).prev().attr("color-name-id");
    let sizeId = $(that).prev().attr("size-id");
    let quantity = $(that).prev().attr("data-quantity");
    $.ajax({
      url: "../../du_an1/admin/index.php?act=show_product_update",
      type: "POST",
      data: {
        productId: productId,
        sizeId: sizeId,
        colorNameId: colorNameId,
        quantity: quantity,
      },
      dataType: "json",
      success: function (responve) {
        console.log(responve);
        for (const item in responve) {
          if (responve.hasOwnProperty(item)) {
            const value = responve[item];
            responves[item] = value;
          }
        }
        console.log(responves);
        $("#color_type").val(responve.color_type_id);
        $("#color_name_id_update").val(responve.color_type_id);
        $("#color_name_id_update").text(responve.color_type_name);

        $("#color_name_update").val(responve.color_name);
        const oldImage = `../../du_an1${responve.color_image}`;
        $("#old_image").attr("src", oldImage);
        // const targetSizeValue = responve.size_id;
        // let selectedSizeOption = $(
        //   "#size option[value='" + targetSizeValue + "']"
        // );
        // selectedSizeOption.remove();

        $("#size_id_update").val(responve.size_id);
        $("#size_id_update").text(responve.size_name);
        $("#size").val(responve.size_id);
        $("#product_quantity").val(responve.quantity);
      },
      error: function (error) {
        console.log("Có lỗi trong quá trình thực thi", error);
      },
    });
  });
  $("#QuantityRetype").on("click", function () {

    $("#color_type").val(responves.color_type_id);
    $("#color_name_id_update").val(responves.color_type_id);
    $("#color_name_id_update").text(responves.color_type_name);

    $("#color_name_update").val(responves.color_name);
    // const targetSizeValue = responves.size_id;
    // let selectedSizeOption = $(
    //   "#size option[value='" + targetSizeValue + "']"
    // );
    // selectedSizeOption.remove();

    $("#size_id_update").val(responves.size_id);
    $("#size_id_update").text(responves.size_name);
    $("#product_quantity").val(responves.quantity);
    $("#size").val(responves.size_id);
  });
  $("#updateProductCSQ").on("click",function(){
    console.log("OK");
    
  });
});
