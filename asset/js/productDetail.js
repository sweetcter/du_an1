$(document).ready(function () {
  $("#submitSize").click(function () {
    let sizeId = $(this).attr("size-id");
    let productId = $(this).attr("product_id");
    $.ajax({
      type: "POST",
      url: "../../du_an1/index.php?action=check-quanity",
      data: {
        sizeId: sizeId,
        productId: productId,
      },
      success: function (result, status, xhr) {
        $("#quantity_product").text(`Còn lại: ${result} sản phẩm`);
      },
      error: function (xhr, stauts, error) {
        $("#quantity_product").text(error);
      },
    });
  });

  $("#addToCart").click(function () {
    let productId = $("#submitSize").attr("product_id");
    let colorNameId = $(".box-color-name-id").val();
    let sizeId = $(".box-size-id").val();
    let quantity = $("#product-detail-inc-quantity").val();
    $.ajax({
      type: "POST",
      url: "../../du_an1/index.php?action=add-to-cart",
      data: {
        colorId: colorNameId,
        sizeId: sizeId,
        quantity: quantity,
        productId: productId,
      },
      // dataType: "json",
      //   success: function (result, status, xhr) {
      //     let cartItems = result;
      //     console.log(cartItems.quantity);
      //     let productInfo = `<div class="favoriteProduct-info">
      //         <a href="#" class="favoriteProduct-img">
      //             <div class="favoriteProduct-img-first">
      //                 <img src="../<?= $ROOT_URL ?>${cartItem.main_image_url}" alt="" />
      //             </div>
      //             <div class="favoriteProduct-second-img">
      //                 <img src="../<?= $ROOT_URL ?>${cartItem.second_image_url}" alt="" />
      //             </div>
      //         </a>
      //         <div class="favoriteProduct-details">
      //             <a href="" class="favoriteProduct-link">hehe ${i}</a>
      //             <div class="favoriteProduct-option">
      //                 <div class="favoriteProduct-choose">
      //                     <div class="favoriteProduct-choose-color">
      //                         Màu sắc
      //                         <?php $color_result = select_color_name_by_id(${cartItem.productId}); ?>
      //                                 <span>
      //                                    <?= $color_result['color_name'] ?>
      //                                 </span>
      //                         </div>
      //                     <div class="favoriteProduct-choose-size">
      //                     SIZE:
      //                     <?php $get_size = select_size_by_id(${cartItem.sizeId}) ?>
      //                     <span><?= $get_size['size_name'] ?></span>
      //                     </div>
      //                 </div>
      //                 <div class="favoriteProduct-inc">
      //                     <i class="fa-solid fa-minus" id="favoriteProduct-inc-minus"></i>
      //                     <input type="number" value="${cartItem.quanity}" id="favoriteProduct-inc-quantity" class="favoriteProduct-inc-quantity" />
      //                     <i class="fa-solid fa-plus" id="favoriteProduct-inc-plus"></i>
      //                 </div>
      //                 <span class="favoriteProduct-price">${cartItem.product_price}₫</span>
      //             </div>
      //         </div>
      //         <div class="favoriteProduct-close">
      //             <i class="fa-solid fa-xmark"></i>
      //         </div>
      //     </div>`;
      //     $("#favoriteProduct-containter").append(productInfo);
      //     $("#favoriteProduct-containter").text(JSON.stringify(cartItems));
      //   },
    });
    reloadPage();
  });
  function decreaseQuantity(
    decrBtn,
    inputValue,
    productQuantityValue,
    showValue
  ) {
    $(document).on("click", `${decrBtn}`, function () {
      // let productId = $("#submitSize").attr("product_id");
      let quantityValue = $(`${inputValue}`).val();
      let containQuantity = $(`${productQuantityValue}`).val();
      $.ajax({
        type: "POST",
        url: "../../du_an1/index.php?action=update_quantity_product",
        data: {
          type: "decrease",
          // productId: productId,
          quantityValue: quantityValue,
          containQuantity: containQuantity,
        },
        // dataType: "json",
        success: function (result) {
          // console.log(typeof result);
          let stringToNumberResult = Number(result);
          if (showValue) {
            $(`${showValue}`).text(result);
          }
          $(`${inputValue}`).val(stringToNumberResult);
        },
        error: function (error) {
          console.log(error);
        },
      });
    });
  }
  decreaseQuantity(
    ".product-detail-inc-minus",
    "#product-detail-inc-quantity",
    "#product_detail_contain_quantity",
    "#product_detail_quantity"
  );
  //   cartModal-inc-minus
  // cartModal-inc-quantity
  // cartModal-inc-plus
  function increaseQuantity(
    decrBtn,
    inputValue,
    productQuantityValue,
    showValue
  ) {
    $(document).on("click", `${decrBtn}`, function () {
      // console.log("Cộng");
      // let productId = $("#submitSize").attr("product_id");
      let quantityValue = $(`${inputValue}`).val();
      let containQuantity = $(`${productQuantityValue}`).val();
      $.ajax({
        type: "POST",
        url: "../../du_an1/index.php?action=update_quantity_product",
        data: {
          type: "increase",
          // productId: productId,
          quantityValue: quantityValue,
          containQuantity: containQuantity,
        },
        // dataType: "json",
        success: function (result) {
          // console.log(typeof result);
          let stringToNumberResult = Number(result);
          if (showValue) {
            $(`${showValue}`).text(result);
          }
          $(`${inputValue}`).val(stringToNumberResult);
        },
      });
    });
  }
  increaseQuantity(
    ".product-detail-inc-plus",
    "#product-detail-inc-quantity",
    "#product_detail_contain_quantity",
    "#product_detail_quantity"
  );
  $(".cartModal-inc-minus").click(function () {
    // Xử lý sự kiện click
    let productId = $("#submitSize").attr("product_id");
    let getQuantity = $(this).siblings(".cart_product_quantity").val();
    let boxQuantityValue = $(this).next();
    let quantityLimitValue = $(this).next().val();
    let limitNumber = 2;

    if (Number(boxQuantityValue.val()) < limitNumber) {
      return false;
    }
    $.ajax({
      type: "POST",
      url: "../../du_an1/index.php?action=update_quantity_product",
      data: {
        type: "decrease",
        quantityValue: quantityLimitValue,
        containQuantity: getQuantity,
        productId:productId,
      },
      // dataType: "json",
      success: function (result) {
        // console.log(typeof result);
        let stringToNumberResult = Number(result);
        boxQuantityValue.val(stringToNumberResult);
      },
    });
  });
  $(".cartModal-inc-plus").click(function () {
    // Xử lý sự kiện click
    let productId = $("#submitSize").attr("product_id");
    let getQuantity = $(this).siblings(".cart_product_quantity").val();
    let boxQuantityValue = $(this).prev();
    let quantityLimitValue = $(this).prev().val();
    if (Number(quantityLimitValue) === Number(getQuantity)) {
      return false;
    }

    $.ajax({
      type: "POST",
      url: "../../du_an1/index.php?action=update_quantity_product",
      data: {
        type: "increase",
        quantityValue: quantityLimitValue,
        containQuantity: getQuantity,
        productId:productId,
      },
      // dataType: "json",
      success: function (result) {
        // console.log(result);
        let stringToNumberResult = Number(result);
        // console.log(stringToNumberResult);
        boxQuantityValue.val(stringToNumberResult);
      },
    });
  });
  function reloadPage() {
    // $.ajax({
    //   type: "GET",
    //   url: "../../du_an1/index.php?action=reload_cart",
    // });
    // location.reload();
    // $('#reloadPage').click();
    location.reload();
    // setTimeout(function(){
    //   $('#header-content-cart').click();
    // },3000);
  }
});
