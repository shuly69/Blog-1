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
        <h3 class="text-center my-5">Вход на сайт</h3>
        <div class="row justify-content-center">
            <div class="col col-8">
                <form method="post">
                    <div class="mb-3">
                        <label  class="form-label">Login</label>
                        <input type="text" name="login" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Войти">
                    <a href="<?=BASE_URL?>registration/" class="btn btn-primary">Регистрация</a>
             </form>    
            </div>
        </div>
        
    </div>
    

    <div class="color_footer mt-auto blog_footer">
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