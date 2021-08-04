$(document).ready(function() {

    $('#CNPJ').mask('00.000.000/0000-00', {reverse: true});
    $('#cep').mask('00000-000', {reverse: true});

    $('#cep').focusout(function() {
        var CEP = $('#cep').val();

        $.ajax({
            type: 'GET',
            url: '/empresas/busca/' + CEP,
            async: false,
            dataType: 'json',
            success: function(response) {
                $('#rua').val(response[0].logradouro);
                $('#bairro').val(response[0].bairro);
                $('#cidade').val(response[0].localidade);
                $('#estado').val(response[0].uf);
                console.log(response);
            }
        });
    });
});
