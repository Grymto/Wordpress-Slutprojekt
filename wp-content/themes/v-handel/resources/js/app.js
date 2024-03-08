document.addEventListener('DOMContentLoaded', function () {
    // Check if the free shipping option is available
    var freeShippingOption = document.querySelector('input[name^="shipping_method"][value*="free_shipping"]');
    
    if (freeShippingOption) {
        // Check if the order total is above the free shipping threshold
        var orderTotal = parseFloat(document.querySelector('.order-total .woocommerce-Price-amount.amount').innerText.replace(/[^\d.]/g, ''));
        
        // Get all shipping options
        var shippingOptions = document.querySelectorAll('input[name^="shipping_method"]');
        
        if (orderTotal >= 1000) { // Replace 100 with your free shipping threshold
            // If order total is above the threshold, show only the free shipping option
            shippingOptions.forEach(function (option) {
                option.closest('li').style.display = option.value.indexOf('free_shipping') !== -1 ? 'block' : 'none';
            });
        } else {
            // If order total is below the threshold, show all shipping options
            shippingOptions.forEach(function (option) {
                option.closest('li').style.display = 'block';
            });
        }

        // Trigger a change event to update the shipping totals
        freeShippingOption.addEventListener('change', function () {
            if (this.checked) {
                // If free shipping is selected, hide other shipping options
                shippingOptions.forEach(function (option) {
                    if (option !== freeShippingOption) {
                        option.closest('li').style.display = 'none';
                    }
                });
                // Refresh the page
                location.reload();
            }
        });
    }
});