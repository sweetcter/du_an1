$(document).ready(function () {
  $("#submitSize").click(function (e) {
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
    let colorId = $(".box-color-id").val();
    let sizeId = $(".box-size-id").val();
    let quanity = $(".product-detail-inc-quantity").val();
    $.ajax({
      type: "POST",
      url: "../../du_an1/index.php?action=add-to-cart",
      data: {
        colorId: colorId,
        sizeId: sizeId,
        quanity: quanity,
        productId: productId,
      },
      dataType: "json",
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
      error: function (xhr, stauts, error) {
        $("#favoriteProduct-containter").html(error);
      },
    });
    $(".cart-modal").addClass("cart-open");
    $(".cart-modal-container").addClass("cart-open");
  });
});
