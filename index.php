<?php
require_once('config.php');
if(!$_SESSION['userid']){
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-Dg6zV4QO9eMOxZSwPp4h2QLgE75m3S6ZnE2V9W8+EEB6jQjNDMTfDPfmC1AA7wu8SZ9bhu+eoxLb9jKFGJXY7g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
</head>
<style>
    @import url(http://fonts.googleapis.com/css?family=Kanit);

    body {
        font-family: 'Kanit', sans-serif;
        background-color: #FFFF;
    }

    .container {
        width: 85%;
        background: #fff;
        border-radius: 6px;
        padding: 20px 60px 30px 40px;
        /* box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2); */
    }

    .container .content {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .container .content .left-side {
        width: 25%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-top: 15px;
        position: relative;
    }

    .content .left-side::before {
        content: '';
        position: absolute;
        height: 70%;
        width: 2px;
        right: -15px;
        top: 50%;
        transform: translateY(-50%);
        background: #afafb6;
    }

    .content .left-side .details {
        margin: 14px;
        text-align: center;
    }

    .content .left-side .details i {
        font-size: 30px;
        color: #3e2093;
        margin-bottom: 10px;
    }

    .content .left-side .details .topic {
        font-size: 18px;
        font-weight: 500;
    }

    .content .left-side .details .text-one,
    .content .left-side .details .text-two {
        font-size: 14px;
        color: #afafb6;
    }

    .container .content .right-side {
        width: 75%;
        margin-left: 75px;
    }

    .content .right-side .topic-text {
        font-size: 23px;
        font-weight: 600;
        color: #3e2093;
    }

    .right-side .input-box {
        height: 50px;
        width: 100%;
        margin: 12px 0;
    }

    .right-side .input-box input,
    .right-side .input-box textarea {
        height: 100%;
        width: 100%;
        border: none;
        outline: none;
        font-size: 16px;
        background: #F0F1F8;
        border-radius: 6px;
        padding: 0 15px;
        resize: none;
    }

    .right-side .message-box {
        min-height: 110px;
    }

    .right-side .input-box textarea {
        padding-top: 6px;
    }

    .right-side .button {
        display: inline-block;
        margin-top: 12px;
    }

    .right-side .button input[type="button"] {
        color: #fff;
        font-size: 18px;
        outline: none;
        border: none;
        padding: 8px 16px;
        border-radius: 6px;
        background: #3e2093;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .button input[type="button"]:hover {
        background: #5029bc;
    }

    @media (max-width: 950px) {
        .container {
            width: 90%;
            padding: 30px 40px 40px 35px;
        }

        .container .content .right-side {
            width: 75%;
            margin-left: 55px;
        }
    }

    @media (max-width: 820px) {
        .container {
            margin: 40px 0;
            height: 100%;
        }

        .container .content {
            flex-direction: column-reverse;
        }

        .container .content .left-side {
            width: 100%;
            flex-direction: row;
            margin-top: 40px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .container .content .left-side::before {
            display: none;
        }

        .container .content .right-side {
            width: 100%;
            margin-left: 0;
        }
    }
</style>

<body>
    <?php include 'nav.php';?>
    
    <div class="container">

        <div class="d-flex justify-content-center mt-5">
            <h1 id="section1"> บริการเช่าจองชุดและเครื่องประดับร้าน Wedding </h1>
        </div>

        <div class="row pt-5 mt-5">
            <div class="col-6 ">
                <h1>ข้อมูลร้านของเรา</h1>
                <!-- <h2>บริการร้าน Wedding</h2> -->
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid harum vel iusto, itaque, ullam esse
                    voluptates animi eveniet sint illum velit eligendi iure quae voluptate id ad earum reprehenderit
                    doloribus!
                    Numquam incidunt enim quasi sapiente natus fuga! Esse quos labore harum laboriosam praesentium,
                    dicta nisi
                    ut possimus magnam quis. Aperiam voluptate eaque ut quos at perferendis fugit debitis iusto. Eius!
                    Rem dolorum perferendis delectus minus dicta, accusamus, mollitia qui doloremque eum adipisci illum
                    ipsa
                    nesciunt consequuntur a? Laborum ullam, velit veritatis impedit odio error, eaque quibusdam hic, ab
                    aspernatur animi.
                    Minus ut incidunt omnis sint qui hic placeat delectus distinctio repudiandae sapiente ea, aliquam
                    illo
                    beatae sequi fuga. Et quas molestias, tempora voluptas culpa delectus dolore minus quod ad tenetur!
                </p>
                <button type="button" class="btn btn-success" style="background-color: #A367B1; border: 2px solid #A367B1; border-radius: 10px; 
              box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25); max-width: 100%;" data-bs-toggle="modal"
                    data-bs-target="#Profile">ข้อมูลส่วนตัวเพิ่มเติม</button>

            </div>
            <div class="col-6 d-flex  justify-content-center">

                <div class="" style="width: 18rem;">
                    <img src="./img/3d.1.png" class="img-fluid img-size" alt="proflie picture" width="800px"
                        style="border-radius: 20px;  box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.25);">
                    <div class="card-body">
                        <h5 class="card-title mt-2 " style="text-align: center;">WEDDING</h5>
                        <p class="card-text mt-2 " style="text-align: center;">ยินดีให้บริการ</p>
                        <p class="card-text mt-2 " style="text-align: center;"><i
                                class="fa-brands fa-square-facebook"></i><i
                                class="fa-brands fa-square-instagram ms-2"></i></p>
                    </div>
                </div>
            </div>

        </div>

        <!-- สินค้าทั้งหมด -->
        <div class="d-flex justify-content-center mt-5">
            <h1 id="section2"> ข้อมูลสินค้าทั้งหมด </h1>
        </div>

        <div class="d-flex justify-content-center mt-5 ms-5">

            <div class=" ms-5" style="width: 18rem;">
                <img src="./img/3d.1.png" class="card-img-top" alt="" width="100px"
                    style="border-radius: 20px; box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.25);">
                <div class="card-body d-flex" style="text-align: center;">
                    <button type="button" class="ms-4 btn btn-success" style="background-color: #A367B1; border: 2px solid #A367B1; border-radius: 10px; 
              box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25); max-width: 100%;" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"> จองชุด</button>
                    <button type="button" class="ms-1 btn-success" style="background-color: #A367B1; border: 2px solid #A367B1; border-radius: 10px; 
                        box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25); max-width: 100%;" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"> ดูตาราง</button>
                    <button type="button" class="ms-1 btn-success" style="background-color: #A367B1; border: 2px solid #A367B1; border-radius: 10px; 
                        box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25); max-width: 100%;" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"> เงื่อนไข</button>
                </div>
            </div>


            <div class=" ms-5" style="width: 18rem;">
                <img src="./img/3d.1.png" class="card-img-top" alt="" width="100px"
                    style="border-radius: 20px;  box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.25);">
                <div class="card-body d-flex" style="text-align: center;">
                    <button type="button" class="ms-4 btn btn-success" style="background-color: #A367B1; border: 2px solid #A367B1; border-radius: 10px; 
                  box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25); max-width: 100%;" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"> จองชุด</button>
                    <button type="button" class="ms-1 btn-success" style="background-color: #A367B1; border: 2px solid #A367B1; border-radius: 10px; 
                            box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25); max-width: 100%;" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"> ดูตาราง</button>
                    <button type="button" class="ms-1 btn-success" style="background-color: #A367B1; border: 2px solid #A367B1; border-radius: 10px; 
                        box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25); max-width: 100%;" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"> เงื่อนไข</button>
                </div>
            </div>

            <div class=" ms-5" style="width: 18rem;">
                <img src="./img/3d.1.png" class="card-img-top" alt="" width="100px"
                    style="border-radius: 20px;  box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.25);">
                <div class="card-body d-flex" style="text-align: center;">
                    <button type="button" class="ms-4 btn btn-success" style="background-color: #A367B1; border: 2px solid #A367B1; border-radius: 10px; 
                  box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25); max-width: 100%;" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"> จองชุด</button>
                    <button type="button" class="ms-1 btn-success" style="background-color: #A367B1; border: 2px solid #A367B1; border-radius: 10px; 
                            box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25); max-width: 100%;" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"> ดูตาราง</button>
                    <button type="button" class="ms-1 btn-success" style="background-color: #A367B1; border: 2px solid #A367B1; border-radius: 10px; 
                        box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25); max-width: 100%;" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"> เงื่อนไข</button>
                </div>
            </div>
        </div>
        <!-- สินค้าทั้งหมด -->

        <!-- เครื่องประดับ -->
        <div class="d-flex justify-content-center mt-5">
            <h1 id="section2"> ข้อมูลเครื่องประดับทั้งหมด </h1>
        </div>

        <div class="d-flex justify-content-center mt-5 ms-5">

            <div class=" ms-5" style="width: 18rem;">
                <img src="./img/boy-with-rocket-light.png" class="card-img-top" alt="" width="100px"
                    style="border-radius: 20px; box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.25);">
                <div class="card-body d-flex" style="text-align: center;">
                    <button type="button" class="ms-4 btn btn-success" style="background-color: #A367B1; border: 2px solid #A367B1; border-radius: 10px; 
              box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25); max-width: 100%;" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"> จองชุด</button>
                    <button type="button" class="ms-1 btn-success" style="background-color: #A367B1; border: 2px solid #A367B1; border-radius: 10px; 
                        box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25); max-width: 100%;" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"> ดูตาราง</button>
                    <button type="button" class="ms-1 btn-success" style="background-color: #A367B1; border: 2px solid #A367B1; border-radius: 10px; 
                        box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25); max-width: 100%;" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"> เงื่อนไข</button>
                </div>
            </div>


            <div class=" ms-5" style="width: 18rem;">
                <img src="./img/boy-with-rocket-light.png" class="card-img-top" alt="" width="100px"
                    style="border-radius: 20px;  box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.25);">
                <div class="card-body d-flex" style="text-align: center;">
                    <button type="button" class="ms-4 btn btn-success" style="background-color: #A367B1; border: 2px solid #A367B1; border-radius: 10px; 
                  box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25); max-width: 100%;" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"> จองชุด</button>
                    <button type="button" class="ms-1 btn-success" style="background-color: #A367B1; border: 2px solid #A367B1; border-radius: 10px; 
                            box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25); max-width: 100%;" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"> ดูตาราง</button>
                    <button type="button" class="ms-1 btn-success" style="background-color: #A367B1; border: 2px solid #A367B1; border-radius: 10px; 
                        box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25); max-width: 100%;" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"> เงื่อนไข</button>
                </div>
            </div>

            <div class=" ms-5" style="width: 18rem;">
                <img src="./img/boy-with-rocket-light.png" class="card-img-top" alt="" width="100px"
                    style="border-radius: 20px;  box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.25);">
                <div class="card-body d-flex" style="text-align: center;">
                    <button type="button" class="ms-4 btn btn-success" style="background-color: #A367B1; border: 2px solid #A367B1; border-radius: 10px; 
                  box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25); max-width: 100%;" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"> จองชุด</button>
                    <button type="button" class="ms-1 btn-success" style="background-color: #A367B1; border: 2px solid #A367B1; border-radius: 10px; 
                            box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25); max-width: 100%;" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"> ดูตาราง</button>
                    <button type="button" class="ms-1 btn-success" style="background-color: #A367B1; border: 2px solid #A367B1; border-radius: 10px; 
                        box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25); max-width: 100%;" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"> เงื่อนไข</button>
                </div>
            </div>

        </div>
        <!-- เครื่องประดับ -->

         <!-- PROMOTION -->
         <div class="d-flex justify-content-center mt-5">
            <h1 id="section2"> PROMOTION มาแรง! </h1>
        </div>

        <div class="d-flex justify-content-center mt-5 ms-5">

            <div class=" ms-5" style="width: 18rem;">
                <img src="./img/boy-with-rocket-light.png" class="card-img-top" alt="" width="100px"
                    style="border-radius: 20px; box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.25);">
                <div class="card-body d-flex" style="text-align: center;">
                    <button type="button" class="ms-4 btn btn-success" style="background-color: #A367B1; border: 2px solid #A367B1; border-radius: 10px; 
              box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25); max-width: 100%;" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"> จองชุด</button>
                    <button type="button" class="ms-1 btn-success" style="background-color: #A367B1; border: 2px solid #A367B1; border-radius: 10px; 
                        box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25); max-width: 100%;" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"> ดูตาราง</button>
                    <button type="button" class="ms-1 btn-success" style="background-color: #A367B1; border: 2px solid #A367B1; border-radius: 10px; 
                        box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25); max-width: 100%;" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"> เงื่อนไข</button>
                </div>
            </div>


            <div class=" ms-5" style="width: 18rem;">
                <img src="./img/boy-with-rocket-light.png" class="card-img-top" alt="" width="100px"
                    style="border-radius: 20px;  box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.25);">
                <div class="card-body d-flex" style="text-align: center;">
                    <button type="button" class="ms-4 btn btn-success" style="background-color: #A367B1; border: 2px solid #A367B1; border-radius: 10px; 
                  box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25); max-width: 100%;" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"> จองชุด</button>
                    <button type="button" class="ms-1 btn-success" style="background-color: #A367B1; border: 2px solid #A367B1; border-radius: 10px; 
                            box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25); max-width: 100%;" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"> ดูตาราง</button>
                    <button type="button" class="ms-1 btn-success" style="background-color: #A367B1; border: 2px solid #A367B1; border-radius: 10px; 
                        box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25); max-width: 100%;" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"> เงื่อนไข</button>
                </div>
            </div>

            <div class=" ms-5" style="width: 18rem;">
            <h4 class="text-center">ชุดเเละเครื่องประดับ</h4>
                <img src="./img/promotion.jpg" class="card-img-top" alt="" width="100px"
                    style="border-radius: 20px;  box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.25);">
                <div class="card-body d-flex" style="text-align: center;">
                    <button type="button" class="ms-4 btn btn-success" style="background-color: #A367B1; border: 2px solid #A367B1; border-radius: 10px; 
                  box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25); max-width: 100%;" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"> จองชุด</button>
                    <button type="button" class="ms-1 btn-success" style="background-color: #A367B1; border: 2px solid #A367B1; border-radius: 10px; 
                            box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25); max-width: 100%;" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"> ดูตาราง</button>
                    <button type="button" class="ms-1 btn-success" style="background-color: #A367B1; border: 2px solid #A367B1; border-radius: 10px; 
                        box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25); max-width: 100%;" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"> เงื่อนไข</button>
                </div>
            </div>

        </div>
        <!-- PROMOTION -->

        <div class="d-flex justify-content-center mt-5">
            <h1 id="section2"> ติดต่อเรา </h1>
        </div>

        <div class="container">
            <div class="content">
                <div class="left-side">
                    <div class="address details">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="topic">สถานที่ตั้ง</div>
                        <div class="text-one">Surkhet, NP12</div>
                        <div class="text-two">Birendranagar 06</div>
                    </div>
                    <div class="phone details">
                        <i class="fas fa-phone-alt"></i>
                        <div class="topic">เบอร์ติดต่อ</div>
                        <div class="text-one">+0098 9893 5647</div>
                        <div class="text-two">+0096 3434 5678</div>
                    </div>
                    <div class="email details">
                        <i class="fas fa-envelope"></i>
                        <div class="topic">อีเมล์</div>
                        <div class="text-one">codinglab@gmail.com</div>
                        <div class="text-two">info.codinglab@gmail.com</div>
                    </div>
                    <div class="email details">
                        <i class="fas fa-envelope"></i>
                        <div class="topic">Social</div>
                        <div class="text-one">Facebook</div>
                        <div class="text-two">info.codinglab@gmail.com</div>
                    </div>
                </div>
                <div class="right-side">
                    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                        <div class="container">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1154705677445!2d100.4840859!3d6.9956799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304d298faf55bb89%3A0x73396009f9d1a706!2sSleepy%20pet%20hotel%26spa!5e0!3m2!1sth!2sth!4v1696264331929!5m2!1sth!2sth"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ติดต่อเรา -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal">เงื่อนไขการใช้บริการ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>หากลูกค้าต้องการใช้บริการกรุณาจองล่วงหน้า 3 วัน</p>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
            </div>
            </div>
        </div>
        </div>
        <!-- Modal -->

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>