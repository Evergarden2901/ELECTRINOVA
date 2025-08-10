<?php

    session_start();
   
    $data_user_group = isset($_SESSION['group']) ? $_SESSION['group'] : null;
    $data_user_username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
    $data_user_id=isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

?> 


<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="utf-8">
    <title>vote</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    
</head>
<style>
    :root {
    --primary: #FE5D37;
    --light: #FFF5F3;
    --dark: #103741;
}

.back-to-top {
    position: fixed;
    display: none;
    right: 45px;
    bottom: 45px;
    z-index: 99;
}


/*** Spinner ***/
#spinner {
    opacity: 0;
    visibility: hidden;
    transition: opacity .5s ease-out, visibility 0s linear .5s;
    z-index: 99999;
}

#spinner.show {
    transition: opacity .5s ease-out, visibility 0s linear 0s;
    visibility: visible;
    opacity: 1;
}


/*** Button ***/
.btn {
    font-weight: 500;
    transition: .5s;
}

.btn.btn-primary {
    color: #FFFFFF;
}

.btn-square {
    width: 38px;
    height: 38px;
}

.btn-sm-square {
    width: 32px;
    height: 32px;
}

.btn-lg-square {
    width: 48px;
    height: 48px;
}

.btn-square,
.btn-sm-square,
.btn-lg-square {
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: normal;
    border-radius: 50px;
}


/*** Heading ***/
h1,
h2,
h3,
h4,
.h1,
.h2,
.h3,
.h4,
.display-1,
.display-2,
.display-3,
.display-4,
.display-5,
.display-6 {
    font-family: 'Lobster Two', cursive;
    font-weight: 700;
}

h5,
h6,
.h5,
.h6 {
    font-weight: 600;
}

.font-secondary {
    font-family: 'Lobster Two', cursive;
}


