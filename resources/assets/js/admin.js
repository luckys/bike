$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(function () {
    $('.js_add_information button')
        .off('click').on('click', function () {
        vehicle.addInformation(this);
    });
    $('#modal_add_information_to_vehicle input[type="checkbox"]').bootstrapSwitch();

    $('.glyphicon.glyphicon-trash').click(function () {
        $(this).parent('form').submit();
    });
    $('.glyphicon.glyphicon-floppy-save').click(function () {
        $(this).parents('form').submit();
    });

    $("#sortable_information").sortable({
        update: function (event, ui) {
            $.ajax({
                data: $(this).sortable('serialize'),
                type: 'PUT',
                url: '/admin/informations/sort'
            });
        }
    });
    $("#sortable_vehicle").sortable({
        update: function (event, ui) {
            $.ajax({
                data: $(this).sortable('serialize'),
                type: 'PUT',
                url: '/admin/vehicles/sort'
            });
        }
    });
    $("#sortable_information_vehicle").sortable({
        update: function (event, ui) {
            var vehicleid = $("#sortable_information_vehicle").data('vehicleid');
            $.ajax({
                data: $(this).sortable('serialize'),
                type: 'PUT',
                url: '/admin/vehicles/' + vehicleid + '/sortinformations'
            });
        }
    });
    $('#reservation-filter button').click(function () {
        $('#reservation-list').html('<div class="overlay"> <i class="fa fa-refresh fa-spin"></i> </div>');
        $.get($(this).data('url'), function(data){
            $('#reservation-list').html(data);
        });
    });

});

var vehicle = {
    image: null,
    addInformation: function (elem) {
        elem = $(elem);
        $('#modal_add_information_to_vehicle input[name="information_id"]').val(elem.data('id'));
        $('#modal_add_information_to_vehicle input[name="fieldtype"]').val(elem.data('fieldtype'));
        var name = elem.data('name');
        if (elem.data('fieldtype') == 'input') {
            $('#information_checkbox_field').hide();
            $('#information_input_field').show();
            $('#modal_add_information_to_vehicle').find('label[for="name_es"]').html(name.es);
            $('#modal_add_information_to_vehicle').find('label[for="name_en"]').html(name.en);
            $('#modal_add_information_to_vehicle').find('label[for="name_de"]').html(name.de);
        } else {
            $('#information_input_field').hide();
            $('#information_checkbox_field').show();
            $('#information_checkbox_text').html(name.es);
        }
        $('#modal_add_information_to_vehicle').modal();
    },
    openCropper: function (input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                vehicle.image = $('#imagetocrop');
                vehicle.image.attr('src', e.target.result);
                vehicle.image.cropper({
                    aspectRatio: 200 / 200,
                    resizable: true,
                    zoomable: false,
                    rotatable: false,
                    multiple: false
                });
            }
            reader.readAsDataURL(input.files[0]);
            $('#modal_crop_image').modal({
                backdrop: 'static'
            });
        }
    },
    uploadImage: function () {
        var payload = {
            base64image: vehicle.image.cropper("getCroppedCanvas").toDataURL(),
            id: vehicle.image.data('id'),
        };
        $.post(vehicle.image.data('url'), payload, function (data) {
            window.location.reload();
        });
    },
};
var reservations = {
    
    
};