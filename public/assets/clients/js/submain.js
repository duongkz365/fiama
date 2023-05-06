$(document).ready(function () {
  $("a.AddToCart").on("click", function (e) {
    e.preventDefault();

    var productId = $(this).data("product-id");
    var username = $(this).data("username");

    $.ajax({
      url: "ShoppingCart/AddToCart",
      type: "POST",
      data: {
        productId: productId,
        username: username,
      },
      success: function (response) {
        // Handle the response from the server
        console.log(response);
        if (response.msg == "pass") {
          $("#SlightRightCartProductArea").append(
            `
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="${window.location.origin + "/fiama"}${response.img}" alt="Image"></a>
                    <span onclick="DeleteProductFromCart(${response.customer_id},${response.product_id})" class="mini-cart-item-delete"><i class="icon-trash"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">${response.title}</a></h6>
                    <div class="d-flex">
                      <span class="mini-cart-quantity">1</span>
                      <span style="display: block;" class="ms-2 me-2">x</span>
                      <span>$</span>
                      <span class="mini-cart-price">${response.price}</span>
                    </div>
                    <div class="">
                        <button style="padding: 2px 6px; line-height: 1;" data-customer-id="${response.customer_id}" data-product-id="${response.product_id}" class="btnDecreaseShoppingCart btn btn-info" >-</button>
                        <button style="padding: 2px 6px; line-height: 1;" data-customer-id="${response.customer_id}" data-product-id="${response.product_id}" class="btnIncreaseShoppingCart btn btn-info" >+</button>
                    </div>
                </div>
            </div>
          `
          );
          var cart_count_text = $("#Header-cart-count").text();
          var cart_count = parseFloat(cart_count_text);
          $("#Header-cart-count").text(cart_count + 1);

          var totalText = $("#mini-cart-total").text();
          var total = parseFloat(totalText);
          $("#mini-cart-total").text(total + parseFloat(response.price));

          alert("Add Successfully!");
        } else {
          alert(response.msg);
        }
      },
      error: function (xhr) {
        // Handle any errors that occur during the AJAX request
        alert("An error occurred while adding product to cart. Please try again later.");
      },
    });
  });

  $(document).on("click", ".btnDecreaseShoppingCart", function (e) {
    e.preventDefault();

    var product_id = $(this).attr("data-product-id");
    var customer_id = $(this).attr("data-customer-id");

    var $btn = $(this); // Lưu tham chiếu đến button được click

    $.ajax({
      url: "ShoppingCart/decreaseShoppingCart",
      type: "POST",
      data: {
        product_id,
        customer_id,
      },
      success: function (response) {
        // Handle the response from the server
        if (response.msg == "pass") {
          var priceText = $btn.closest(".mini-cart-info").find(".mini-cart-price").text();
          var price = parseFloat(priceText);
          console.log(priceText);
          var quantityText = $btn.closest(".mini-cart-info").find(".mini-cart-quantity").text();
          var quantity = parseInt(quantityText);

          var totalText = $("#mini-cart-total").text();
          var total = parseFloat(totalText);

          $("#mini-cart-total").text(total - price);
          $btn
            .closest(".mini-cart-info")
            .find(".mini-cart-quantity")
            .text(quantity - 1);
        } else {
          alert(response.msg);
        }
      },
      error: function (xhr) {
        // Handle any errors that occur during the AJAX request
        alert("An error occurred while decrease amount of product. Please try again later.");
      },
    });
  });

  $(document).on("click", ".btnIncreaseShoppingCart", function (e) {
    e.preventDefault();

    var product_id = $(this).attr("data-product-id");
    var customer_id = $(this).attr("data-customer-id");

    var $btn = $(this); // Lưu tham chiếu đến button được click

    $.ajax({
      url: "ShoppingCart/increaseShoppingCart",
      type: "POST",
      data: {
        product_id,
        customer_id,
      },
      success: function (response) {
        // Handle the response from the server

        if (response.msg == "pass") {
          var priceText = $btn.closest(".mini-cart-info").find(".mini-cart-price").text();
          var price = parseFloat(priceText);
          console.log(priceText);
          var quantityText = $btn.closest(".mini-cart-info").find(".mini-cart-quantity").text();
          var quantity = parseInt(quantityText);

          var totalText = $("#mini-cart-total").text();
          var total = parseFloat(totalText);

          $("#mini-cart-total").text(total + price);
          $btn
            .closest(".mini-cart-info")
            .find(".mini-cart-quantity")
            .text(quantity + 1);
        } else {
          alert(response.msg);
        }
      },
      error: function (xhr) {
        // Handle any errors that occur during the AJAX request
        alert("An error occurred while decrease amount of product. Please try again later.");
      },
    });
  });
});

function DeleteProductFromCart(customer_id, product_id) {
  $.ajax({
    url: "ShoppingCart/DeleteProductFromCart",
    type: "POST",
    data: {
      productId: product_id,
      customerId: customer_id,
    },
    success: function (response) {
      // Handle the response from the server
      console.log(response);
      if (response.msg == "pass") {
        alert("Remove Successfully!");
        location.reload();
      } else {
        alert(response.msg);
      }
    },
    error: function (xhr) {
      // Handle any errors that occur during the AJAX request
      alert("An error occurred while remove product from cart. Please try again later.");
    },
  });
}
