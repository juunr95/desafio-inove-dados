$(document).ready(function() {

    $('#cpf').mask('000.000.000-00', {reverse: true});

    $('.ui.form')
        .form({
            fields: {
                nome: {
                    identifier: 'nome',
                    rules: [
                        {
                            type        : 'empty',
                            prompt      : 'Por favor, insira seu nome'
                        }
                        
                    ]
                },
                sobrenome: {
                    identifier: 'sobrenome',
                    rules: [
                        {
                            type        : 'empty',
                            prompt      : 'Por favor, insira seu sobrenome'
                        }
                        
                    ]
                },
                cpf: {
                    identifier: 'cpf',
                    rules: [
                        {
                            type        : 'regExp',
                            value       : /^([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[\/]?[0-9]{4}[-]?[0-9]{2})|([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})/,
                            prompt      : 'Por favor, insira seu CPF corretamente'
                        }
                        
                    ]
                },
                email: {
                    identifier: 'email',
                    rules: [
                        {
                            type   : 'regExp',
                            value  : /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/, 
                            prompt : 'Por favor, insira um email válido'
                        }   
                    ]
                },
                senha: {
                    identifier: 'senha',
                    rules: [
                        {
                            type   : 'regExp',
                            value  : /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/, 
                            prompt : 'Por favor, insira uma senha válida (<b>8 á 15 caracteres</b>) que contenham:' + 
                            '<br/> - <b>1 letra maiúscula</b>' +
                            '<br/> - <b>1 letra minúscula</b>' +
                            '<br/> - <b>1 digito numérico</b>' +
                            '<br/> - <b>1 caracter especial</b>'
                        }   
                    ]
                },
                confirmacao: {
                    identifier: 'confirmacao',
                    rules: [
                        {
                            type   : 'match[senha]',
                            prompt : 'As senhas não são iguais'
                        }   
                    ]
                },
            }
        })
});