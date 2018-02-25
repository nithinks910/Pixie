<?php
$errName = $errMessage = $result = $errEmail ="";


if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $from = 'PIXIE EXPERIENCE QUERY MESSAGE: '+$email;

    $to = 'john@pixieexperience.com';
    
    $subject = 'PIXIE EXPERIENCE QUERY MESSAGE';

    $body = "From: $name\n 
            Phone: $phone\n
            E-Mail: $email\n 
            Message: $message";

    // Check if name has been entered
    if (!$_POST['name']) {
        $errName = 'Please enter your name';
    }

    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email address';
    }

    //Check if message has been entered
    if (!$_POST['message']) {
        $errMessage = 'Please enter your message';
    }


// If there are no errors, send the email
    if (!$errName && !$errEmail && !$errMessage) {
        if (mail ($to, $subject, $body, $from)) {
            $result='<div class="alert alert-success">Thank You! We will Revert to you as soon as Possible</div>';
        } else {
            $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
        }
    }
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>Pixie</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <link href="https://fonts.googleapis.com/css?family=Roboto:500i" rel="stylesheet">
</head>

<body>
    <div class="container">
        <nav>
            <div class="navbar navbar-inverse navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class "row" id="ani">
                                <a class="pull-left" href="#">
                                        <img src="assets/img/logo.png" class="text animated slideInDown" id="log" alt=" LOGO ">
                                    </a>
                            </div>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="index.html">HOME</a>
                            </li>
                            <li>
                                <a href="aboutus.html">ABOUT US</a>
                            </li>
                            <li>
                                <a href="services.html">SERVICES</a>
                            </li>
                            <li>
                                <a href="clients.html">CLIENTS</a>
                            </li>
                            <li>
                                <a href="gallery.html">GALLERY</a>
                            </li>
                            <li>
                                <a href="contact.php">CONTACT</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </nav>
    </div>
    <!--/.HEADING END-->
    <section id="contact-sec">
            <!-- <iframe class="cnt" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.3241842734974!2d77.65073021260064!3d13.015015890827424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae172abe102aeb%3A0x6044d3518a143df8!2sR+K+Plaza!5e0!3m2!1sen!2sin!4v1519394623813" ></iframe> -->
        <!-- <iframe class="cnt" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15550.242838192331!2d77.64344890752301!3d12.999925036102402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae16d25c4c5ee1%3A0x20a33ebbfc566bbc!2sRamaiah+Reddy+Layout%2C+OMBR+Layout%2C+Banswadi%2C+Bengaluru%2C+Karnataka!5e0!3m2!1sen!2sin!4v1519062917171"></iframe> -->
        <div>
            <p><br/></p>
        </div>
        <div class="row">
                <div class="col-md-7">
                        <iframe class="cnt" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.3241842734974!2d77.65073021260064!3d13.015015890827424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae172abe102aeb%3A0x6044d3518a143df8!2sR+K+Plaza!5e0!3m2!1sen!2sin!4v1519394623813" ></iframe>
                    </div>
        <div class="col-md-4">
                <h4><strong>Get in Touch</strong></h4>
              <form id="main-contact-form" name="contact-form" method="post" action="#">
                <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Name" required="required" value="<?php if(isset ($_POST['name'] )); ?>">
                  <?php echo "<p class='text-danger'>$errName</p>";?>
                </div>
                <div class="form-group">
                  <input type="email" id="email" class="form-control" name="email" placeholder="E-mail" required="required" value="<?php if(isset ($_POST['email'])); ?>">
                  <?php echo "<p class='text-danger'>$errEmail</p>";?>
                </div>
                <div class="form-group">
                  <input type="tel" class="form-control" name="phone" placeholder="Phone" required="required" value="<?php if(isset ($_POST['phone'])); ?>">
                </div>
                <div class="form-group">
                  <textarea class="form-control" id="message" name="message" rows="3" placeholder="Message" required="required"><?php if(isset($_POST['message']) );?></textarea>
                  <?php echo "<p class='text-danger'>$errMessage</p>";?>
                </div>
                <button class="btn btn-default" id="submit" type="submit" name="submit">
                    <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
                </button>

                <?php echo $result; ?>
              </form>
            </div>
            
    </section> <div><p><br/></p></div>
    <section id="footer-sec">
            
        <div class="container">
            <div class="row  pad-bottom">

                <div class="col-md-4" style="text-align: center">
                    <h4>
                        <strong>SOCIAL LINKS</strong>
                    </h4>
                    <p>
                        <a href="https://www.facebook.com/pg/Pixieexperience/about/?ref=page_internal">
                            <i class="fa fa-facebook fa-3x"></i>
                        </a>
                        <a href="https://www.instagram.com/pixie_experience">
                            <i class="fa fa-instagram fa-3x"></i>
                        </a>
                        <a href="http://www.youtube.com/channel/UCZaYujA9T-SASK1Ma1AmMBA">
                            <i class="fa fa-youtube fa-3x"></i>
                        </a>
                        <!-- <a href="#">
                            <i class="fa fa-google-plus-square fa-3x"></i>
                        </a> -->
                    </p>
                </div>
                <div class="col-md-4" style="text-align: center">
                    <h4>
                        <strong>OUR LOCATION</strong>
                    </h4>
                    <i>Address: </i>#14, Ground floor, 1st A cross, Beluru Ramaiah Reddy Layout, Dodda Banaswadi,Ramamurthy
                    Nagar Main Road, Bangalore - 560043

                </div>

                <div class="col-md-4" style="text-align: center">
                    <h4>
                        <strong>Email</strong>
                    </h4>
                    Send your queries to
                    <p class=""> john@pixieexperience.com</p>
                </div>

                
            </div>
        </div>
    </section>
    <!--/.FOOTER END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/plugins/bootstrap.js"></script>
    <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>


</body>

</html>