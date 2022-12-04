function runMasks(){
    $('.zip').mask('00000-000')
    $('.cpf').mask('491.630.498-56')
}

function getAddress(){
    $('.zip').on('keyup', function(e){
        if ($(this).val().length == 9) {
            $.ajax({
                url : "http://viacep.com.br/ws/" + $(this).val().replace('-', '') + "/json",
                type : 'post',
                datatype: 'JSON',
           })
           .done(function(json){
                $('.address').val(json['logradouro']);
                $('.neighbourhood').val(json['bairro']);
                $('.city').val(json['localidade']);
                $('.state').val(json['uf']);
           })
        }
    })
}

function runCheck(){
    $('.final-value').text('R$ ' + $('#value').val());
}

function calcDelivery() {
    $('input[name="delivery"]').on('change', function(){
        if ($(this).val() == 'home') {
            value = parseFloat($('#value').val()) + 10;
        } else {
            value = parseFloat($('#value').val()) - 10;
        }
        $('#value').val(value.toFixed(2));
        runCheck();
    });
    
}

runMasks();
runCheck();
calcDelivery();
getAddress();