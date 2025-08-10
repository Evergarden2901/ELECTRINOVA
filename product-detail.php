<?php

    session_start();
    include('server.php');
    $data_user_group = isset($_SESSION['group']) ? $_SESSION['group'] : null;
    $data_user_username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
    $data_user_id = isset($_SESSION['id']) ? $_SESSION['id'] : null;

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


            <section class="product-detail section-padding">
                <div class="container">
                    <div class="row">

                        

                        <div class="information" style="margin: 25px 30px 5px 30px;">
                            <h1>สำรวจนโยบายเด่นแต่ละพรรค</h1>
                            <hr>
                            <br>
                            <p>
                            การหาเสียงเลือกตั้งสภานักเรียนเป็นช่วงเวลาที่น่าตื่นเต้นและท้าทายสำหรับนักเรียนทุกคน มันเปรียบเสมือนการแข่งขันเพื่อแสดงศักยภาพและความคิดเห็นของตนเองต่อเพื่อนนักเรียนคนอื่นๆ การได้มีส่วนร่วมในการหาเสียง ไม่ว่าจะเป็นผู้สมัครหรือผู้สนับสนุน ล้วนเป็นประสบการณ์ที่น่าจดจำและมีคุณค่า เพราะนอกจากจะได้ฝึกฝนทักษะการพูด การนำเสนอ และการทำงานเป็นทีมแล้ว ยังได้เรียนรู้ถึงกระบวนการทางประชาธิปไตยอย่างแท้จริง
                            </p>
                            <p>
                            การหาเสียงที่ดีต้องเริ่มต้นจากการวางแผนที่รอบคอบ ผู้สมัครต้องทำความเข้าใจถึงปัญหาและความต้องการของเพื่อนนักเรียน เพื่อนำมาเป็นแนวทางในการกำหนดนโยบายและหาเสียง นอกจากนี้ การสร้างสรรค์สโลแกนและโปสเตอร์ที่โดดเด่นก็เป็นสิ่งสำคัญที่จะช่วยดึงดูดความสนใจของเพื่อนนักเรียนได้ การจัดกิจกรรมต่างๆ เช่น การปราศรัย การแจกใบปลิว หรือการจัดบูธแนะนำตัว ก็เป็นวิธีที่ดีในการสื่อสารกับเพื่อนนักเรียนและแสดงให้เห็นถึงความตั้งใจจริงของผู้สมัคร
                            </p>
                            <p>
                            ในระหว่างการหาเสียง ผู้สมัครควรแสดงให้เห็นถึงความมั่นใจในตนเอง ความสามารถในการสื่อสาร และความเป็นผู้นำ การฟังความคิดเห็นของผู้อื่นอย่างเปิดใจและการตอบคำถามอย่างตรงไปตรงมา ก็เป็นสิ่งสำคัญที่จะช่วยสร้างความน่าเชื่อถือให้กับผู้สมัครได้ นอกจากนี้ การทำงานร่วมกับทีมงานอย่างใกล้ชิดก็เป็นสิ่งจำเป็น เพื่อให้การหาเสียงเป็นไปอย่างราบรื่นและประสบความสำเร็จ
                            </p>
                            <p>
                            การหาเสียงไม่ใช่เพียงแค่การแข่งขันเพื่อชัยชนะ แต่ยังเป็นโอกาสที่จะได้เรียนรู้และพัฒนาตนเอง ผู้สมัครที่ไม่ได้รับเลือกก็ไม่ควรท้อแท้ เพราะประสบการณ์ที่ได้จากการหาเสียงจะเป็นประโยชน์ต่อการพัฒนาตนเองในอนาคต และที่สำคัญที่สุดคือ การหาเสียงควรเป็นไปอย่างสร้างสรรค์และเป็นธรรม เพื่อให้เกิดประโยชน์สูงสุดต่อโรงเรียน
                            </p>
                            <p>
                            สรุปได้ว่า การหาเสียงเลือกตั้งสภานักเรียนเป็นกระบวนการที่สำคัญในการพัฒนานักเรียนให้เป็นพลเมืองที่ดี มีความรับผิดชอบ และมีความสามารถในการแก้ปัญหา นอกจากนี้ ยังเป็นโอกาสที่ดีในการสร้างสรรค์สังคมโรงเรียนให้เป็นไปในทิศทางที่ดีขึ้น
                            </p>
                    </div>
                </div>
            </section>
            <section class="related-product section-padding border-top">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h3 class="mb-5">คุณอาจจะชื่นชอบ</h3>
                        </div>

                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="product-detail.php">
                                    <img src="https://i.pinimg.com/474x/21/bc/c2/21bcc26cc4715485d51446a113210014.jpg" class="img-fluid product-image" alt="">
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
                                    <img src="https://i.pinimg.com/736x/c0/a1/7d/c0a17d0f18c2937ed1931f9d3febbd11.jpg" class="img-fluid product-image" alt="">
                                </a>

                                <div class="product-top d-flex">
                                    <span class="product-alert">Low Price</span>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="product-detail.php" class="product-title-link">บรรยากาศการหาเสียงสภา</a>
                                        </h5>

                                        <p class="product-p">มาดูบรรยากาศการหาเสียงสภาประจำปี 2567 กัน</p>
                                    </div>

                                    <small class="product-price text-muted ms-auto mt-auto mb-5">&#128150;</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="product-thumb">
                                <a href="product-detail.php">
                                    <img src="https://i.pinimg.com/474x/c8/76/6f/c8766fed9d16278760dc6e748bcaf392.jpg" class="img-fluid product-image" alt="">
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

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                            <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="#" class="social-icon-link bi-skype"></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </footer>

        <!-- CART MODAL -->
        <div class="modal fade" id="cart-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                    <div class="modal-header flex-column">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-12 mt-4 mt-lg-0">
                                <img src="images/product/evan-mcdougall-qnh1odlqOmk-unsplash.jpeg" class="img-fluid product-image" alt="">
                            </div>

                            <div class="col-lg-6 col-12 mt-3 mt-lg-0">
                                <h3 class="modal-title" id="exampleModalLabel">Tree pot</h3>

                                <p class="product-price text-muted mt-3">$25</p>

                                <p class="product-p">Quatity: <span class="ms-1">4</span></p>

                                <p class="product-p">Colour: <span class="ms-1">Black</span></p>

                                <p class="product-p pb-3">Size: <span class="ms-1">S/S</span></p>

                                <div class="border-top mt-4 pt-3">
                                    <p class="product-p"><strong>Total: <span class="ms-1">$100</span></strong></p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <div class="row w-50">
                            <button type="button" class="btn custom-btn cart-btn ms-lg-4">Checkout</button>
                        </div>
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