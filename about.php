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
                                <a class="nav-link active" href="about.php">พรรค</a>
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

            <header class="site-header section-padding-img site-header-image">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 header-info">
                            <h1>
                                <span class="d-block text-dark">ทำความรู้จักกับ</span>
                                <span class="d-block text-primary">พรรคต่างๆ</span>
                            </h1>
                        </div>
                    </div>
                </div>

                <img src="girls.jpg" class="header-image img-fluid" alt="">
            </header>

            <section class="team section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-5">พบกับ<span>ผู้นำ</span>พรรคต่างๆ</h2>
                        </div>

                        <div class="col-lg-4 mb-4 col-12">
                            <div class="team-thumb d-flex align-items-center">
                                <img src="1_apple.png" class="img-fluid custom-circle-image team-image me-4" alt="">

                                <div class="team-info">
                                    <h5 class="mb-0">เดียน่า</h5>
                                    <strong class="text-muted">RC Chargers</strong>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn custom-modal-btn" data-bs-toggle="modal" data-bs-target="#don">
                                      <i class="bi-plus-circle-fill"></i>
                                    </button>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-4 col-12">
                            <div class="team-thumb d-flex align-items-center">
                                <img src="bi.jpg" class="img-fluid custom-circle-image team-image me-4" alt="">

                                <div class="team-info">
                                    <h5 class="mb-0">เฟิร์น</h5>
                                    <strong class="text-muted">RC Guardians</strong>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn custom-modal-btn" data-bs-toggle="modal" data-bs-target="#kelly">
                                      <i class="bi-plus-circle-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-lg-0 mb-4 col-12">
                            <div class="team-thumb d-flex align-items-center">
                                <img src="g3.jpg" class="img-fluid custom-circle-image team-image me-4" alt="">

                                <div class="team-info">
                                    <h5 class="mb-0">พันทิวา</h5>
                                    <strong class="text-muted">RC Alliance</strong>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn custom-modal-btn" data-bs-toggle="modal" data-bs-target="#marie">
                                      <i class="bi-plus-circle-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="testimonial section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-9 mx-auto col-11">
                            <h2 class="text-center">ข้อความจาก,<br> <span>ผู้นำพรรค</span> ถึงทุกคน</h2>

                            <div class="slick-testimonial">
                                <div class="slick-testimonial-caption">
                                    <p class="lead">พรรค RC Chargers จะเป็นเหมือนพลังงานที่ขับเคลื่อนโรงเรียนให้ก้าวไปข้างหน้า เราจะนำพาความคิดสร้างสรรค์และความกระตือรือร้นมาพัฒนาโรงเรียนของเราให้ดียิ่งขึ้น</p>

                                    <div class="slick-testimonial-client d-flex align-items-center mt-4">
                                        <img src="1_apple.png" class="img-fluid custom-circle-image me-3" alt="">

                                        <span>เดียน่า, <strong class="text-muted">RC Chargers</strong></span>
                                    </div>
                                </div>

                                <div class="slick-testimonial-caption">
                                    <p class="lead">พรรค RC Guardians จะเป็นเหมือนผู้ปกป้องโรงเรียนของเรา เราจะดูแลรักษาสิ่งแวดล้อม รักษาความสะอาด และสร้างบรรยากาศที่ดีในโรงเรียน</p>

                                    <div class="slick-testimonial-client d-flex align-items-center mt-4">
                                        <img src="bi.jpg" class="img-fluid custom-circle-image me-3" alt="">

                                        <span>เฟิร์น, <strong class="text-muted">RC Guardians</strong></span>
                                    </div>
                                </div>

                                <div class="slick-testimonial-caption">
                                    <p class="lead">พรรค RC Alliance เชื่อในพลังของความร่วมมือ เราจะรวมพลังของนักเรียนทุกคนเพื่อสร้างสรรค์กิจกรรมต่างๆ และพัฒนาโรงเรียนไปด้วยกัน</p>

                                    <div class="slick-testimonial-client d-flex align-items-center mt-4">
                                        <img src="g3.jpg" class="img-fluid custom-circle-image me-3" alt="">

                                        <span>พันทิวา, <strong class="text-muted">RC Alliance</strong></span>
                                    </div>
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

        <!-- TEAM MEMBER MODAL -->
        <div class="modal fade" id="don" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                    <div class="modal-header flex-column">
                        <h3 class="modal-title" id="exampleModalLabel">กานต์พิชชา รัตนพิริยะกุล</h3>

                        <h6 class="text-muted">หัวหน้าพรรค, RCC</h6>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <h5 class="mb-4">พรรค RC Chargers เป็นกลุ่มสภานักเรียนที่มุ่งมั่นในการสร้างสรรค์นวัตกรรม การทำงานเป็นทีม และการพัฒนาอย่างก้าวหน้า</h5>

                        <div class="row mb-4">
                            <div class="col-lg-6 col-12">
                                <p>โดยมีเป้าหมายเพื่อส่งเสริมเสียงของนักเรียนและยกระดับชีวิตในโรงเรียน พรรค RC Chargers เน้นการจัดกิจกรรมที่สร้างสรรค์ การนำเสนอแนวคิดใหม่ ๆ และการแก้ไขปัญหาที่ตอบโจทย์ความต้องการของนักเรียน</p>
                            </div>

                            <div class="col-lg-6 col-12">
                                <p>พรรคให้ความสำคัญกับความโปร่งใส การมีส่วนร่วม และการเปิดโอกาสให้นักเรียนทุกคนมีส่วนร่วมในการสร้างสังคมโรงเรียนที่เข้มแข็งและอบอุ่น</p>
                            </div>
                        </div>

                        <ul class="social-icon">
                            <li class="me-3"><strong>ติดตามพวกเรา?</strong></li>

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                            <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <!-- TEAM MEMBER MODAL -->
        <div class="modal fade" id="kelly" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                    <div class="modal-header flex-column">
                        <h3 class="modal-title" id="exampleModalLabel">เบญญาภา แสงอุทัยวัฒนา</h3>

                        <h6 class="text-muted">หัวหน้าพรรค, RCG</h6>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <h5 class="mb-4">พรรค RC Guardians คือพรรคสภานักเรียนที่มุ่งมั่นปกป้องสิทธิ์และสวัสดิภาพของนักเรียนทุกคน ภายใต้แนวคิด</h5>

                        <div class="row mb-4">
                            <div class="col-lg-6 col-12">
                                <p>“ปกป้อง เคียงข้าง และก้าวไปด้วยกัน” พรรคนี้ให้ความสำคัญกับความเท่าเทียม ความปลอดภัย และการอยู่ร่วมกันอย่างมีความสุขในโรงเรียน</p>
                            </div>

                            <div class="col-lg-6 col-12">
                                <p>RC Guardians พร้อมเป็นกระบอกเสียงแทนนักเรียนทุกคน ผลักดันกิจกรรมเชิงสร้างสรรค์ และสร้างสังคมที่อบอุ่นเป็นหนึ่งเดียว</p>
                            </div>
                        </div>

                        <ul class="social-icon">
                            <li class="me-3"><strong>ติดตามพวกเรา?</strong></li>

                            <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <!-- TEAM MEMBER MODAL -->
        <div class="modal fade" id="marie" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                    <div class="modal-header flex-column">
                        <h3 class="modal-title" id="exampleModalLabel">ชวัลลักษณ์ ศิริวัฒนธารา</h3>

                        <h6 class="text-muted">หัวหน้าพรรค, RCA</h6>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <h5 class="mb-4">เราคือ RC Alliance พรรคที่เชื่อมั่นในพลังของความร่วมมือและความสร้างสรรค์ เราต้องการเห็นโรงเรียนของเราเป็นสถานที่ที่ทุกคนรู้สึกปลอดภัย มีความสุข</h5>

                        <div class="row mb-4">
                            <div class="col-lg-6 col-12">
                                <p>และได้พัฒนาศักยภาพของตนเองอย่างเต็มที่ ภายใต้แนวคิด 'ปกป้อง เคียงข้าง ก้าวไปด้วยกัน' เราจะมุ่งมั่น</p>
                            </div>

                            <div class="col-lg-6 col-12">
                                <p>ส่งเสริมความเท่าเทียม: เราเชื่อว่าทุกคนมีคุณค่าเท่าเทียมกัน และมีสิทธิ์ได้รับโอกาสที่เท่าเทียม</p>
                            </div>
                        </div>

                        <ul class="social-icon">
                            <li class="me-3"><strong>ติดตามพวกเรา?</strong></li>

                            <li><a href="#" class="social-icon-link bi-twitter"></a></li>

                            <li><a href="#" class="social-icon-link bi-linkedin"></a></li>

                            <li><a href="#" class="social-icon-link bi-envelope"></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/Headroom.js"></script>
        <script src="js/jQuery.headroom.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
