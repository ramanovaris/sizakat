<script type="text/javascript">

    jQuery(function($) {
        $.validator.setDefaults({
            submitHandler: function () {
               register();

            }

        });

        $().ready(function () {
            // validate the comment form when it is submitted
            $("#registrasi").validate({
                errorElement: 'div',
                errorClass: 'help-block',
                focusInvalid: false,
                rules: {
                    email: {
                        required: true
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    password2: {
                        required: true,
                        minlength: 5,
                        equalTo: "#password"
                    },

                    


                },

                messages: {

                    password: {
                        required: "Please specify a password.",
                        minlength: "Please specify a secure password."
                    },
                  
                },


                highlight: function (e) {
                    $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
                },

                success: function (e) {
                    $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
                    $(e).remove();
                }

            })
        });


        function register() {
            $("#loading").html('<div class="alert alert-block alert-success">Mohon Tunggu....</div>');

            $.post('daftar.input.php', $("form").serialize(), function (hasil) {
                $('form input[type="email"],form input[type="text"],form input[type="password"],form input[type="text"]').val('');
                $("#loading").html(hasil);
            });
        };




    });




</script>