document.addEventListener("DOMContentLoaded", function() {
  var freeShippingOption = document.querySelector('input[name^="shipping_method"][value*="free_shipping"]');
  if (freeShippingOption) {
    var orderTotal = parseFloat(document.querySelector(".order-total .woocommerce-Price-amount.amount").innerText.replace(/[^\d.]/g, ""));
    var shippingOptions = document.querySelectorAll('input[name^="shipping_method"]');
    if (orderTotal >= 1e3) {
      shippingOptions.forEach(function(option) {
        option.closest("li").style.display = option.value.indexOf("free_shipping") !== -1 ? "block" : "none";
      });
    } else {
      shippingOptions.forEach(function(option) {
        option.closest("li").style.display = "block";
      });
    }
    freeShippingOption.addEventListener("change", function() {
      if (this.checked) {
        shippingOptions.forEach(function(option) {
          if (option !== freeShippingOption) {
            option.closest("li").style.display = "none";
          }
        });
        location.reload();
      }
    });
  }
});
