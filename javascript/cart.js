

var totalPriceItems = $('.total-price');



function updateTotal() {
    var total = 0;
    $('.total-price').each(function(ind) {
        var quantityAmount = parseInt($(this).prev('.quantity').find('input').val());
        total += (quantityAmount * parseInt($(this).text()));
    });
    $('.total-payment').text('Total: ' + total + '$');
}

/**
 * Minus button Click Listeners
 */
$('.minus-button').on('click', function(e) {

    var amountInput = $(this).next('input');
    var currentAmount = parseInt(amountInput.val());

    if((currentAmount - 1) > -1) {
        amountInput.val(currentAmount - 1);
        updateTotal()
    }
});

$('.delete-button').on('click', function(e) {
        $(this).closest('.item').remove();
updateTotal()
});

/**
 * Plus button click listener
 */
$('.plus-button').on('click', function(e) {
    var amountInput = $(this).prev('input');
    var currentAmount = parseInt(amountInput.val());

    if((currentAmount + 1) < 100) {
        amountInput.val(currentAmount + 1);
        updateTotal()
    }
});

//Call it here so it calculate the values frm above
updateTotal();