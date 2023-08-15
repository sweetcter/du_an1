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
      url: "../../du_an1/index.php?action=add_to_cart",
      data: {
        colorId: colorNameId,
        sizeId: sizeId,
        quantity: quantity,
        productId: productId,
      },
      // dataType: "json",
      success: function () {
        reloadCart(
          increaseProductInCart,
          decreaseQuantityInCart,
          handleDeleteProductInCart
        );
        openModalCart();
      },
      error: function (error) {
        console.error("lỗi", error);
      },
    });
    // localStorage.setItem("openModal", true);
  });
  function decreaseQuantity(
    decrBtn,
    inputValue,
    productQuantityValue,
    showValue
  ) {
    $(document).on("click", `${decrBtn}`, function () {
      // let productId = $("#submitSize").attr("product_id");
      let currentQuantity = $(`${inputValue}`).val();
      let remainingAmount = $(`${productQuantityValue}`).val();
      $.ajax({
        type: "POST",
        url: "../../du_an1/index.php?action=product_add_quantity_to_cart",
        data: {
          type: "decrease",
          // productId: productId,
          currentQuantity: currentQuantity,
          remainingAmount: remainingAmount,
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
  function increaseQuantity(
    decrBtn,
    inputValue,
    productQuantityValue,
    showValue
  ) {
    $(document).on("click", `${decrBtn}`, function () {
      // console.log("Cộng");
      // let productId = $("#submitSize").attr("product_id");
      let currentQuantity = $(`${inputValue}`).val();
      let remainingAmount = $(`${productQuantityValue}`).val();
      $.ajax({
        type: "POST",
        url: "../../du_an1/index.php?action=product_add_quantity_to_cart",
        data: {
          type: "increase",
          // productId: productId,
          currentQuantity: currentQuantity,
          remainingAmount: remainingAmount,
        },
        // dataType: "json",
        success: function (result) {
          // console.log(result);
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
  function decreaseQuantityInCart() {
    $(".cartModal-inc-minus").click(function () {
      // Xử lý sự kiện click
      let that = this;
      let productId = $(that).prev().attr("product_id");
      let remainingAmount = $(that).siblings(".cart_product_quantity").val();
      let boxQuantityInput = $(that).next();
      let currentQuantity = $(that).next().val();
      let limitNumber = 2;
      // console.log(remainingAmount);
      // console.log(productId);
      // console.log(currentQuantity);
      if (Number(boxQuantityInput.val()) < limitNumber) {
        // console.log("Dừng");
        return false;
      }
      $.ajax({
        type: "POST",
        url: "../../du_an1/index.php?action=update_quantity_product",
        data: {
          type: "decrease",
          remainingAmount: remainingAmount,
          currentQuantity: currentQuantity,
          productId: productId,
        },
        dataType: "json",
        success: function (result) {
          // console.log(result);
          // console.log("ok");
          let stringToNumberResult = Number(result.currentQuantity);
          boxQuantityInput.val(stringToNumberResult);

          let newPrice = document.querySelector("#cart-total-new-price");
          let oldPrice = document.querySelector("#cart-total-old-price");

          // localStorage.setItem("newPrice",`${result.new_price}₫`);
          const newPriceFormatted = new Intl.NumberFormat("vi-VN", {
            style: "currency",
            currency: "VND",
          }).format(result.new_price);
          const oldPriceFormatted = new Intl.NumberFormat("vi-VN", {
            style: "currency",
            currency: "VND",
          }).format(result.old_price);
          newPrice.textContent = newPriceFormatted;
          oldPrice.textContent = oldPriceFormatted;
        },
        error: function (error) {
          console.log(error + "Lỗi");
        },
      });
    });
  }
  decreaseQuantityInCart();
  function increaseProductInCart() {
    $(".cartModal-inc-plus").click(function () {
      // Xử lý sự kiện click
      let that = this;
      let productId = $(that).prev().prev().prev().attr("product_id");
      let remainingAmount = $(that).siblings(".cart_product_quantity").val();
      let boxQuantityInput = $(that).prev();
      let currentQuantity = $(that).prev().val();
      console.log(productId);
      console.log(remainingAmount);
      console.log(boxQuantityInput);
      console.log(currentQuantity);
      if (Number(remainingAmount) === Number(currentQuantity)) {
        return false;
      }
      $.ajax({
        type: "POST",
        url: "../../du_an1/index.php?action=update_quantity_product",
        data: {
          type: "increase",
          remainingAmount: remainingAmount,
          currentQuantity: currentQuantity,
          productId: productId,
        },
        dataType: "json",
        success: function (result) {
          let stringToNumberResult = Number(result.currentQuantity);
          boxQuantityInput.val(stringToNumberResult);
          let newPrice = document.querySelector("#cart-total-new-price");
          let oldPrice = document.querySelector("#cart-total-old-price");

          const newPriceFormatted = new Intl.NumberFormat("vi-VN", {
            style: "currency",
            currency: "VND",
          }).format(result.new_price);
          const oldPriceFormatted = new Intl.NumberFormat("vi-VN", {
            style: "currency",
            currency: "VND",
          }).format(result.old_price);

          newPrice.textContent = newPriceFormatted;
          oldPrice.textContent = oldPriceFormatted;
          // console.log("ổn");
        },
        error: function (error) {
          console.log(error + "Lỗi");
        },
      });
    });
  }
  increaseProductInCart();
  // $("#test2").click(function () {
  //   let testQuery = $('.hehe');
  //   $("#test2").html('<div class="hehe">Đã thêm</div>');
  //   console.log(testQuery);
  // });
  function reloadCart(
    increaseCallBack,
    decreaseCallBack,
    deleteProductInCartCb
  ) {
    $.ajax({
      type: "POST",
      url: "../../du_an1/index.php?action=load_cart",
      dataType: "json",
      success: function (responve) {
        let cartItems = responve;
        let productInfo = ``;
        let cartTotalInfo = `
      <div class="product-cart-bottom">
        <div class="cart-total-price">
            <span class="cart-total-price-title">Tổng tiền:</span>
            <div class="cart-total-price">
                <span id="cart-total-new-price" class="cart-total-new-price"></span>
                <span id="cart-total-old-price" class="cart-total-old-price"></span>
            </div>
        </div>
        <div class="pay-to-cart">
            <button>Tiếp tục mua sắm</button>
            <button class="btn-pay-to-cart">Thanh Toán</button>
        </div></div>`;
        const productQuantityInCart = Object.keys(cartItems).length;
        if (productQuantityInCart == 0) {
          localStorage.setItem("emptyCart", true);
          $("#favoriteProduct-containter").text(
            " Bạn không có sản phẩm nào trong giỏ hàng của bạn."
          );
        } else {
          localStorage.setItem("emptyCart", false);
        }
        for (const cartItem in cartItems) {
          if (cartItems.hasOwnProperty(cartItem)) {
            const item = cartItems[cartItem];
            productInfo += ` <div class="favoriteProduct-info">
            <a href="" class="favoriteProduct-img">
                <div class="favoriteProduct-img-first">
                    <img src="../du_an1/${item.main_image_url}" alt="" />
                </div>
                <div class="favoriteProduct-second-img">
                    <img src="../du_an1/${item.second_image_url}" alt="" />
                </div>
            </a>
            <div class="favoriteProduct-details">
                <a href="#" class="favoriteProduct-link">${item.product_name}</a>
                <div class="favoriteProduct-option">
                    <div class="favoriteProduct-choose cart">
                        <div class="favoriteProduct-choose-color c">
                            MÀU:
                            <span>${item.color_name}</span>
                        </div>
                        <div class="favoriteProduct-choose-size">
                            SIZE:
                            <span>${item.size_name}</span>
                        </div>
                    </div>
                    <div class="favoriteProduct-inc">
                        <span id="cart_product_id" product_id="${item.product_id}"></span>
                        <i class="fa-solid fa-minus cartModal-inc-minus" id="cartModal-inc-minus"></i>
                        <input type="number" disabled value="${item.quantity}" id="cartModal-inc-quantity" class="favoriteProduct-inc-quantity" />
                        <i class="fa-solid fa-plus cartModal-inc-plus" id="cartModal-inc-plus"></i>
                        <input type="hidden" value="${item.remainingAmount}" class="cart_product_quantity">
                    </div>
                    <span class="favoriteProduct-price">${item.product_price}</span>
                    <del class="favoriteProduct-price-old">${item.product_price}</del>
                </div>
            </div>
            <div class="delete-from-cart favoriteProduct-close" product_id="${item.product_id}">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>`;
          }
        }
        $("#favoriteProduct-containter").html(productInfo);
        // console.log(productInfo);
        $("#product-cart-bottom-container").html(cartTotalInfo);
        if (typeof increaseCallBack === "function") {
          increaseCallBack();
        }
        if (typeof decreaseCallBack === "function") {
          decreaseCallBack();
        }
        if (typeof deleteProductInCartCb === "function") {
          deleteProductInCartCb();
        }
        reloadShowQuantity();

        showCartNotitication();
      },
      error: function (error) {
        console.log(error, "lỗi");
      },
    });
  }
  function handleDeleteProductInCart() {
    let thisProductId = 0;
    $(".delete-from-cart").on("click", function () {
      $(".confirm-modal").addClass("open-confirm");
      $(".confirm-container").addClass("open-confirm");
      thisProductId = $(this).attr("product_id");
    });
    $(".confirm-container").on("click", function (e) {
      e.stopPropagation();
    });

    function closeConfirmModal(tagClick) {
      $(`${tagClick}`).on("click", function () {
        $(".confirm-modal").removeClass("open-confirm");
        $(".confirm-container").removeClass("open-confirm");
      });
    }
    function autoCloseConfirmModal() {
      $(".confirm-modal").removeClass("open-confirm");
      $(".confirm-container").removeClass("open-confirm");
    }
    closeConfirmModal(".confirm-modal");
    closeConfirmModal(".confirm-close");
    closeConfirmModal(".cancel-confirm");

    $("#agree-confirm").on("click", function () {
      let getProductId = thisProductId;
      console.log(getProductId);
      $.ajax({
        type: "POST",
        url: "../../du_an1/index.php?action=product_delete_quantity_to_cart",
        data: {
          productId: getProductId,
        },
        dataType: "json",
        success: function (responve) {
          // console.log(responve);
          $("#product-quantity").text(`${responve}`);
          $(".cart-header-second span").text(`${responve} sản phẩm`);
          autoCloseConfirmModal();
          reloadCart(
            increaseProductInCart,
            decreaseQuantityInCart,
            handleDeleteProductInCart
          );
        },
        error: function (error) {
          console.log(error, "lỗi");
        },
      });
      // localStorage.setItem("openModal", true);
    });
  }
  handleDeleteProductInCart();

  // function reloadPage() {
  //   location.reload();
  // }
  function reloadShowQuantity() {
    $.ajax({
      type: "GET",
      url: "../../du_an1/index.php?action=show_quantity_in_cart",
      dataType: "json",
      success: function (responve) {
        // console.log(responve);
        $("#product-quantity").text(`${responve}`);
        $(".cart-header-second span").text(`${responve} sản phẩm`);
      },
      error: function (error) {
        console.log(error, "lỗi");
      },
    });
  }
  // reloadShowQuantity();

  // let openModal = localStorage.getItem("openModal") || "false";
  // if (openModal !== "false") {
  //   setTimeout(function () {
  //     $("#header-content-cart").click();
  //   }, 500);
  // }
  function openModalCart() {
    setTimeout(function () {
      $("#header-content-cart").click();
    }, 100);
  }
  localStorage.setItem("emptyCart", true);
  function showCartNotitication() {
    let checkEmptyCart = localStorage.getItem("emptyCart") || "false";
    if (checkEmptyCart !== "false") {
      let cartNotitication = `<span style="text-align: center; font-weight: 600;display:block">Bạn không có sản phẩm nào trong giỏ hàng của bạn. </span>`;
      $("#favoriteProduct-containter").append(cartNotitication);
    }
  }
  showCartNotitication();
});
