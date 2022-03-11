<footer class="container footer">
        <p>Faqja e punuar nga studentet e shkolles <strong>TICK Education Center </strong></p>.
    </footer>
    <script src="jquery-3.6.0.js"></script>
    <script src="slick.min.js"></script>
    <script src="jquery.validate.min.js"></script>
    <script>
        $.validator.setDefaults({
            submitHandler: function() {
                alert("submitted!");
            }
        });
    
        $().ready(function() {
            // validate the comment form when it is submitted
            //$("#commentForm").validate();
    
            // validate signup form on keyup and submit
            $("#login").validate({
                rules: { 
                    email: {
                        required: true,
                        email: true
                    },
                    fjalekalimi: {
                        required: true,
                        minlength: 5
                    }
                },
                messages: {
                    
                    fjalekalimi: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    email: {
                        required:"Please provide a email",
                        email:"Please enter a valid email address"     
                    }          
                }
            });
        });
        </script>
    <script type="text/javascript">
        
        $('.projects').slick({
            // dots: true,
            // infinite: false,
            // speed: 300,
            // nextArrow: false,
            // prevArrow: false,
            slidesToShow: 3,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>
</body>

</html>