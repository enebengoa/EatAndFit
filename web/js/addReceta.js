        $('#confirm-comision').on('show.bs.modal', function(e) {
            event.preventDefault();
            var data = $(e.relatedTarget).data();

            $('.btn-ok', this).data('href', data.href);
            var requestSend =false;
            jQuery("#recetaAdd").on('click',(function () {
                if(!requestSend)
                {
                    requestSend=true;

                    var id = jQuery(this).data('href');
                    
                    var menu= jQuery('#form_menu').val();
                    var hora= jQuery('#sub_menu_HoraIngesta').val();

                    jQuery.ajax({
                        type: 'POST',
                        url: "http://127.0.0.1/pfg_eneko/web/app_dev.php/AddSubMenu/"+menu+"/"+id+"/"+hora,
                        data: jQuery(this).serialize(),
                        complete: function(data) {
                            jQuery('#confirm-comision').modal('hide');
                            requestSend=false;
                        },
                        error: function(jqXHR) {
                            if (jqXHR.responseJSON.hasOwnProperty('form')) {
                                jQuery('#form_body').html(jqXHR.responseJSON.form);
                            }
                            requestSend=false;
                            


                            jQuery('.form_error').html(jqXHR.responseJSON.message);
                        }
                    });


                }

            }));
        });
