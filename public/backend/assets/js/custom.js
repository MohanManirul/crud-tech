$(document).ready(function() {
    $('#product-variation-form input[type="radio"]').on('change', function(){
        getVariationPrice();
    });
    
    function getVariationPrice() {
        // console.log('price');
        // console.log($('#product-variation-form').serializeArray());
        // return false;
        $.ajax({
            type: "POST",
            url: $('#route').val(),
            // url: "{{ route('pos.get.product.variation.price', ['guard' => guardCheck()]) }}",
            data: $('#product-variation-form').serializeArray(),
            success: function(data) {
                console.log(data);
            }
        });
    }
})