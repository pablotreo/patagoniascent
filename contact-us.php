<?php  include('head.html');?>

<title>Contact Us</title>
</head>

<body>

<?php  include('navigation.html');?>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header"> 
                    <span class="glyphicon glyphicon-menu-right"><h1>Contact Us</h1></span>
                </div>
                <ol class="breadcrumb hidden-xs">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Contact Us</li>
                </ol>
            </div>
        </div>
    </div>  
</div>

<div class="section">
    <div class="container">  
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <br>
                   <!--  <a href="mailto:patagoniascent@gmail.com"><h2>E-mail</h2></a> -->
                    <form action="mail/contact_me.php" method="POST" class="contactform" name="sentMessage"  id="contactForm" novalidate>
                          <div class="row">
                              <div class="form-group col-xs-12">
                                  <input type="text" class="form-control" placeholder="Name:" name="name" id="name" required data-validation-required-message="Please enter your name.">
                                  <p class="help-block text-danger"></p>
                              </div>
                          </div>
                          <div class="row">
                              <div class="form-group col-xs-12">
                                  <input type="email" class="form-control" placeholder="E-mail:" name="email" id="email"  type="email" required data-validation-required-message="Please enter your email address.">
                                  <p class="help-block text-danger"></p>
                              </div>
                          </div>
                          <div class="row">
                              <div class="form-group col-xs-12">
                                  <textarea rows="5" class="form-control" placeholder="Message:" name="message" id="message" maxlength="400" required data-validation-required-message="Please enter a message."></textarea>
                                  <p class="help-block text-danger"></p>
                              </div>
                          </div>
                          <div id="success"></div>
                          <div class="row">
                              <div class="form-group col-xs-12">
                                <input id="submit" name="submit" type="submit" value="Send" class="send btn btn-primary btn-lg">
                              </div>
                          </div>
                    </form>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1">
                </div>
                <div class="contact-us col-lg-5 col-md-5 col-sm-5">
                        <br>
                        <p><i class="fa fa-phone-alt"></i><a href="tel:+542644449633"> - Tel: +54 264 4449633</a></p>
                        <p><i class="fa fa-envelope"></i><a href="mailto:patagoniascent@gmail.com"> - patagoniascent@gmail.com</p></a>                
                        <p><i class="fa fa-map-marked-alt"></i> - Leonel Terray 324, Z9301 El Chalten, Santa Cruz, Argentina</p>

                </div>
            </div>
        </div>
    </div>
</div>


<?php include('footer.html');?>
    
<?php include('js.html');?>
  <!-- BootstrapValidation -->
  <script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
  <!-- Contact Form JavaScript -->
  <script type="text/javascript" src="js/contact_me.js"></script>     

</body>

</html>