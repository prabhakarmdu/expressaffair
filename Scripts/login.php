<script type="text/javascript">

    (function ($, W, D)
    {
        var JQUERY4U = {};

        JQUERY4U.UTIL =
                {
                    setupFormValidation: function ()
                    {
                        //form validation rules
                        $("#login-form").validate({
                            rules: {
                                email: {
                                    required: true,
                                    email: true
                                },
                                password: {
                                    required: true,
                                    minlength: 8,
                                    maxlength: 15,
                                }
                            },
                            messages: {
                                email: "Please specify valid email",
                                password: "Valid password required (8-15 characters)"
                            }
                        });
                    }
                }

//when the dom has loaded setup form validation rules
        $(D).ready(function ($) {
            JQUERY4U.UTIL.setupFormValidation();
            $('#submitlogin').on('click', function () {
                if ($('#login-form').valid()) {
                    getintoaccount("service/customerserver.php", "login-form");
                }
            });
        });

    })(jQuery, window, document);
</script>