</style>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Call To Action Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src="vote1.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">เลือกตั้งสำคัญยังไง?</h1>
                                <p class="mb-4"> กระบวนการที่เปิดโอกาสให้ประชาชนมีส่วนร่วมในการปกครอง เลือกผู้นำที่เหมาะสม มาทำหน้าที่แทนตนเอง กำหนดทิศทางอนาคตของประเทศหรือองค์กร และ ส่งเสริมประชาธิปไตย ถ้าอยากได้ผู้นำที่ดีและนโยบายที่ตรงใจ ต้องออกไปใช้สิทธิ์เลือกตั้ง
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call To Action End -->


        <!-- Classes Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3"><?php echo $data_user_username;?></h1>
                    <h1 class="mb-3">เลือกพรรคที่ชื่นชอบ</h1>
                    <p>เลือกพรรคที่ใช่พรรคที่ชอบ ที่คุณต้องการเลือกเข้ามา เพื่อสร้างความเปลี่ยนแปลงให้แก่โรงเรียน</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle mx-auto p-3" style="width: 150px; height: 150px; display: flex; align-items: center; justify-content: center;">
                                <img class="img-fluid rounded-circle" src="c1.jpg" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4">RC Chargers</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle flex-shrink-0" src="2025001.jpg" alt="" style="width: 45px; height: 45px;">
                                        <div class="ms-3">
                                            <h6 class="text-primary mb-1">จารุณี ชัยเลิศ</h6>
                                            <small>ประธานนักเรียน</small>
                                        </div>
                                    </div>
                                    <input type="hidden" name="party_idA" id="party_idA" value="2025001">
                                    <button class="vote-button bg-primary text-white rounded-pill py-2 px-3" name="button_voteA" id="button_voteA">เลือก</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle mx-auto p-3" style="width: 150px; height: 150px; display: flex; align-items: center; justify-content: center;">
                                <img class="img-fluid rounded-circle" src="c2.jpg" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" >RC Guardians</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle flex-shrink-0" src="2025002.jpg" alt="" style="width: 45px; height: 45px;">
                                        <div class="ms-3">
                                            <h6 class="text-primary mb-1">เบญญาภา แสงอุทัยวัฒนา</h6>
                                            <small>ประธานนักเรียน</small>
                                        </div>
                                    </div>
                                    <input type="hidden" name="party_idB" id="party_idB" value="2025002">
                                    <button class="vote-button bg-primary text-white rounded-pill py-2 px-3" name="button_voteB" id="button_voteB">เลือก</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="classes-item">
                            <div class="bg-light rounded-circle mx-auto p-3" style="width: 150px; height: 150px; display: flex; align-items: center; justify-content: center;">
                                <img class="img-fluid rounded-circle" src="c3.jpg" alt="">
                            </div>
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4">RC Alliance</a>
                                <div class="d-flex align-items-center justify-content-center mb-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle flex-shrink-0" src="2025003.jpg" alt="" style="width: 45px; height: 45px;">
                                        <div class="ms-3">
                                            <h6 class="text-primary mb-1">ชวัลลักษณ์ ศิริวัฒนธารา</h6>
                                            <small>ประธานนักเรียน</small>
                                        </div>
                                    </div>
                                    <input type="hidden" name="party_idC" id="party_idC" value="2025003">
                                    <button class="vote-button bg-primary text-white rounded-pill py-2 px-3" name="button_voteC" id="button_voteC">เลือก</button>
                                </div>
                            </div>
                        </div>
                    </div>
        <!-- Classes End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Template Javascript -->

    <script>
        $(document).ready(function(){
            $("#button_voteA").on("click",function(){
                Swal.fire({
                    title: "Do you want to save the changes?",
                    showDenyButton: true,
                    showCancelButton: false,
                    confirmButtonText: "Save",
                }).then((result)=>{
                    if (result.isConfirmed) {

                        var party_idA=Number($("#party_idA").val());
                        var party_year=2025;
                        var uesr_id=<?php echo $data_user_id;?>;
                        var code_sql="into";  

                        $.post("vote_process.php",{
                            party_id:party_idA,
                            party_year:party_year,
                            uesr_id:uesr_id,
                            code_sql:code_sql
                        }).then(function(code_zone){
                            var code_zone=code_zone.trim();

                            if(code_zone=="success"){
                                Swal.fire({
                                    title: "ลงคะแนนสำเร็จ",
                                    text: "ขอบคุณที่ใช้สิทธิของท่าน",
                                    icon: "success",
                                    buttons: false,
                                    timer: 2000
                                }).then(()=>{
                                    location.reload();
                                });
                            }else if(code_zone==="danger"){
                                Swal.fire({
                                        title: "ลงคะแนนไม่สำเร็จ",
                                        text: "ขอบคุณที่ใช้สิทธิของท่าน",
                                        icon: "error"
                                    });
                            }else if(code_zone==="danger"){
                                Swal.fire({
                                    title: "ลงคะแนนไม่สำเร็จ",
                                    text: "ท่านอาจจะลงคะแนนแล้ว",
                                    icon: "error"
                                });
                            }else{
                                Swal.fire({
                                    title: "ท่านได้ใช้สิทธิของท่านแล้ว",
                                    text: "ขอบคุณที่ใช้สิทธิของท่าน",
                                    icon: "error"
                                });
                            }
                        })

                    }else if(result.isDenied){

                    }else{}
                })
            })
        })
    </script>

    <script>
        $(document).ready(function(){
            $("#button_voteB").on("click",function(){
                Swal.fire({
                    title: "Do you want to save the changes?",
                    showDenyButton: true,
                    showCancelButton: false,
                    confirmButtonText: "Confirm",
                }).then((result)=>{
                    if (result.isConfirmed) {

                        var party_idB=Number($("#party_idB").val());
                        var party_year=2025;
                        var uesr_id=<?php echo $data_user_id;?>;
                        var code_sql="into";  

                        $.post("vote_process.php",{
                            party_id:party_idB,
                            party_year:party_year,
                            uesr_id:uesr_id,
                            code_sql:code_sql
                        }).then(function(code_zone){
                            var code_zone=code_zone.trim();

                            if(code_zone=="success"){
                                Swal.fire({
                                    title: "ลงคะแนนสำเร็จ",
                                    text: "ขอบคุณที่ใช้สิทธิของท่าน",
                                    icon: "success",
                                    buttons: false,
                                    timer: 2000
                                }).then(()=>{
                                    location.reload();
                                });
                            }else if(code_zone==="danger"){
                                Swal.fire({
                                        title: "ลงคะแนนไม่สำเร็จ",
                                        text: "ขอบคุณที่ใช้สิทธิของท่าน",
                                        icon: "error"
                                    });
                            }else if(code_zone==="danger"){
                                Swal.fire({
                                    title: "ลงคะแนนไม่สำเร็จ",
                                    text: "ท่านได้ลงคะแนนแล้ว",
                                    icon: "error"
                                });
                            }else{
                                Swal.fire({
                                    title: "คุณได้ใช้สิทธิไปแล้ว",
                                    text: "คุณได้เลือกไปแล้ว!",
                                    icon: "error"
                                });
                            }
                        })

                    }else if(result.isDenied){

                    }else{}
                })
            })
        })
    </script>

