<script type="text/javascript">

    jQuery(function($) {
        $.validator.setDefaults({
            submitHandler: function () {
               register();

            }

        });

        $().ready(function () {
            // validate the comment form when it is submitted
            $("#reg").validate({
                errorElement: 'div',
                errorClass: 'help-block',
                focusInvalid: false,
                rules: {
                    select1: {
                        required: true
                    },
                    
                    
                    tempat_lahir: {
                        required: true
                    },
                    datepicker:  {
                        required: true
                    },
                   
                    nama_ayah: {
                        required: true
                    },
                    nama_ibu: {
                        required: true
                    },
                    checkbox : {
                        required: true
                    },
                },

                messages: {
                     select1: "Mohon Isi NIM Anda",

                  
                    tempat_lahir :"Mohon Isi Tempat Lahir Anda",
                    datepicker : "Mohon Isi Tanggal Lahir Anda",
                    nama_ayah : "Mohon Isi Nama Ayah ANda",
                    nama_ibu : "Mohon Isi Nama Ibu Anda",
                    checkbox : "Mohon Centang Syarat dan Ketentuan"
                    
                },
                highlight: function (e) {
                    $(e).closest('.form-group', '.input-group').removeClass('has-info').addClass('has-error');
                },

                success: function (e) {
                    $(e).closest('.form-group','.input-group').removeClass('has-error');//.addClass('has-info');
                    $(e).remove();
                }

            })
        });


        function register() {
            $("#loading").html('<div class="alert alert-block alert-success">Mohon Tunggu....</div>');

            $.post('daftar.input.php', $("form").serialize(), function (hasil) {
                $('form input[type="text"],form input[type="text"],form input[type="text"],form input[type="text"]').val('');
                $("#loading").html(hasil);
            });
        };




    });




</script>