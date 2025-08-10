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
                                <a class="nav-link active" href="index.php">หน้าหลัก</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="about.php">พรรค</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="products.php">ข่าวสาร</a>
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

            <section class="slick-slideshow">   
                <div class="slick-custom">
                    <img src="images/slideshow/medium-shot-business-women-high-five.jpeg" class="img-fluid" alt="">

                    <div class="slick-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-10">
                                    <h1 class="slick-title">เลือกตั้ง</h1>

                                    <p class="lead text-white mt-lg-3 mb-lg-5">ถึงเวลาใช้สิทธิของคุณ เพื่อช่วยเป็นกระบอกเสียงในการพัดนาโรงเรียนของพวกเรา</p>

                                    <a href="/vote/index.php" class="btn custom-btn">ไปเลือกกัน!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slick-custom">
                    <img src="images/slideshow/team-meeting-renewable-energy-project.jpeg" class="img-fluid" alt="">

                    <div class="slick-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-10">
                                    <h1 class="slick-title">พรรคต่างๆ</h1>

                                    <p class="lead text-white mt-lg-3 mb-lg-5">ชมข้อมูลพรรคต่างๆ พร้อมนโยบายที่หน้าสนใจในปีนี้</p>

                                    <a href="products.php" class="btn custom-btn">ไปสำรวจกัน</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slick-custom">
                    <img src="images/slideshow/two-business-partners-working-together-office-computer.jpeg" class="img-fluid" alt="">

                    <div class="slick-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-10">
                                    <h1 class="slick-title">ข่าวสาร</h1>

                                    <p class="lead text-white mt-lg-3 mb-lg-5">รับรู้ข่าวสารที่อัพเดตอยู่ตลอดเวลา ไม่ต้องกลัวตกข่าว!!</p>

                                    <a href="products.php" class="btn custom-btn">ข่าวสารเพิ่มเติม</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section class="about section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <h2 class="mb-5">มาดู<span>พรรค</span>ทั้งหมดในปีนี้กัน</h2>
                        </div>

                        <div class="col-lg-2 col-12 mt-auto mb-auto">
                            <ul class="nav nav-pills mb-5 mx-auto justify-content-center align-items-center" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">RC Chargers</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-youtube-tab" data-bs-toggle="pill" data-bs-target="#pills-youtube" type="button" role="tab" aria-controls="pills-youtube" aria-selected="true">RC Guardians</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-skill-tab" data-bs-toggle="pill" data-bs-target="#pills-skill" type="button" role="tab" aria-controls="pills-skill" aria-selected="false">RC Alliance</button>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-10 col-12">
                            <div class="tab-content mt-2" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                                    <div class="row">
                                        <div class="col-lg-7 col-12">
                                            <img src="https://i.pinimg.com/736x/75/fd/ca/75fdcaf18f507cad152b255d867ec376.jpg" class="img-fluid" alt="">
                                        </div>

                                        <div class="col-lg-5 col-12">
                                            <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                                <h4 class="mb-3">R<span>C</span> <br>RC Char<span>ger</span>s</h4>

                                                <p>พลังขับเคลื่อนที่ไม่มีวันหยุด! พรรค RC Chargers จะเป็นเหมือนพลังงานที่ขับเคลื่อนโรงเรียนให้ก้าวไปข้างหน้า เราจะนำพาความคิดสร้างสรรค์และความกระตือรือร้นมาพัฒนาโรงเรียนของเราให้ดียิ่งขึ้น</p>


                                                <div class="mt-2 mt-lg-auto">
                                                    <a href="about.php" class="custom-link mb-2">
                                                        รู้จักกันมากขึ้น
                                                        <i class="bi-arrow-right ms-2"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-youtube" role="tabpanel" aria-labelledby="pills-youtube-tab">

                                    <div class="row">
                                        <div class="col-lg-7 col-12">
                                            <div class="ratio ratio-16x9">
                                            <img src="https://i.pinimg.com/736x/30/9c/75/309c75c9e0b4164e899cb576008c5fb7.jpg" class="img-fluid" alt="">
                                            </div>
                                        </div>

                                        <div class="col-lg-5 col-12">
                                            <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                                <h4 class="mb-3">RC Guardians</h4>

                                                <p>ผู้พิทักษ์โรงเรียนของเรา!</p>

                                                <p>พรรค RC Guardians จะเป็นเหมือนผู้ปกป้องโรงเรียนของเรา เราจะดูแลรักษาสิ่งแวดล้อม รักษาความสะอาด และสร้างบรรยากาศที่ดีในโรงเรียน</p>

                                                <div class="mt-2 mt-lg-auto">
                                                    <a href="contact.php" class="custom-link mb-2">
                                                        รู้จักกันมากขึ้น
                                                        <i class="bi-arrow-right ms-2"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-skill" role="tabpanel" aria-labelledby="pills-skill-tab">
                                    <div class="row">
                                        <div class="col-lg-7 col-12">
                                            <img src="https://i.pinimg.com/736x/e7/bf/e7/e7bfe7a1be27a5f2314d925f71ccbbd5.jpg" class="img-fluid" alt="">
                                        </div>

                                        <div class="col-lg-5 col-12">
                                            <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                                <h4 class="mb-3">RC Alliance</h4>

                                                <p>รวมพลังเพื่ออนาคต!</p> 

                                                <p>พรรค RC Alliance เชื่อในพลังของความร่วมมือ เราจะรวมพลังของนักเรียนทุกคนเพื่อสร้างสรรค์กิจกรรมต่างๆ และพัฒนาโรงเรียนไปด้วยกัน</p>

                                               <!--<div class="skill-thumb mt-3">

                                                    <strong>Branding</strong>
                                                        <span class="float-end">90%</span>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                                            </div>

                                                    <strong>Design & Stragety</strong>
                                                        <span class="float-end">70%</span>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
                                                            </div>

                                                    <strong>Online Platform</strong>
                                                        <span class="float-end">80%</span>
                                                            <div class="progress">
                                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                                            </div>

                                                </div>-->
                                                
                                                <div class="mt-2 mt-lg-auto">
                                                    <a href="products.php" class="custom-link mb-2">
                                                        รู้จักกันมากขึ้น
                                                        <i class="bi-arrow-right ms-2"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="front-product">
                <div class="container-fluid p-0">
                    <div class="row align-items-center">

                        <div class="col-lg-6 col-12">
                            <img src="pexels-moose-photos-170195-1036623.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="px-5 py-5 py-lg-0">
                                
                                <h2 class="mb-4"><span>ปีสุดท้าย</span>ก่อนจากกัน</h2>
                                <p class="lead mb-4">ขอขอบคุณสำหรับความไว้วางใจของทุกคนที่ทำให้พวกเราได้ทำหน้าที่เพื่อโรงเรียนของพวกเรา ปีนี้จะเป็นปีสุดท้ายที่เราได้เป็นหัวหน้าในการดูและโรงเรียนพวกเราจะทำให้เต็มที่ค่ะ</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="featured-product section-padding">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-12 text-center">
                            <h2 class="mb-5">ข่าวสาร</h2>
                        </div>

                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="product-detail.php">
                                    <img src="9705_0.jpg" class="img-fluid product-image" alt="">
                                </a>

                                <div class="product-top d-flex">
                                    <span class="product-alert me-auto">มาใหม่</span>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="product-detail.php" class="product-title-link">อัพเดตความนิยมประจำสัปดาห์</a>
                                        </h5>

                                        <p class="product-p">เช็กความนิยมของแต่ละพรรค</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto mt-auto mb-5">&#128150;</small>
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
                                            <a href="product-detail.phpphp" class="product-title-link">บรรยากาศการหาเสียงสภา</a>
                                        </h5>

                                        <p class="product-p">มาดูบรรยากาศการหาเสียงสภาประจำปี</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto mt-auto mb-5">&#128150;</small>
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

                                    <small class="product-price text-muted ms-auto mt-auto mb-5">&#128150;</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 text-center">
                            <a href="products.php" class="view-all">ดูข่าวสารทั้งหมด</a>
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
                            <li class="footer-menu-item"><a href="about.php" class="footer-menu-link">Story</a></li>

                            <li class="footer-menu-item"><a href="products.php" class="footer-menu-link">ข่าวสาร</a></li>

                            <li class="footer-menu-item"><a href="index.php" class="footer-menu-link">หน้าหลัก</a></li>

                            <li class="footer-menu-item"><a href="faq.php" class="footer-menu-link">FAQs</a></li>

                            <li class="footer-menu-item"><a href="contact.php" class="footer-menu-link">ติดต่อ</a></li>
                        </ul>
                    </div>
                    

                    <div class="col-lg-3 col-4">
                        <h5 class="text-white mb-3">Social</h5>

                        <ul class="social-icon">

                            <li><a href="https://www.youtube.com/@coelischool" class="social-icon-link bi-youtube"></a></li>

                            <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                            <li><a href="https://www.facebook.com/profile.php?id=100063614137880#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="https://www.regina.ac.th/index.php/th-th/" class="social-icon-link bi-skype"></a></li>
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
