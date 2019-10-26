<?php
    session_start();
    include('../database/sql.php');
?>
    <!DOCTYPE html>
    <html>
    
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>MeShop</title>
        <link rel=icon href=logo.png sizes="16x16" type="image/png">
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <!---BS4-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!--BS4-->

        <link rel="stylesheet" href="owl carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="owl carousel/owl.theme.default.min.css">
        <!-- Load an icon library -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel='stylesheet' type='text/css' media='screen' href='css/style1.css'>
    </head>

    <body>
        <?php include_once "php/navigation.php"?>
        
        <!-------------Phần danh mục và slider------------->
        <br>
        <div id="cata" style="margin-top: 7.4375rem;">
            <div class="container">
                <div class="row">
                    <?php include_once "php/catagory.php"?>
                    <?php include_once "php/slider.php"?>
                </div>
            </div>
        </div>
        <br>
        <!--promotion-->
        <div class="promtion">
                <div class="container">
                    <div data-v-64d23507="" data-v-0489199a="" class="row v3-promotion-block v3-content-section mt20" style="background-color: rgb(228, 228, 228);">
                        <span data-v-64d23507="" class="v3-promotion-notify-icon" style="background: rgb(247, 11, 24); box-shadow: rgb(242, 113, 120) 0px 0px 0px 0px;"></span>
                        <marquee data-v-64d23507="" data-track-content="" data-content-name="header-promotion-text" class="v3-header-promotion-text"><a data-v-64d23507="" href="https://phongvu.vn/promo/laptop-weeksale?pv_source=website&amp;pv_campaign=promo-1401&amp;pv_medium=header-promotion-text" data-content-piece="promo-1009" class="v3-header-promotion-text-item" style="color: rgb(215, 30, 48); text-decoration: none">
                        Tuần lễ Laptop siêu ưu đãi - Giảm tới 1.400.000đ chỉ từ 8.790.000đ! Giảm thêm 5% tối đa 1 triệu
                        khi quét VNPAY-QR. Duy nhất đến 10/10/2019. Mua ngay!</a>
                        </marquee>
                    </div>
                </div>
            </div>
         <!--promotion-->

        <br>
            <?php include_once "php/productnew.php" ?>
        <br>
            <?php include_once "php/producthot.php" ?>
        <!---------------------FOOTER----------------------------------->
        <div class="line"></div>
        <br>
        <?php include_once "php/footer.php" ?>


                    <script src="owl carousel/jquery-3.4.1.min.js"></script>
                    <script src="owl carousel/owl.carousel.min.js"></script>
                    <script src="js/tab.js"></script>
                    <script>
                        $('.owl-carousel').owlCarousel({
                                loop:true,
                                margin:10,
                                responsiveClass:true,
                                responsive:{
                                    0:{
                                        items:1,
                                        nav:true
                                    },
                                    600:{
                                        items:1,
                                        nav:false
                                    },
                                    1000:{
                                        items:1,
                                        nav:true,
                                        loop:false
                                    }
                                }
                            })
                    </script>
    </body>