<!-- CORE PLUGINS-->
<script src="asset/backend/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script src="asset/backend/assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
<script src="asset/backend/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="asset/backend/assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
<script src="asset/backend/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- PAGE LEVEL PLUGINS-->
<script src="asset/backend/assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
<script src="asset/backend/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
<script src="asset/backend/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript">
</script>
<script src="asset/backend/assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
<!-- CORE SCRIPTS-->
<script src="asset/backend/assets/js/app.min.js" type="text/javascript"></script>
<!-- PAGE LEVEL SCRIPTS-->
<script src="asset/backend/assets/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>


<!-- PAGE LEVEL PLUGINS -->
<script src="asset/backend/assets/vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript">
</script>
<!-- CORE SCRIPTS-->
<script src="asset/backend/assets/js/app.js" type="text/javascript"></script>
<!-- PAGE LEVEL SCRIPTS-->
<script type="text/javascript">
    $(function() {
        $('#login-form').validate({
            errorClass: "help-block",
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true
                }
            },
            highlight: function(e) {
                $(e).closest(".form-group").addClass("has-error")
            },
            unhighlight: function(e) {
                $(e).closest(".form-group").removeClass("has-error")
            },
        });
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
