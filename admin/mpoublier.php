<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Sa3edni</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
   

 
    <link id="bs-css" href="public/css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="public/css/charisma-app.css" rel="stylesheet">
    <link href='public/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='public/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='public/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='public/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='public/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='public/bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='public/css/jquery.noty.css' rel='stylesheet'>
    <link href='public/css/noty_theme_default.css' rel='stylesheet'>
    <link href='public/css/elfinder.min.css' rel='stylesheet'>
    <link href='public/css/elfinder.theme.css' rel='stylesheet'>
    <link href='public/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='public/css/uploadify.css' rel='stylesheet'>
    <link href='public/css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>
<link rel="shortcut icon" href="public/img/logo.ico">

</head>

<body>
<div class="ch-container">
    <div class="row">
        
    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>Bienvenue à Sa3edni</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
            <div class="alert alert-info">
               Mot de passe oublié ? Entrer votre adresse e-mail et recevoir votre mot de passe
            </div>
            <form class="form-horizontal" action="controller/getmp.php" method="post">
                <fieldset>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                        <input type="email" class="form-control" placeholder="E-mail" name="email" required>
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="clearfix"></div>

                   
                    
                    <div class="alert">
               <a href="index.php">Connectez-vous</a>
            </div>
                    <p class="center col-md-5">
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </p>
                </fieldset>
            </form>
        </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='bower_components/moment/min/moment.min.js'></script>
<script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma.js"></script>


</body>
</html>
