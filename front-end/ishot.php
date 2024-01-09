<?php
include_once "./api/db.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iShop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/js.js"></script>
    <script src="./js/jquery-1.9.1.min.js"></script>
    <style>
        body {
            font-family: fantasy;
            font-style: italic;
        }

        .card {
            margin: 5px;
        }

        .card:hover {
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .back-to-top {
            background: #222;
            color: #fff;
            z-index: 1100;
            right: 30px;
            bottom: 80px;
            padding: 15 15px;
            width: 40px;
            font-size: 25px;
            position: fixed;
            cursor: pointer;
            text-align: center;
            opacity: 0.4;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" id="top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fa-solid fa-camera-retro"></i>&nbsp;iShot</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">iHome</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#carousel">iCarousel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#shot">iCard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#collapse">iCollapse</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            iMember
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#bottom">iSales and Refunds</a></li>
                            <li><a class="dropdown-item" href="#bottom">iVote</a></li>
                            <li><a class="dropdown-item" href="#bottom">iLegal</a></li>
                            <li><a class="dropdown-item" href="#bottom">iUse of Cookies</a></li>
                        </ul>
                    </li>
                </ul>
                <a class="btn btn-light" data-bs-toggle="offcanvas" href="#offcanvasExample" aria-controls="offcanvasExample">iLogin</a>
            </div>
        </div>
    </nav>
    <!-- Offcanvas 會員登入 -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5>會員登入</h5>
        </div>
        <div class="offcanvas-body">
            <div class="container text-center">
                <div class="form-outline mb-3">
                    <label for="account" class="form-label">帳號 Account</label>
                    <input type="text" name="acc" id="acc" class="form-control">
                </div>
                <div class="form-outline mb-4">
                    <label for="password" class="form-label">密碼 Password</label>
                    <input type="password" name="pw" id="pw" class="form-control">
                </div>
                <div class="btn-custom">
                    <button type="submit" class="btn btn-primary" value="登入" onclick="login()">登入</button>
                    <button type="button" class="btn btn-danger" value="離開">離開</button>
                </div>
                <div class="mt-1">
                    <a href="?do=forget">忘記密碼?</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel 輪播照片功能 -->
    <div class="container-date" id="carousel">
        <div id="myTopCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators active" data-bs-slide-to="0" data-bs-target="#myCarousel">
                <button type="button" data-bs-target="#myTopCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myTopCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myTopCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://picsum.photos/id/441/1920/540" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/id/999/1920/540" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://picsum.photos/id/555/1920/540" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myTopCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myTopCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div id="shot"></div>
    <div class=" container mt-3">
        <h2>海外婚紗服務</h2>
        <div class="row justify-content-around">
            <div class="col card d-block">
                <img class="card-img-top mt-1" src="https://picsum.photos/id/873/300/300" style="height: 280px;">
                <div class=" card-body">
                    <h4 class="card-title">溫哥華<br>Vancouver</h4>
                    <p class="card-text">西岸最大的城市，連續好幾年獲選為世界上最美麗且適合居住的城市及最佳旅遊的城市。</p>
                    <button id="" data-price="88000" data-level="C" type="button" class="btn btn-primary myBtn">點擊取得優惠價</button>
                    <div id="" class="myBox box text-danger mt-2">
                        <span id="" class="mySpan">
                            Lorem ipsum dolor sit amet.
                        </span>
                    </div>
                </div>
            </div>
            <div class="col card">
                <img class="card-img-top mt-1" src="https://picsum.photos/id/974/300/300" style="height: 280px;">
                <div class="card-body">
                    <h4 class="card-title">北極<br>North Pole</h4>
                    <p class="card-text">北極光村的極光小屋是體驗寒冷星空和北極光的神奇方式，同時舒適地躺在溫暖的床上。</p>
                    <button id="" data-price="100000" data-level="B" type="button" class="btn btn-primary myBtn">點擊取得優惠價</button>
                    <div id="" class="myBox box text-danger mt-2">
                        <span id="" class="mySpan">
                            Lorem ipsum dolor sit amet.
                        </span>
                    </div>
                </div>
            </div>
            <div class="col card">
                <img class="card-img-top mt-1" src="https://picsum.photos/id/474/300/300" style="height: 280px;">
                <div class="card-body">
                    <h4 class="card-title">冰島<br>Iceland</h4>
                    <p class="card-text">冰島最出名的莫過於擁有地球原始的狀態，同時擁有冰川、火山，被稱為「冰與火的國度」</p>
                    <button id="" data-price="77000" data-level="C" type="button" class="btn btn-primary myBtn">點擊取得優惠價</button>
                    <div id="" class="myBox box text-danger mt-2">
                        <span id="" class="mySpan">
                            Lorem ipsum dolor sit amet.
                        </span>
                    </div>
                </div>
            </div>
            <div class="col card">
                <img class="card-img-top mt-1" src="https://picsum.photos/id/313/300/300" style="height: 280px;">
                <div class="card-body">
                    <h4 class="card-title">澳洲<br>Australia</h4>
                    <p class="card-text">世界面積第六大的國家，聳立的瀑布、像吹波糖般粉紅色的湖以及大堡礁，都在等著您來探索。</p>
                    <button id="" data-price="50000" data-level="A" type="button" class="btn btn-primary myBtn">點擊取得優惠價</button>
                    <div id="" class="myBox box text-danger mt-2">
                        <span id="" class="mySpan">
                            Lorem ipsum dolor sit amet.
                        </span>
                    </div>
                </div>
            </div>
            <div class="col card">
                <img class="card-img-top mt-1" src="https://picsum.photos/id/815/300/300" style="height: 280px;">
                <div class="card-body">
                    <h4 class="card-title">日本<br>Japan</h4>
                    <p class="card-text">日本為眾多領域的樞紐中心，在引領流行的東京街頭，拍攝有如日系雜誌封面的時尚婚紗照。</p>
                    <button id="" data-price="40000" data-level="A" type="button" class="btn btn-primary myBtn">點擊取得優惠價</button>
                    <div id="" class="myBox box text-danger mt-2">
                        <span id="" class="mySpan">
                            Lorem ipsum dolor sit amet.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="collapse"></div>
    <div class="container-fluid mt-3 mb-2">
        <p style="text-align: center;">
            <a class="btn btn-outline-dark" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                攝影座右銘
            </a>
            <a class="btn btn-outline-dark" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                點開發現新視界
            </a>
        </p>
        <div class="row" style="text-align: center">
            <div class="col-8">
                <div class="card card-body collapse multi-collapse border-black2" id="collapseExample">
                    世界並不缺少美
                </div>
            </div>
            <div class="col-4">
                <div class="card card-body collapse multi-collapseb border-black2" id="collapseExample2">
                    而是缺少發現美的眼睛。
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="d-flex">
            <div class="col item">
                <img src="./img/house.jpg" style="width: 100%;height: 600px;">
            </div>
            <div class="col item">
                <img src="./img/view.jpg" style="width: 100%;height: 600px;">
            </div>
        </div>
        <div class="container-date" id="carousel">
            <!-- data-bs-ride="carousel" 使用 自動輪播功能 -->
            <div id="myBotCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner"> <!-- 淡出輪播 -->
                    <!-- 設定 秒數 data-bs-interval="3000" -->
                    <div class="carousel-item active" data-bs-interval="3000">
                        <img src="https://picsum.photos/id/241/1920/660" class="d-block w-100">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="https://picsum.photos/id/218/1920/660" class="d-block w-100">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="https://picsum.photos/id/515/1920/660" class="d-block w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="container">
            <p style="font-size: xx-large">聯絡我</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="d-flex mt-3 mb-3">
                        <i class="fa-solid fa-location-dot" style="font-size:larger;"> Location：
                            <br>
                            <p class="mt-3">大台北地區</p>
                        </i>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="fa-solid fa-mobile-screen-button" style="font-size:larger;"> Phone：
                            <br>
                            <p class="mt-3">0932-805-756</p>
                        </i>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="fa-solid fa-envelope" style="font-size:larger;"> Email：
                            <br>
                            <p class="mt-3">955khm@gmail.com</p>
                        </i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-8">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <label for="message">Message</label>
                            <textarea class="form-control" rows="5"></textarea>
                            <button type="button" class="btn btn-outline-dark myContactBtn mt-1">送出</button>
                        </div>
                    </div>
                </div>
                <div class="col-2 mt-1">
                    <div style="text-align: center;">
                        <img src="./img/avatar.png" style="width: 150px;height: 200px;">
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <a href="https://github.com/he11owor1dtw">
                                <i class="fa-brands fa-github" style="font-size:30px"></i>
                            </a>
                        </div>
                        <div class="col">
                            <a href="https://www.instagram.com/he11owor1d_/">
                                <i class="fa-brands fa-instagram" style="font-size:32px"></i>
                            </a>
                        </div>
                        <div class="col"><a href="https://pda.104.com.tw/profile/edit?vno=74rk3wa0w">
                                <i class="fa-solid fa-user" style="font-size:27px"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="back-to-top" onclick="scrollToTop()">
                <i class="fa-solid fa-circle-up"></i>
            </div>
        </div>
    </div>
    <hr>
    <div class="container mt-3" id="bottom">
        <div class="dropdown" style="text-align: center;">
            <a class="btn btn-outline-info dropdown-toggle fst-italic" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                iSales and Refunds
            </a>
            <a class="btn btn-outline-danger dropdown-toggle fst-italic" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                iLegal
            </a>
            <a class="btn btn-outline-warning dropdown-toggle fst-italic" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                iPrivacy Policy
            </a>
            <a class="btn btn-outline-dark dropdown-toggle fst-italic" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                iUse of Cookies
            </a>
        </div>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="">iAction</a></li>
            <li><a class="dropdown-item" href="">iAnother action</a></li>
            <li><a class="dropdown-item" href="">iSomethingelse</a></li>
        </ul>
    </div>
    </div>

    <p class="mb-3"></p>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        // 海外婚紗促銷js
        $(document).ready(function() {
            // 綁定
            const myBtn = $('.myBtn');
            const myBox = $('.myBox');
            const mySpan = $('.mySpan');

            const levelObj = {
                'A': 0.7,
                'B': 0.8,
                'C': 0.9,
            };
            console.log('levelObj', levelObj);

            // init
            myBox.hide();

            myBtn.click(function() {
                console.log('myBtn ok');
                console.log('this', this);
                let getDataPrice = Number($(this).attr('data-price'));
                let getDataLevel = $(this).attr('data-level');
                // let getDataLevel = $(this).data('level');
                console.log('getDataPrice', getDataPrice);
                console.log('getDataLevel', getDataLevel);
                let result = getDataPrice * levelObj[getDataLevel];
                console.log('result', result);

                const nowCardBody = $(this).parent();
                const nowMyBox = nowCardBody.find('.myBox');
                const nowMySpan = nowCardBody.find('.mySpan');

                $(this).remove();
                // console.log('nowCardBody', nowCardBody);F
                nowMyBox.show();
                nowMySpan.text(`優惠價 ${result} 元`)
            });
        });

        // 加上 JavaScript 函式 scrollToTop() 來執行回到頂部的動作
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth' // 讓滾動有平滑的動畫效果
            });
        }
    </script>

</body>

</html>