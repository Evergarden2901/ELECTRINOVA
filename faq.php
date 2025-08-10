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

            <header class="site-header section-padding d-flex justify-content-center align-items-center">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12">
                            <h1>
                                <span class="d-block text-primary">คำถามที่คุณชื่นชอบ</span>
                                <span class="d-block text-dark">และคำตอบที่เรามอบให้</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </header>

            <section class="faq section-padding">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-lg-8 col-12">
                            <h2>ข้อมูลทั่วไป</h2>

                            <div class="accordion" id="accordionGeneral">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionGeneralOne" aria-expanded="true" aria-controls="accordionGeneralOne">
                                        ELECTRINOVA คืออะไรและมีประโยชน์อย่างไร?
                                        </button>
                                    </h2>

                                    <div id="accordionGeneralOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionGeneral">

                                        <div class="accordion-body">
                                            <p class="large-paragraph"><strong>ELECTRINOVA</strong> เป็นเว็บแอปพลิเคชันที่ออกแบบมาเพื่อสนับสนุนการทำงานของสภานักเรียนและการเลือกตั้งออนไลน์ โดยมีฟังก์ชันหลากหลาย เช่น การจัดการข้อมูลผู้สมัคร การประกาศนโยบาย การจัดการการเลือกตั้ง การประกาศผล และการสื่อสารระหว่างนักเรียนและสภานักเรียน ช่วยให้การทำงานของสภานักเรียนเป็นไปอย่างมีประสิทธิภาพ โปร่งใส และเข้าถึงง่าย</p>

                                            <p class="large-paragraph">ELECTRINOVA: เว็บแอปพลิเคชันสำหรับนักเรียนยุคใหม่ ที่จะช่วยให้การเลือกตั้งสภานักเรียนเป็นเรื่องง่าย สะดวก และโปร่งใส</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionGeneralTwo" aria-expanded="false" aria-controls="accordionGeneralTwo">
                                        ELECTRINOVA ช่วยให้การทำงานของสภานักเรียนดีขึ้นได้อย่างไร?
                                        </button>
                                    </h2>

                                    <div id="accordionGeneralTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionGeneral">

                                        <div class="accordion-body">
                                            <p class="large-paragraph"><a href="https://www.tooplate.com/free-templates" target="_blank">ELECTRINOVA</a>ช่วยให้สภานักเรียนสามารถจัดการข้อมูลนักเรียน จัดกิจกรรมต่างๆ สื่อสารกับนักเรียน และรับฟังความคิดเห็นของนักเรียนได้อย่างมีประสิทธิภาพมากขึ้น นอกจากนี้ ELECTRINOVA ยังช่วยให้การทำงานของสภานักเรียนเป็นไปอย่างโปร่งใสและตรวจสอบได้</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionGeneralThree" aria-expanded="false" aria-controls="accordionGeneralThree">
                                        นักเรียนจะเข้าถึง ELECTRINOVA ได้อย่างไร?
                                        </button>
                                    </h2>

                                    <div id="accordionGeneralThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionGeneral">

                                        <div class="accordion-body">
                                            <p class="large-paragraph">นักเรียนสามารถเข้าถึง ELECTRINOVA ได้ง่ายๆ ผ่านทางเว็บไซต์หรือแอปพลิเคชันบนมือถือ โดยสามารถลงทะเบียนและเข้าสู่ระบบด้วยบัญชีนักเรียนของโรงเรียน</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <h2 class="mt-5">เกี่ยวกับ<span>ELECTRINOVA</span></h2>

                            <div class="accordion" id="accordionProduct">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionProductOne" aria-expanded="true" aria-controls="accordionProductOne">
                                        ELECTRINOVA แตกต่างจากระบบเลือกตั้งแบบเดิมอย่างไร?
                                        </button>
                                    </h2>

                                    <div id="accordionProductOne" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionProduct">

                                        <div class="accordion-body">
                                            <p class="large-paragraph"><strong>ELECTRINOVA</strong>ช่วยลดความยุ่งยากและค่าใช้จ่ายในการจัดการเลือกตั้งแบบเดิมที่ต้องใช้กระดาษและบุคลากรจำนวนมาก ทั้งยังช่วยเพิ่มความสะดวกสบายให้กับนักเรียนในการลงคะแนนเสียง และลดความเสี่ยงในการทุจริต นอกจากนี้ ELECTRINOVA ยังช่วยให้การสื่อสารระหว่างนักเรียนและสภานักเรียนเป็นไปอย่างมีประสิทธิภาพมากขึ้น</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionProductTwo" aria-expanded="false" aria-controls="accordionProductTwo">
                                        ELECTRINOVA รองรับการเลือกตั้งในรูปแบบใดบ้าง?
                                        </button>
                                    </h2>

                                    <div id="accordionProductTwo" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionProduct">

                                        <div class="accordion-body">
                                            <p class="large-paragraph">ELECTRINOVA รองรับการเลือกตั้งในหลากหลายรูปแบบ เช่น การเลือกตั้งประธานนักเรียน การเลือกตั้งกรรมการสภานักเรียน หรือการเลือกตั้งตัวแทนนักเรียนในคณะกรรมการต่างๆ</p>
                                        </div>
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

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/Headroom.js"></script>
        <script src="js/jQuery.headroom.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
