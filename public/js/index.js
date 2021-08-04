$(document).ready(function() {
    $('.ui.dropdown').dropdown();

    $('.ui.link.cards').on('click', function() {
        $('.ui.modal').modal('show');
    })
});