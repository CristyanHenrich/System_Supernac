$(document).ready(function() {

    $("#PrecoProduto").maskMoney({ prefix: 'R$ ', allowNegative: true, thousands: '.', decimal: ',', affixesStay: false });

    //Integer Number
    $(document).on("input", ".int-number", function(e) {
        this.value = this.value.replace(/[^0-9]/g, '');
    });

    

});