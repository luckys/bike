$(function() {
    $('.carousel').carousel({
        interval: 3500
    });

    moment.locale(bike.locale);

    $('#renter_birthdate').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
    });

    $('#rent_period').daterangepicker({
        "timePicker": true,
        "timePicker24Hour": false,
        "timePickerIncrement": 30,
        "autoApply": false,
        "locale": daterangerpickerLocale[bike.locale],
        "minDate":moment().subtract(1,'days').startOf('day').toString(),
        "opens": "left"
    }, function(start, end, label) {

    });

});

var daterangerpickerLocale = {
    es:{
        "applyLabel": "Aplicar",
        "cancelLabel": "Cancelar",
        "format": "DD/MM/YYYY h A",
    },
    en:{
        "applyLabel": "Apply",
        "cancelLabel": "Cancel",
        "format": "DD/MM/YYYY h A",
    },
    de:{
        "applyLabel": "Apply",
        "cancelLabel": "Cancel",
        "format": "DD.MM.YYYY h A",
    }
};
