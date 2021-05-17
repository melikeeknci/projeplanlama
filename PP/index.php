
<?php
include 'nedmin/connect.php';
$fetch_settings = $db ->prepare("SELECT * FROM site_settings WHERE settings_id=1");
    $fetch_settings->execute();
    $fetch_set=$fetch_settings->fetch(PDO::FETCH_ASSOC);


    $fetch_skill = $db ->prepare("SELECT * FROM skills WHERE skill_id=1");
    $fetch_skill->execute();
    $fetch_s=$fetch_skill->fetch(PDO::FETCH_ASSOC);

    $fetch_about = $db ->prepare("SELECT * FROM about_me WHERE about_id=1");
    $fetch_about->execute();
    $fetch_a=$fetch_about->fetch(PDO::FETCH_ASSOC);

    $fetch_contact = $db ->prepare("SELECT * FROM contact WHERE contact_id=1");
    $fetch_contact->execute();
    $fetch_c=$fetch_contact->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> <?php echo $fetch_set['site_title']; ?> </title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="pp/img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="pp/img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="pp/img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="pp/img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="pp/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="pp/fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="pp/css/style.css">
<link rel="stylesheet" type="text/css" href="pp/css/prettyPhoto.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="pp/js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Header -->
<header id="header">
  <div class="intro text-center">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1><?php echo $fetch_set['namee']; ?></h1>
            
            
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Navigation -->
<div id="nav">
  <nav class="navbar navbar-custom">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
      </div>
      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-main-collapse">
        <ul class="nav navbar-nav">
          <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
          <li class="hidden"> <a href="#page-top"></a> </li>
          <li> <a class="page-scroll" href="#page-top">ANA SAYFA</a> </li>
          <li> <a class="page-scroll" href="#about"><?php echo $fetch_a['about_title'] ?></a> </li>
          <li> <a class="page-scroll" href="#skills"><?php echo $fetch_s['site_title'] ?></a> </li>
          <li> <a class="page-scroll" href="#contact"><?php echo $fetch_c['content'] ?></a> </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2><?php echo $fetch_a['about_title'] ?></h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="pp/img\WhatsApp Image 2021-03-17 at 17.35.59.jpeg" style="width: 300px;" style="height: 200px;" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
        <p><?php echo $fetch_a['content'] ?> </p>
          <a href="<?php echo $fetch_a['cv'] ?>" class="btn btn-primary btn-lg page-scroll">CV İNDİR</a> </div>
      </div>
    </div>
  </div>
</div>
<!-- Skills Section -->
<div id="skills" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h3><?php echo $fetch_s['site_title']; ?></h3>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6 skill"> <span class="chart" data-percent="<?php echo $fetch_s['first_counter']; ?>"> <span class="percent">95</span> </span>
        <h4><?php echo $fetch_s['first_skill']; ?></h4>
      </div>
      <div class="col-md-3 col-sm-6 skill"> <span class="chart" data-percent="<?php echo $fetch_s['second_counter']; ?>"> <span class="percent">85</span> </span>
        <h4><?php echo $fetch_s['second_skill']; ?></h4>
      </div>
      <div class="col-md-3 col-sm-6 skill"> <span class="chart" data-percent="<?php echo $fetch_s['third_counter']; ?>"> <span class="percent">80</span> </span>
        <h4><?php echo $fetch_s['third_skill']; ?></h4>
      </div>
      <div class="col-md-3 col-sm-6 skill"> <span class="chart" data-percent="<?php echo $fetch_s['fourth_counter']; ?>"> <span class="percent">80</span> </span>
        <h4><?php echo $fetch_s['fourth_skill']; ?></h4>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Section -->


<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="section-title center">
        <h2><?php echo $fetch_c['content'] ?></h2>
        <hr>
      </div>
      <div class="col-md-8 col-md-offset-2">
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="İsim" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Mesaj" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-default">Mesaj Gönder</button>
        </form>
        <div class="row">
          <div class="col-md-4 col-xs-6 md-margin-b-30">
              <h4>Konum</h4>
              <a href="<?php echo $fetch_c['location_link'] ?>" target="_blank"> <?php echo $fetch_c['locationn'] ?></a>
          </div>
          <div class="col-md-4 col-xs-6 md-margin-b-30">
              <h4>Telefon</h4>
              <a href="tel:<?php echo $fetch_c['gsm'] ?>" target="_blank"><?php echo $fetch_c['gsm'] ?></a>
          </div>
          <div class="col-md-4 col-xs-6">
              <h4>Email</h4>
              <a href="mailto:<?php echo $fetch_c['email'] ?>"target="_blank"><?php echo $fetch_c['email'] ?></a>
          </div>
      </div>      
        <div class="social">
          <ul>
            <li><a href=" <?php echo $fetch_c['facebook'] ?>"target="_blank" title="facebook" ><i class="fa fa-facebook"></i></a></li>
            <li><a href="<?php echo $fetch_c['twitter'] ?>"target="_blank" title="Twitter" ><i class="fa fa-twitter"></i></a></li>
            <li><a href="<?php echo $fetch_c['instagram'] ?>"target="_blank" title="Instagram" ><i class="fa fa-instagram"></i></a></li>
            <li><a href="<?php echo $fetch_c['linkedin'] ?>"target="_blank" title="Linkedin" ><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container text-center">
    <div class="fnav">
      <p>Copyright &copy; 2016 Marcus Hansen. Designed by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
    </div>
  </div>
</div>
<script type="text/javascript" src="pp/js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="pp/js/bootstrap.js"></script> 
<script type="text/javascript" src="pp/js/SmoothScroll.js"></script> 
<script type="text/javascript" src="pp/js/easypiechart.js"></script> 
<script type="text/javascript" src="pp/js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="pp/js/jquery.isotope.js"></script> 
<script type="text/javascript" src="pp/js/jquery.counterup.js"></script> 
<script type="text/javascript" src="pp/js/waypoints.js"></script> 
<script type="text/javascript" src="pp/js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="pp/js/contact_me.js"></script> 
<script type="text/javascript" src="pp/js/main.js"></script>
</body>
</html>