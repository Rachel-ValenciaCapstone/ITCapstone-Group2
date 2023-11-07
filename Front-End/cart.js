'use strict';

// Formats card number to #### #### #### ####
function formats(ele, e) {
    if (ele.value.length < 19) {
        ele.value = ele.value.replace(/\W/gi, '').replace(/(.{4})/g, '$1 ');
        return true;
    } else {
        return false;
    };
};

function numberValidation(e) {
    e.target.value = e.target.value.replace(/[^\d ]/g, '');
    return false;
};

document.addEventListener('DOMContentLoaded', function () {
    // All initial elements
    const payAmountBtn = document.querySelector('#payAmount');
    const decrementBtn = document.querySelectorAll('#decrement');
    const incrementBtn = document.querySelectorAll('#increment');
    const quantityElem = document.querySelectorAll('#quantity');
    const priceElem = document.querySelectorAll('#price');
    const subtotalElem = document.querySelector('#subtotal');
    const taxElem = document.querySelector('#tax');
    const totalElem = document.querySelector('#total');
    const removeButtons = document.querySelectorAll('.product-close-btn');

    // Function to calculate the total amount
    function totalCalc() {
        const tax = 0.065;
        let subtotal = 0;
        let totalTax = 0;
        let shipping = 0;
        let total = 0;

        for (let i = 0; i < quantityElem.length; i++) {
            subtotal += Number(quantityElem[i].textContent) * Number(priceElem[i].textContent);
        };

        subtotalElem.textContent = subtotal.toFixed(2);

        totalTax = subtotal * tax;

        taxElem.textContent = totalTax.toFixed(2);

        total = subtotal + totalTax + shipping;

        totalElem.textContent = total.toFixed(2);
        payAmountBtn.textContent = total.toFixed(2);
    };

    // Add event listeners for increment and decrement buttons
    for (let i = 0; i < incrementBtn.length; i++) {
        incrementBtn[i].addEventListener('click', function () {
            let increment = Number(this.previousElementSibling.textContent);
            increment++;

            this.previousElementSibling.textContent = increment;

            totalCalc();
        });

        decrementBtn[i].addEventListener('click', function () {
            let decrement = Number(this.nextElementSibling.textContent);
            decrement = decrement <= 1 ? 1 : decrement - 1;

            this.nextElementSibling.textContent = decrement;

            totalCalc();
        });
    };

    // Add event listeners to the "Remove" buttons
    removeButtons.forEach((button, index) => {
        button.addEventListener('click', function () {
            const productCard = this.closest('.product-card');
            if (productCard) {
                productCard.remove();
                // After removing the item, recalculate the total price.
                if (quantityElem[index]) {
                    quantityElem[index].textContent = 0; // Set quantity to 0 when removed
                }
                totalCalc();
            };
        });
    });
});

// Automatically formats US 10 digit phone number
function phoneFormat(input) {
    input = input.replace(/\D/g, '');
    var size = input.length;
    if (size > 0) { input = input }
    if (size > 2) { input = input.slice(0, 3) + "-" + input.slice(3, 11) }
    if (size > 6) { input = input.slice(0, 7) + "-" + input.slice(7) }
    return input;
};
