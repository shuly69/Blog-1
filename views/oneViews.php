<!DOCTYPE HTML>
<html>

<head>
    <title>Shuly#1</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Orelega+One&family=Quicksand&display=swap" rel="stylesheet">
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

        <div class="container my-5">
            <div class="row">
                <div class="col col-8 justify-content-center">
                    <img class="img_one" src="<?=BASE_URL?>assets/img/<?=$message['img_name']?>" width="70%" height="300px" >
                    <h3><?=$message['title']?></h3>
                    <p class="quick_p"><?=$message['text']?></p>
                    <?php if(isset($_SESSION['user'])) : ?>
                    <a href="<?=BASE_URL?>edit/<?=$message['id']?>" class="btn btn-primary">Редактировать</a>
                    <a href="<?=BASE_URL?>delete/<?=$message['id']?>" class="btn btn-primary">Удалить</a>
                    <?php endif; ?>
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