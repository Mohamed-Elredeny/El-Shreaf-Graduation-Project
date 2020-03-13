
<?php include('phpFunctions/functions.php'); ?>
<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Online Cars</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">
  <link href="css/jquery.bxslider.css" rel="stylesheet" />
  
  <style>
      .sl{ 
  position: absolute;
  left: 0px;
  top: 0px;
  z-index: -1;
      }
      #mm{
        display: block;
        margin-left: -30px;
      }
  </style>
</head>

<body id="page-top">

  <!-- Navigation -->

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container" id="home">
      <a class="navbar-brand js-scroll-trigger" href="#page-top" style="position: relative;right: 30px">
        Online
        <lable id="mm" style="position: relative;left: 35px">Cars </lable>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">الخدمات</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">السيارات الحديثه</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#staff">السيارات المستعمله</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#login">تسجيل دخول</a>
          </li>
            
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#register">مستخدم جديد</a>
          </li>
             <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">تواصل معنا</a>
          </li>
  
         
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in" >اهلا بك في عالمنا </div>
        <div class="intro-heading " style="font-size: 70px;">احصل علي سياره احلامك </div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">استكشف الان</a>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase" style="margin-top:20px;padding-bottom: 70px;">خدماتنا</h2>
         <br>
         <br>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">شراء عربيه جديده او مستعمله</h4>
          <p class="text-muted">من خلال تصفح موقعنا يمكنك شراء سياره جديده او مستعمله</p>

         
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">حجز سياره اون لاين</h4>
          <p class="text-muted">احجز سيارتك قبل غيرك من  بضغطه </p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">تأجير سياره</h4>
          <p class="text-muted">يمكنك تاجير سيارتك الان وكذلك الحصول علي سياره للايجار</p>
        </div>
      </div>
    </div>
  </section>

  <!-- new Cars -->
  <section class="bg-light" id="portfolio">


    <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase" style="margin-top:-20px;">السيارات الحديثه</h2>
          <br><br>
        </div>
       
          <?php  echo " <ul class='bxslider'> "; ?>
          <?php foreach($res as $r){ 
             
                echo "<a href='phpFunctions/car.php?id=".$r['id']."'>"; 

              echo "<img src='img/". $r['Image'] .  "' class='s1' />

               </a> 
                ";} ?>

              <?php echo "</ul>"; ?>
           
         
        </div>
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase" style="margin-top:100px;">معرض السيارات الحديثه</h2>
          <br><br>
        </div>
      </div>
      <div class="row">


        <?php foreach($cats as $ca){ ?>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="<?php echo '#portfolioModal'. $ca['id'] ?>">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/<?php echo $ca['Image'] ?>" alt="" style="width: 400px;height:268px;">
          </a>
          <div class="portfolio-caption">
            <h4><?php echo $ca['name']; ?></h4>
          </div>
        </div>
      <?php } ?>
  </section>


  <!-- Used Cars -->
  <section class="bg-light" id="portfolio">
    <section id="staff">


    <div class="container">
      <div class="row">
         <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase" style="margin-top:-20px;">السيارات المستعمله</h2>
          <br><br>
        </div>
         <?php  echo " <ul class='bxslider'> "; ?>
          <?php foreach($used as $u){ 
             
                echo "<a href='phpFunctions/car2.php?id=".$u['id']."'>"; 

              echo "<img src='img/". $u['image'] .  "' class='s1' />

               </a> 
                ";} ?>

              <?php echo "</ul>"; ?>
           
        </div>
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase" style="margin-top:100px;">معرض السارات المستعمله</h2>
          <br><br>
        </div>
      </div>
      <div class="row">
         <?php foreach($cats as $ca){ ?>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="<?php echo '#portfolioModa2'. $ca['id'] ?>">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/<?php echo $ca['Image'] ?>" alt="" style="width: 400px;height:268px;">
          </a>
          <div class="portfolio-caption">
            <h4><?php echo $ca['name']; ?></h4>
          </div>
        </div>
      <?php } ?>

    </div>
    </section>
  </section>

  <!-- Login -->
  <section id="login" >
    <div>
    <h1 style="margin-top: -100px;margin-bottom: 50px;margin-left: 600px" dir="rtl">تسجيل دخول</h1>
    <form action="index.php" method="POST" style="width: 600px;position: relative;left: 400px">
    <div class="form-group" >
      <label for="email" style="margin-left: 480px;">البريد الالكتروني</label>
      <input type="email" class="form-control" id="email" placeholder="قم بادخال بريدك الالكتروني" name="email" dir="rtl">
    </div>
    <div class="form-group">
      <label for="pwd" style="margin-left: 510px;">كلمه المرور</label>
      <input type="password" class="form-control" id="pwd" placeholder="قم بادخال كلمه المرور" name="pswd" dir="rtl">
    </div>
  
    <button type="submit" class="btn btn-primary" name="login" style="margin-left: 240px;">تسجيل دخول</button>

  </form>

  </section>

  <!-- register -->
  <section id="register">
    <form action="index.php" method="POST" style="width: 600px;position: relative;left: 400px">
      <h1 style="margin-top: -100px;margin-bottom: 50px;margin-left: 150px;">تسجيل مستخدم جديد</h1>
    <div class="form-group">
      <label for="name" style="margin-left: 500px;">اسم المستخدم</label>
      <input type="text" class="form-control" id="txt" placeholder="ادخل اسم المتخدم" name="uname1" dir="rtl">
    </div>
      <div class="form-group">
      <label for="email" style="margin-left: 490px;">البريد الالكتروني</label>
      <input type="email" class="form-control" id="email" placeholder="قم بادخال بريدك الالكتروني" name="uemail1" dir="rtl">
    </div>
    <div class="form-group">
      <label for="pwd" style="margin-left: 520px;">كلمه المرور</label>
      <input type="password" class="form-control" id="pwd" placeholder="ادخل كلمه السر" name="upass1" dir="rtl">
    </div>
  
    <div class="form-group">
      <label for="phone" style="margin-left: 520px;">رقم الموبايل</label>
      <input  class="form-control" id="email"  name="uphone1" dir="rtl">
    </div>
    
    <button type="submit" class="btn btn-primary" name="register" style="margin-left: 250px">تسجيل </button>
  </form>

  </section>


  <!-- Contact -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center" style="position: relative;top:-100px">
          <h2 class="section-heading text-uppercase">تواصل معنا</h2>
        
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate" method="POST" action="index.php" style="position: relative;top:-90px">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." name="cusname">
                  <p class="help-block text-danger"></p>
                </div>
                 <div class="form-group">
                  <input class="form-control" id="name"  placeholder="Your id *" required="required" data-validation-required-message="Please enter your id." name="cusid">
                  <p class="help-block text-danger"></p>
                </div>
               
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." name="cusemail">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." name="cusphone">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message." name="cusmessage" style="height: 340px"></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit" name="sendmessage">ارساال</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Mohamed Elredeny Website 2020</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="https://twitter.com/4EverZmalkawy">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/midoelredany">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="www.linkedin.com/in/mohamed-elredeny-2668ba177">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          
        </div>
      </div>
    </div>
  </footer>

  <!-- Courses Modals -->

  <!-- Modal 1 -->
  <?php foreach($cats as $ca){ ?>
  <div class="portfolio-modal modal fade" id="<?php echo 'portfolioModal'. $ca['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container" style="height:1400px;">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
             
                <img src="img/<?php echo $ca['Image']?> " style="margin-left: 70px ;width: 500px;height: 200px">
               </div>
             </div>
             </div>
           <div class="row">
                <?php foreach($res as $r){?>
                  <?php if($r['type']== $ca['id']){ ?> 
                      <?php  echo " <div class='col-sm-4'   >" ?>          
                  <div class="card" >
                    <div class="card-body">
                    <img class="card-img-top" src="img/<?php echo $r['Image']; ?>" alt="Card image cap" style="height: 200px;width: 300px">

                      <h5 class="card-title"><?php echo $r['name']; ?></h5>
                      <p class="card-text"><?php echo $r['Details']; ?></p>
                      <a href="<?php echo "phpFunctions/car.php?id=".$r['id']." " ?>" class="btn btn-primary">تفاصيل </a>
                    </div>
                  </div>
         
                    <?php  echo "</div>" ?>

                <?php  }} ?>
                </div>
         
                    
          

                  <button style="position: relative;top:-1500px;"class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Back to School</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

   <?php foreach($cats as $ca){ ?>
  <div class="portfolio-modal modal fade" id="<?php echo 'portfolioModa2'. $ca['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container" style="height:1400px;">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
             
                <img src="img/<?php echo $ca['Image']?> " style="margin-left: 70px ;width: 500px;height: 200px">
               </div>
             </div>
             </div>
           <div class="row">
                <?php foreach($used as $u){?>
                  <?php if($u['type']== $ca['id']){ ?> 
                      <?php  echo " <div class='col-sm-4'   >" ?>          
                  <div class="card" >
                    <div class="card-body">
                    <img class="card-img-top" src="img/<?php echo $u['image']; ?>" alt="Card image cap" style="height: 200px;width: 300px">

                      <h5 class="card-title"><?php echo $u['name']; ?></h5>
                      <p class="card-text"><?php echo $u['Details']; ?></p>
                      <a href="<?php echo "phpFunctions/car2.php?id=".$u['id']." " ?>" class="btn btn-primary">تفاصيل </a>
                    </div>
                  </div>
         
                    <?php  echo "</div>" ?>

                <?php  }} ?>
                </div>
         
                    
          

                  <button style="position: relative;top:-1500px;"class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Back to School</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>



  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
 

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/jquery.bxslider.js"></script>

</body>
<script>
	$(document).ready(function(){
		$('.bxslider').bxSlider({
			mode: 'horizontal',
			moveSlides: 1,
			slideMargin: 20,
			infiniteLoop: true,
			slideWidth: 660,
			minSlides: 3,
			maxSlides: 3,
			speed: 800,
		});
	});
</script>
</html>
