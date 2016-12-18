        $('#confirm-comision').on('show.bs.modal', function(e) {
            event.preventDefault();
            var data = $(e.relatedTarget).data();

            $('.btn-ok', this).data('href', data.href);
            var requestSend =false;
            jQuery("#menuAdd").on('click',(function () {
                if(!requestSend)
                {
                    requestSend=true;

                    var id = jQuery(this).data('href');
                    
                    var lista= jQuery('#form_lista').val();
                    var cantidad= jQuery('#orden_compra_cantidad').val();

                    $.ajax({
                        type: 'POST',
                        url: "http://127.0.0.1/pfg_eneko/web/app_dev.php/AddOrdenCompra/"+lista+"/"+id+"/"+cantidad,
                        data: jQuery(this).serialize(),
                        success: function(jqXHR) {
                            jQuery('#confirm-comision').modal('hide');
                            requestSend=false;
                            $('#addConfirm').find('.modal-body').html(jqXHR.message);
                            $('#addConfirm').find('.modal-title').html('Añadido')
                            $('#addConfirm').modal('show');
                            $("#addConfirm").modal();
                        },
                        error: function(jqXHR) {
                            jQuery('#confirm-comision').modal('hide');
                            requestSend=false;
                            $('#addConfirm').find('.modal-body').html(jqXHR.responseJSON.message);
                            $('#addConfirm').find('.modal-title').html('Error')
                            $('#addConfirm').modal('show');
                            $("#addConfirm").modal();

                        }
                    });


                }

            }));
        });
