$(document).ready(function () {
  $(".btnVerifyOrder").on("click", function () {
    var webroot = window.location.origin;
    var orderId = $(this).attr("data-order-id");
    // var customerId = $(this).data("customer-id");

    $.ajax({
      url: webroot + "/fiama/Order/handleOrderStatus",
      type: "POST",
      data: {
        orderId,
        status: "verified",
        // customerId,
      },
      success: function (response) {
        if (response == "pass") {
          alert("Success");
          window.location.reload();
        } else {
          alert("An error occurred! Please try again later!");
        }
      },
      error: function (xhr) {
        // Handle any errors that occur during the AJAX request
        alert("An error occurred! Please try again later!");
      },
    });
  });

  $(".btnDeliverOrder").on("click", function () {
    var webroot = window.location.origin;
    var orderId = $(this).attr("data-order-id");
    // var customerId = $(this).data("customer-id");

    $.ajax({
      url: webroot + "/fiama/Order/handleOrderStatus",
      type: "POST",
      data: {
        orderId,
        status: "delivering",
        // customerId,
      },
      success: function (response) {
        if (response == "pass") {
          alert("Success");
          window.location.reload();
        } else {
          alert("An error occurred! Please try again later!");
        }
      },
      error: function (xhr) {
        // Handle any errors that occur during the AJAX request
        alert("An error occurred! Please try again later!");
      },
    });
  });

  $(".btnVerifyDoneOrder").on("click", function () {
    var webroot = window.location.origin;
    var orderId = $(this).attr("data-order-id");
    // var customerId = $(this).data("customer-id");

    $.ajax({
      url: webroot + "/fiama/Order/handleOrderStatus",
      type: "POST",
      data: {
        orderId,
        status: "done",
        // customerId,
      },
      success: function (response) {
        if (response == "pass") {
          alert("Success");
          window.location.reload();
        } else {
          alert("An error occurred! Please try again later!");
        }
      },
      error: function (xhr) {
        // Handle any errors that occur during the AJAX request
        alert("An error occurred! Please try again later!");
      },
    });
  });

  $(".btnVerifyPaymentOrder").on("click", function () {
    var webroot = window.location.origin;
    var orderId = $(this).attr("data-order-id");
    // var customerId = $(this).data("customer-id");

    $.ajax({
      url: webroot + "/fiama/Order/handlePaidOrder",
      type: "POST",
      data: {
        orderId,
        paid: 1,
        // customerId,
      },
      success: function (response) {
        console.log(response);
        if (response == "pass") {
          alert("Success");
          window.location.reload();
        } else {
          alert("An error occurred! Please try again later!");
        }
      },
      error: function (xhr) {
        // Handle any errors that occur during the AJAX request
        alert("An error occurred! Please try again later!");
      },
    });
  });

  $(".btnCancelOrder").on("click", function () {
    var webroot = window.location.origin;
    var orderId = $(this).attr("data-order-id");
    // var customerId = $(this).data("customer-id");

    $.ajax({
      url: webroot + "/fiama/Order/handleOrderStatus",
      type: "POST",
      data: {
        orderId,
        status: "canceled",
        // customerId,
      },
      success: function (response) {
        if (response == "pass") {
          alert("Success");
          window.location.reload();
        } else {
          alert("An error occurred! Please try again later!");
        }
      },
      error: function (xhr) {
        // Handle any errors that occur during the AJAX request
        alert("An error occurred! Please try again later!");
      },
    });
  });
});