<script>
        $(document).ready(function(){
            $("#button_voteC").on("click",function(){
                Swal.fire({
                    title: "Do you want to save the changes?",
                    showDenyButton: true,
                    showCancelButton: false,
                    confirmButtonText: "Save",
                }).then((result)=>{
                    if (result.isConfirmed) {

                        var party_idC=Number($("#party_idC").val());
                        var party_year=2025;
                        var uesr_id=<?php echo $data_user_id;?>;
                        var code_sql="into";  

                        $.post("vote_process.php",{
                            party_id:party_idC,
                            party_year:party_year,
                            uesr_id:uesr_id,
                            code_sql:code_sql
                        }).then(function(code_zone){
                            var code_zone=code_zone.trim();

                            if(code_zone=="success"){
                                Swal.fire({
                                    title: "ลงคะแนนสำเร็จ",
                                    text: "ขอบคุณที่ใช้สทธิ์ของท่าน",
                                    icon: "success",
                                    buttons: false,
                                    timer: 2000
                                }).then(()=>{
                                    location.reload();
                                });
                            }else if(code_zone==="danger"){
                                Swal.fire({
                                        title: "ลงคะแนนไม่สำเร็จ",
                                        text: "ขอบคุณที่ใช้สทธิ์ของท่าน",
                                        icon: "error"
                                    });
                            }else if(code_zone==="danger"){
                                Swal.fire({
                                    title: "ลงคะแนนไม่สำเร็จ",
                                    text: "ท่านอาจจะลงคะแนนแล้ว",
                                    icon: "error"
                                });
                            }else{
                                Swal.fire({
                                    title: "พบข้อผิดพลาด",
                                    text: "ไม่สามารถดำเนินการได้",
                                    icon: "error"
                                });
                            }
                        })

                    }else if(result.isDenied){

                    }else{}
                })
            })
        })
    </script>


    <script>
        (function ($) {
    "use strict";

    // Initiate the wowjs
    new WOW().init();


    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();

    
})(jQuery);


    function submitVote() {
        let voteButton = document.getElementById("voteButton");

        // เช็คว่าผู้ใช้เคยโหวตไปแล้วหรือยัง
        if (localStorage.getItem("hasVoted")) {
            alert("คุณได้ใช้สิทธิ์โหวตไปแล้ว");
            return;
        }

        // ป้องกันการกดปุ่มซ้ำ
        voteButton.disabled = true;

        // ตั้งค่าให้ผู้ใช้โหวตได้ครั้งเดียว
        localStorage.setItem("hasVoted", "true");

        // แสดงข้อความขอบคุณ
        alert("ขอบคุณสำหรับเสียงของคุณ");

        // เปลี่ยนหน้าไปยังหน้าที่ต้องการ (เปลี่ยนเป็นหน้าที่ต้องการ)
        window.location.href = ""; 
    }

    // ตรวจสอบว่าผู้ใช้โหวตไปแล้วหรือยัง เมื่อโหลดหน้าใหม่
    window.onload = function() {
        let voteButton = document.getElementById("voteButton");
        if (localStorage.getItem("hasVoted")) {
            voteButton.disabled = true; // ถ้าโหวตไปแล้วให้ปิดปุ่ม
        }
    }

    </script>

    <div class="flex space-x-12">
        <a href="http://sukiskipiti.test/index.php" target="_self" ><button class="bg-blue-500 text-white text-lg px-7 py-4 rounded-full shadow-lg" type="button">
        GO TO HOME</button></a>
        </a>
    </div>
</body>

</html>