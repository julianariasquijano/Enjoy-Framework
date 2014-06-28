<html>
    <head>
        
        <script src="assets/js/enjoy/e_common.js"></script>

        <script src="assets/js/jquery/jquery-1.7.1.min.js"></script>
        <script src="assets/js/jquery/ui/jquery-ui.js"></script>
        <link rel="stylesheet" href="assets/js/jquery/themes/hot-sneaks/jquery-ui.css" />

        <script src="assets/js/jquery/plugins/timepicker/jquery-ui-timepicker-addon.js"></script>
        <script src="assets/js/jquery/plugins/timepicker/jquery-ui-sliderAccess.js"></script>
        <script src="assets/js/jquery/plugins/timepicker/jquery-ui-timepicker-addon.css"></script>


        <script src="assets/js/jquery/plugins/dataTables/media/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" href="assets/js/jquery/plugins/dataTables/media/css/jquery.dataTables.css" />
        <link rel="stylesheet" href="assets/js/jquery/plugins/dataTables/media/css/jquery.dataTables_themeroller.css" />


        <!--<script type="text/javascript" src="assets/js/jquery/plugins/w2ui/w2ui-1.3.min.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/js/jquery/plugins/w2ui/w2ui-1.3.min.css" />-->

        <link href="assets/js/jquery/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link href="assets/js/jquery/plugins/bootstrap/bootstrap.theme.min.css" rel="stylesheet">
        <script src="assets/js/jquery/plugins/bootstrap/bootstrap.min.js"></script>

        <style>
            .crudTable tr:hover  {
                background-color: #BFE7F2 !important;
            }

        </style>
        
        <script>
            $(document).ready(function() {
                
                $("body").hide(0).delay(300).fadeIn(80); //Default Fade In
                
                $('.crudTable').dataTable({
                    "bJQueryUI": true,
                    "sPaginationType": "full_numbers",
                    "oLanguage": {
                        "sUrl": "assets/js/jquery/plugins/dataTables/languages/<?php  echo $language  ?>.txt"
                    }                    
                });
                
            } );
            
        </script>    
        
    </head>

    <body style="overflow: auto !important">
        <?php  require_once $viewFile;  ?>
    </body>
</html>