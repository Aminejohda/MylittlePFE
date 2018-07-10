<?php include("session.php");
include 'fade.php';
?>
  <div class="navbar navbar-default" role="navigation">
        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button> 
               <a href="../site/index.php"> <img src="public/img/photo/logo.png" class="navbar-brand"></a>
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#" class="btn btn-setting">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="logout.php" style="text-align :center;">Déconnexion</a></li>
                </ul>
            </div>
            <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                <li><a href="../site/index.php"><i class="glyphicon glyphicon-globe"></i> Visite Site</a></li>
            </ul>

        </div>
    </div>
     