<!DOCTYPE HTML>
<html>

<head>
    <title>Shuly#1</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
</head>

<body>


    <nav class="header_nav d-flex align-items-center">
        <div class="container">
            <div class="row">
                <ul class="d-flex justify-content-center my-2 ">
                    <li><a href="<?=BASE_URL?>/">Home</a></li>
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

    <div class="container">
        <div class="row align-items-center my-5">
            <div class="col col-4">
            <h4>Contacts</h4>
            <p>Email: 121212@qq.com</p>
            <p>Phone: (999)77-123-44-77</p>
            <p>Adress: Odessa, street Derebasovskaya, 8</p>
            </div>
            <div class="col col-8 ml-auto">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10988.851762678065!2d30.7364255!3d46.4840958!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x668cafed42f7d748!2z0K_RgNC80LDRgNC60LA!5e0!3m2!1sru!2sua!4v1618684285082!5m2!1sru!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>


    <div class="color_footer mt-auto ">
        <div class="container">
            <div class="row pt-5 text-center d-flex justify-content-center align-middle">
                <div class="col-md-12">
                    <div class="border-top">
                        <p class="blogTitle">
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="#" target="_blank">Shuly</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


</body>

</html>