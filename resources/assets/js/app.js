
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

//Confirm de exclusão
$('table').on('click', '.form-delete', function (e) {
    e.preventDefault();
    var $form = $(this)
    $('#confirm').modal({ backdrop: 'static', keyboard: false }).on('click', '#delete-btn', function () {
        $form.submit()
    })
})

//validação de forms
window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }
                form.classList.add('was-validated');
        }, false);
    });
}, false);

//Máscaras
$('.date').mask('00/00/0000');
$('.cpf').mask('000.000.000-00', {reverse: true});

//$.datepicker.setDefaults( $.datepicker.regional[ "pt-BR" ] );
$( "#datepicker" ).datepicker({
    dateFormat: "dd/mm/yy",
    dayNames: ["Domingo", "Segunda", "Terça", "Quarte", "Quinta", "Sexta", "Sábado"],
    dayNamesMin: ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sab"],
    monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro']
});

