
<?php
require_once("includes/php_utils.php");

// i18n:
$language = setLanguage();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CAROLE MEYER - SERVICES</title>
<meta name="Description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Dancing Script">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/stylecmco.css">
<script type='text/javascript' src='js/jquery-1.9.1.min.js'></script>
<!-- <script type='text/javascript' src='js/script.js'></script>
<script type='text/javascript' src='js/load_header.js'></script> -->
<script type='text/javascript' src='js/jssor.slider.min.js'></script>
  
</head>

<body>

<div class='container'>
    <header class='page-header'>
           <?php require_once 'header.php'; ?>
    </header> 

  <nav class="navbar navbar-default">
           <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#"><img src="logo/logo2016.png"/></a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php"><?php echo _("Bienvenue"); ?></a></li>
        <li class="dropdown active">
          <a href="#"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Services <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="services.php">Services</a></li>
            <li role="separator" class="divider"></li> 
            <li><a href="ateliers.php"><?php echo _("Ateliers"); ?></a></li> 
            <li role="separator" class="divider"></li>
            <li><a href="consultations.php"><?php echo _("Consultations"); ?></a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clients <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="clients.php">Clients</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="listclients.php"><?php echo _("ListeDesOrganisations"); ?></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><?php echo _("Temoignages"); ?></a></li>
            
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo _("Media"); ?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="video.php"><?php echo _("Videos"); ?></a></li> 
            <li role="separator" class="divider"></li>
            <li><a href="#"><?php echo _("Infolettres"); ?></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><?php echo _("LiensUtiles"); ?></a></li>
          </ul>
        </li>
          <li><a href="#"><?php echo _("AproposDeNous"); ?><span class="sr-only">(current)</span></a></li>
          <li><a href="#">Contact<span class="sr-only">(current)</span></a></li>

      <li>
      <?php print getUrlForOtherLang($language, "<span class='sr-only'>(current)</span>"); ?>
    </li>
<!-- 
          <li><a href="services.php?lang=en"><?php echo _("Anglais"); ?><span class="sr-only">(current)</span></a></li> -->
        </ul>
          <ul class="nav navbar-nav navbar-right">
          <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" id="loupe">
        </div>
        <!-- <button type="submit" class="btn btn-default">Submit</button> -->
        </form>
      </ul>
    
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->
  </nav> 
<!-- <div class='container'> -->
                  
      <div class='row touteslespages'>
        <div class='col-md-12 col-sm-12 col-xs-12'>
      <p><h3 class='h33'><?php echo _("Slogan"); ?></h3></p>
      <p class='slogan'><?php echo _("SubSlogan"); ?></p>
     
      </div>
      
       </div>
        
      <div class='col-md-4 col-sm-4 col-xs-12 '>
        <h3 class='h333'><?php echo _("Temoignages"); ?></h3>
        <div class='clientfeedback'>
         <p><?php echo _("TemoignageService"); ?>
              </p>
                <p class='client'>Suzanne</p>
        </div>
        <form>
          <h3><?php echo _("ContactezNous"); ?></h3>
  <div class="form-group">
    <label for="contact-name"><?php echo _("Nom"); ?></label>
    <input type="name" class="form-control" id="contact-name" placeholder="<?php echo _('Nom'); ?>">
  </div>
    <div class="form-group">
    <label for="contact-name"><?php echo _("Prenom");?></label>
    <input type="name" class="form-control" id="contact-name" placeholder="<?php echo _('Prenom');?>">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1"><?php echo _("Courriel");?></label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="<?php echo _('Courriel');?>">
    </div>
  
    <button type="submit" class="btn btn-default"><?php echo _("Envoyez"); ?></button>
  </form>

     
      </div><!-- end of col left -->


      <div class='col-md-8 col-sm-8 col-xs-12'>
        <h3 class='h333'><?php echo _("NosServices"); ?></h3>
      <div class='row'> 
      <div class='col-md-5 col-sm-5 col-xs-12 services'> 
            <p><center><img  src='photos/pages/dolphin3.jpg'  class='img-responsive'></center></p>
      </div>
       <div class='col-md-7 col-sm-7 col-xs-12 services'>
         <p><?php echo _("ServicePage"); ?>
</p>
       </div>
      
      </div><!-- end of first row right part -->

      </div><!-- end of col md-8 right -->

      <div class='clearfix'></div>

    
    <footer>
             <?php require_once 'footer.php'; ?>
    </footer> <!--end of footer -->



</div> <!--end of container  -->

<!-- Bootstrap core Javascript files
======================================================================================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>