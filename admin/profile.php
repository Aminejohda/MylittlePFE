<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mon Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'styles.php'; ?>
    <link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>
    <?php include 'header.php'; ?>
<div class="ch-container">
<div class="row">
<div class="col-sm-2 col-lg-2"><?php include("menu.php");?></div>

<div id="content" class="col-lg-10 col-sm-10 ">
          <div class="row">

        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-th"></i>Mon Profil</h2>
                </div>
                <div class="ch-container">
             	
        <div class="col-xs-12 col-sm-12 col-md-13 col-lg-13 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 toppad" >
         <br><br>
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Mohamed Amine Mhiri</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="" class="img-circle img-responsive"> </div>
		        <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Civilité : </td>
                        <td>Homme</td>
                      </tr>
                      <tr>
                        <td>Nom & Prénom :</td>
                        <td>Med Amine Mhiri</td>
                      </tr>
                      <tr>
                        <td>Date de naissance :</td>
                        <td>01/24/1988</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Adresse personnelle :</td>
                        <td>Male</td>
                      </tr>
                        
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com">info@support.com</a></td>
                      </tr>
                       <tr>
                        <td>Ma dernière connexion : </td>
                        <td>Metro Manila,Philippines</td>
                      </tr>
                        <td>Numéro du Téléphone</td>
                        <td>123-4567-890(Téléphone fixe)<br><br>555-4567-890(Téléphone mobile)
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <a href="#" class="btn btn-primary">Modifier Mon Profil</a>
                  
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    </div>
</div>
</div>
</div>
</div>   
<?php include 'js.php';?>
</body>
</html>