<!DOCTYPE HTML>
<html>

<head>
    <title>Shuly#1</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/css/main.css">
    <link rel="stylesheet" href="<?=BASE_URL?>assets/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <link href="https://fonts.googleapis.com/css2?family=Orelega+One&family=Quicksand&display=swap" rel="stylesheet">
</head>

<body>

    
    <nav class="header_nav d-flex align-items-center">
        <div class="container">
            <div class="row">
            <ul class="d-flex justify-content-center my-2 ">
            <li><a href="<?=BASE_URL?>">Home</a></li>
                    <li><a href="<?=BASE_URL?>blog/">Blog</a></li>
                    <li><a href="<?=BASE_URL?>gallery/">Gallery</a></li>
                    <li><a href="<?=BASE_URL?>contacts/">Contact</a></li>
                    <?php if(isset($_SESSION['user'])) : ?>
                    <li><a href="<?=BASE_URL?>add/">Add post</a></li>
                    <li><a href="<?=BASE_URL?>logout/">Logout</a></li>
                    <?php else : ?>
                    <li><a href="<?=BASE_URL?>login/">Login</a></li>
                    <?php endif; ?>
            </ul>
            </div>
        </div>
    </nav>

    
       <div class="main">
            <img src="<?=BASE_URL?>assets/img/home.jpg">
            <div class="container">
                <h2><span>Coming together is a beginning, staying together is progress, and working together is success</span></h2>
            </div>
        </div>

    
        <section class="represent">
    <div class="wrapper">
        <h2 class="blogTitle text-center my-4">Present your site in the most beautiful way</h2>
        <div class="repItem__text quick_p mb-3">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem
            ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt.
        </div>
        <div class="repItems">
            <div class="repItem">
                <img src="<?=BASE_URL?>assets/img/res-1.png" alt="" class="repItem__img">
                <div class="repItem__title">Responsive Design</div>
                <div class="repItem__text quick_p">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod
                    tempor incid idunt ut labor.
                </div>
            </div>
            <div class="repItem">
                <img src="<?=BASE_URL?>assets/img/res-2.png" alt="" class="repItem__img">
                <div class="repItem__title">Built for mobile and up</div>
                <div class="repItem__text quick_p">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod
                    tempor incid idunt ut labor.
                </div>
            </div>
            <div class="repItem">
                <img src="<?=BASE_URL?>assets/img/res-3.png" alt="" class="repItem__img">
                <div class="repItem__title">Variant Builder included</div>
                <div class="repItem__text quick_p">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod
                    tempor incid idunt ut labor.
                </div>
            </div>
        </div>
    </div>
</section>



<div class="color_footer mt-auto ">
<div class="container">
<div class="row pt-5 text-center d-flex align-items-center">
          <div class="col-md-12">
            <div class="border-top ">
              <p class="blogTitle">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="#" target="_blank" >Shuly</a>
            </p>
            </div>
          </div>
          </div>
          </div>

</body>

</html>