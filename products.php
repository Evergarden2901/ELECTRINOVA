<?php

    session_start();
    include('server.php');
    $data_user_group = isset($_SESSION['group']) ? $_SESSION['group'] : null;
    $data_user_username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
    $data_user_id=isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

?> 

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>ELECTRINOVA</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="css/slick.css"/>

        <link href="css/tooplate-little-fashion.css" rel="stylesheet">
<!--

Tooplate 2127 Little Fashion

https://www.tooplate.com/view/2127-little-fashion

-->
    </head>
    
    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="sk-inner-circle"></span>
            </div>
        </section>
    
        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <a class="navbar-brand" href="index.php">
                        <strong><span>ELECTRI</span>NOVA</strong>
                    </a>

                    <div class="d-lg-none">
                        <a href="sign-in.php" class="bi-person custom-icon me-3"></a>

                        <a href="product-detail.php" class="bi-bag custom-icon"></a>
                    </div>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">หน้าหลัก</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="about.php">พรรค</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="products.php">ข่าวสาร</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="faq.php">FAQs</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">ติดต่อ</a>
                            </li>
                        </ul>

                        <div class="d-none d-lg-block">
                            <?php
                                if(isset($data_user_id) || $data_user_id!=""){ ?>

                                <a href="sign-index.php" class="bi-person custom-icon me-3"><?php echo $data_user_username; ?></a>

                            <?php }else{ ?>

                                <a href="sign-in.php" class="bi-person custom-icon me-3"></a>sign in <?php echo $data_user_id;?>

                            <?php } ?>                            
                           
                        
                        </div>
                    </div>
                </div>
            </nav>

            <header class="site-header section-padding d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12">
                            <h1>
                                <span class="d-block text-primary">ไม่พลาด</span>
                                <span class="d-block text-dark">ข่าวสารใหม่ๆ</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </header>

            <section class="products section-padding">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-12">
                            <h2 class="mb-5">ใหม่ล่าสุด</h2>
                        </div>

                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="/app-starter/index.html">
                                    <img src="9705_0.jpg" class="img-fluid product-image" alt="">
                                </a>

                                <div class="product-top d-flex">
                                    <span class="product-alert me-auto">ล่าสุด</span>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="/app-starter/index.html" class="product-title-link">อัพเดตความนิยมประจำสัปดาห์</a>
                                        </h5>

                                        <p class="product-p">เช็กความนิยมของแต่ละพรรค</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto">&#128150;</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="product-detail.php">
                                    <img src="9703_0.jpg" class="img-fluid product-image" alt="">
                                </a>

                                <div class="product-top d-flex">
                                    <span class="product-alert">แนะนำ</span>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="product-detail.php" class="product-title-link">บรรยากาศการหาเสียงสภา</a>
                                        </h5>

                                        <p class="product-p">มาดูบรรยากาศการหาเสียงสภาประจำปี 2567 กัน</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto">&#128150;</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="product-thumb">
                                <a href="product-detail.php">
                                    <img src="9704_0.jpg" class="img-fluid product-image" alt="">
                                </a>

                                <div class="product-top d-flex">
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="product-detail.php" class="product-title-link">สำรวจนโยบายเด่นแต่ละพรรค</a>
                                        </h5>

                                        <p class="product-p">แต่ละพรรคจะมีนโยบายเด่นอะไรกันบ้างไปดูกัน</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto">&#128150;</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <h2 class="mb-5">ยอดนิยม</h2>
                        </div>

                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="product-detail.php">
                                    <img src="https://i.pinimg.com/474x/c6/4b/92/c64b92733fdd6aa36989ad75c756a3f8.jpg" class="img-fluid product-image" alt="">
                                </a>

                                <div class="product-top d-flex">
                                    <span class="product-alert">กำลังเป็นที่นิยม</span>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="product-detail.php" class="product-title-link">พรรคในดวงใจ</a>
                                        </h5>

                                        <p class="product-p">ลงโพลล์ที่ใช่เลื่อกพรรคที่ชอบ</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto">&#128150;</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="product-detail.php">
                                    <img src="https://i.pinimg.com/736x/15/e5/5e/15e55e637ed72e6c86092125a0efae4b.jpg" class="img-fluid product-image" alt="">
                                </a>

                                <div class="product-top d-flex">
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="product-detail.php" class="product-title-link">แคนดีเดตแต่ละพรรค</a>
                                        </h5>

                                        <p class="product-p">มีแจกวาปพี่ๆแต่ละคน</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto">&#128150;</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="product-detail.php">
                                    <img src="https://i.pinimg.com/474x/0c/18/37/0c183767b94feb626f14c06c8ccbd9ba.jpg" class="img-fluid product-image" alt="">
                                </a>

                                <div class="product-top d-flex">
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="product-detail.php" class="product-title-link">พูดคุยกับหัวหน้าพรรคแต่ละพรรค</a>
                                        </h5>

                                        <p class="product-p">มาทำความเข้าใจกับแต่ละพรรคให้มากขึ้น</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto">&#128150;</small>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-10 me-auto mb-4">
                        <h4 class="text-white mb-3"><a href="index.php">ELECTRI</a>NOVA</h4>
                        <p class="copyright-text text-muted mt-lg-5 mb-4 mb-lg-0">Copyright © 2025 <strong>ELECTRINOVA</strong></p>
                        <br>
                        <p class="copyright-text">Designed by <a href="#" target="_blank">SUKISKIPITI</a></p>
                    </div>

                    <div class="col-lg-5 col-8">
                        <h5 class="text-white mb-3">Sitemap</h5>

                        <ul class="footer-menu d-flex flex-wrap">
                            <li class="footer-menu-item"><a href="about.php" class="footer-menu-link">พรรค</a></li>

                            <li class="footer-menu-item"><a href="products.php" class="footer-menu-link">ข่าวสาร</a></li>

                            <li class="footer-menu-item"><a href="index.php" class="footer-menu-link">หน้าหลัก</a></li>

                            <li class="footer-menu-item"><a href="faq.php" class="footer-menu-link">FAQs</a></li>

                            <li class="footer-menu-item"><a href="contact.php" class="footer-menu-link">ติดต่อ</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-4">
                        <h5 class="text-white mb-3">Social</h5>

                        <ul class="social-icon">

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                            <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="#" class="social-icon-link bi-skype"></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/Headroom.js"></script>
        <script src="js/jQuery.headroom.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
