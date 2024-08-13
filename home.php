<?php include './inc.php' ?>

<?php

$city_query = "SELECT * FROM city";
$city_result = mysqli_query($con, $city_query);
$city_result2 = mysqli_query($con, $city_query);

$cat = 'call-girls';

if (!$city_result) {
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $noindex ?>
    <title>Independent call girls with their phone numbers</title>
    <meta name="description" content="Browse our call girl directory for escorts service, independent Call Girls, and divorce escort girls with photos, WhatsApp and phone numbers. Get erotic service in India." />
    <link rel="canonical" href="<?=get_url() ?>" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Independent call girls with their phone numbers" />
    <meta property="og:description" content="Browse our call girl directory for escorts service, independent Call Girls, and divorce escort girls with photos, WhatsApp and phone numbers. Get erotic service in India." />
    <meta property="og:url" content="<?=get_url() ?>" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Independent call girls with their phone numbers" />
    <meta name="twitter:description" content="Browse our call girl directory for escorts service, independent Call Girls, and divorce escort girls with photos, WhatsApp and phone numbers. Get erotic service in India." />
    <?= $page_css ?>


    <style>
        * {
    box-sizing: border-box;
}

:root {
    --primary: #0075da;
    /* --primary: #022F52; */
    --secondary: #A3B4C7;
    --secondaryC:rgb(223, 229, 235);
    --link: #0019da;
}

html,
body {
    width: 100%;
    height: auto;
    padding: 0;
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    line-height: 24px;
}

a {
    list-style: none;
    text-decoration: none;
}

header {
    width: 100%;
    height: 50px;
    background-color: var(--primary);
    position: relative;
}

header :is(nav, .main-ul, .nav-ul, a) {
    height: 100%;
    text-decoration: none;
    display: flex;
    align-items: center;
    padding: 0;
    margin: 0;
    list-style: none;
    color: white;
}

nav {
    justify-content: space-between;
    width: 75%;
    margin: 0 auto !important;
}

.main-ul {
    width: 85%;
    gap: 5%;
    align-items: center;
}

.nav-ul {
    width: 50%;
}

.nav-ul li {
    padding: 0 2%;
}

.brand {
    font-size: 2.5rem;
    font-weight: 900;
    display: flex;
    align-items: center;
}

.brand img {
    width: 100px;
}

.ad-post2 {
    display: block!important;
}

.ad-post-btn,
.search-girl {
    display: none;
}

/* navbar above */



.container {
    width: 75%;
    margin: 1.5% auto;
    height: auto;
    padding:.5% 1%;
    border-top: 5px solid var(--primary);
    background-color: var(--secondaryC);
}

.container a {
    font-weight: bold;
    color: var(--link);
}

form {
    margin: 1% 2%;
}

.form-container {
    width: 100%;
    height: auto;
    display: grid;
    grid-template-columns: repeat(4, minmax(24%, 1fr));
    grid-template-rows: auto;
    gap: 1%;
    padding: 2% auto;
}

.form-box {
    margin: auto 1%;
    width: 100%;
    height: 100%;
    padding: 2%;
    position: relative;
}

select,
input {
    width: 100%;
    height: 40px;
    outline: 0;
    border-radius: 5px;
    border: 1px solid lightgrey;
    padding: 0 2%;
}

.form-box button {
    width: 120px;
    height: 40px;
    border: 5px;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    background-color: var(--primary);
    color: white;
}

.page-detail-and-information {
    width: 75%;
    margin: auto;
    padding: 1% 0 0 0;
}

.crumb {
    font-weight: bold;
    color: var(--secondary);
}

/* Footer  */
/* Css */
.footer-call-btn, .footer-whatsapp-btn{
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background-color: var(--primary);
    position: fixed;
    bottom: 5%;
    padding: 0;
    margin: 0;
    display: grid;
    place-items: center;
    box-shadow: 0 0 6px 3px rgb(115, 115, 115);
}
.footer-call-btn{left: 2.5%;color: white;}
.footer-whatsapp-btn{right: 2.5%;background-color: green;color: white;}
footer {
    width: 100%;
    height: auto;
    padding: 2% 0;
    background-color: var(--secondary);
    color: rgb(25, 25, 25);
}
.footer-container{
    width: 75%;
    margin: auto;
}
.footer-container p{padding: 0;margin: 0;font-size: 1.2rem;font-weight: bold;}
.footer-container ul{
    list-style: none;
    display: flex;
    flex-wrap: wrap;
    padding: 0;
    margin: .5% 0;
}
.footer-container ul li{
    margin: 0;
    padding:0 2%;
    border-right: 1px solid rgb(28, 28, 28);
}
.footer-container ul li:last-child{border: 0;}

.slide-to-top{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: var(--primary);
    color: white;
    display: none;
    place-items: center;
    position: fixed;
    bottom: 5%;
    right: 2%;
    cursor: pointer;
    box-shadow: 0 0 2px 1px white;
}
.slide-to-top2{
    display: grid;}
/*  */
.confirm-18 {
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, .5);
    display: block;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 5;
}

.confirm-18 p {
    font-size: 1rem;
    margin: 0;
    padding: 0;
}

.confirm-18-body {
    width: 50%;
    /* height: 50%; */
    transform: translate(50%, 10%);
    background-color: white;
    padding: 2%;
    border-radius: 10px;
}

.btn1 {
    width: 100px;
    height: 40px;
    border: 0;
    font-weight: bold;
    cursor: pointer;
    background-color: var(--primary);
    border-radius: 2px;
    color: white;
}

.btn2 {
    width: 100px;
    height: 40px;
    border: 1px solid black;
    font-weight: bold;
    cursor: pointer;
    background-color: transparent;
    border-radius: 2px;
    color: black;
}



@media screen and (max-width: 850px) {
  
}
@media screen and (max-width: 770px) {
    .page-detail-and-information,.container,nav{width: 90%;}
    .nav-ul{width: 100%;}
}
@media screen and (max-width:700px) {

    .confirm-18-body {
        width: 100%;
        /* height: 50%; */
        transform: translate(0%, 0%);
        background-color: white;
        padding: 2%;
        border-radius: 0px;
    }

}

@media screen and (max-width: 600px) {
    nav {
        width: 95%;
    }
    .container{width: 100%;}

    .main-ul {
        width: 70%;
    }
    .ad-post2 {
        display: none!important;
    }

    .post-btn {
        width: 30%;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        font-size: 1.5rem;
        cursor: pointer;
        gap: 10%;
    }

    .ad-post-btn,
    .search-girl {
        display: block;
    }

    .nav-ul {
        /* display: block!important; */
        position: absolute !important;
        width: 100% !important;
        /* height: auto!important; */
        /* padding: 2% .2%!important; */
        top: 50px !important;
        left: 0;
        background-color: var(--primary);
    }

    .nav-ul li {
        margin: 3% 0;
        padding: 1% 3%;
    }

    .search-bar {
        width: 95%;
        margin-top: 20px;
        overflow: hidden;
        height: 0;
        transition: .25s;
    }
    .form-container{
        grid-template-columns: repeat(2, minmax(50%, 1fr));
    }

    .search-bar-show {
        margin-top: 55px;
        height: 100%;
        transform: .25s;
    }

}

@media screen and (max-width: 530px) {

    .just-two-line{display: none;}
  
}

@media screen and (max-width: 500px) {
    .form-container{
        grid-template-columns: repeat(1, minmax(100%, 1fr));
    }  
}

@media screen and (max-width: 430px) {
    .long-profile-image{width: 90px;}
.long-profile-detail {width: calc(100% - 90px);}
}

.all-list-of-cities{
    width: 100%;
    height: auto;
    overflow: auto;
    position: absolute;
    display: none;
    left: 0;
    z-index: 1;
    background-color: lightgray;
}
table{width: 100%;padding: 2% 10%;}
table td{padding: 3%;border-bottom: 1px solid black;}


/* Css */
/* Footer  */




/* HOME PAGE CSS */
#search-for-cities-in-row {
    margin: 1% 0;
}


        .container {
            padding: 2% 4%;
        }

        .list-of-cities {
            width: 100%;
            height: auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(25%, 1fr));
            grid-template-rows: auto;
            margin-top: 1%;
            /* padding: 0 4%; */
        }

        .list-of-cities>div {
            margin: 3% 0;
        }

        .city-grid {
            width: 100%;
            height: 100%;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(30%, 1fr));
            grid-template-rows: auto;

        }

        .grid-items {
            width: 90%;
            min-height: 300px;
            box-shadow: 0 0 12px 1px rgba(0, 0, 0, 0.7);
            margin: 6% 4%;
            border-radius: 5%;
            background-color: white;
        }

        .grid-items .h3_{
            text-align: center;
            font-size: 1.3rem;
            font-weight: 700;
            display: flex;
            justify-content: center;
            margin-top: 5%;
            gap: 2%;
        }
        .grid-items .h3_ span{
            color: tomato;
            display: block;
            position: relative;
        }

        .grid-items .h3_ span::after{
            content: '';
            width: 0%;
            height: 25px;
            background-color: red;
            clip-path: polygon(50% 0%, 76% 1%, 93% 8%, 100% 15%, 68% 7%, 47% 6%, 23% 13%, 0 30%, 7% 18%, 24% 5%);
            position: absolute;
            bottom: -25px;
            border-radius: 50px;
            left: 0;
            animation: slide  10s infinite alternate linear;
            animation-direction:normal;
        }

        @keyframes slide {
            0%{
                width: 0%;
            }
            2%{width: 100%;}
            100%{
                width: 100%;
            }
        }
.grid-items .h3_ {
            text-align: center;
            font-size: 1.3rem;
        }

        .grid-items .h3_ span {
            color: tomato;
            position: relative;
        }

        .item-city-name {
            margin: 15px auto;
            display: flex;
            gap: 10px;
            width: 90%;
        }

        .item-city-name p {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .location-logo {
            width: 20px;
            height: 20px;
            align-self: center;
        }


        @media (max-width:800px) {
            .city-grid {
                width: 100%;
                height: 100%;
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(45%, 1fr));
                grid-template-rows: auto;
            }
        }

        @media (max-width:600px) {
            .city-grid {
                width: 100%;
                height: 100%;
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(100%, 1fr));
                grid-template-rows: auto;
            }
        }

        @media screen and (max-width:500px) {
            .list-of-cities {
                grid-template-columns: repeat(auto-fit, minmax(50%, 1fr));
            }
        }
    </style>
</head>

<body onload="checkCookie()">

    <?php include './navbar.php' ?>

    <!-- <div class="container">
        <input type="text" name="" id="search-for-cities-in-row" placeholder="Search For Cities...">
    </div> -->

    <div class="container">
        <strong style="display: none;">Indian Call Girls(<?php $sql = "SELECT COUNT(profile_id) as a FROM `profiles` WHERE `callgirl_escort` = 'call-girls'";
                                    $res = mysqli_query($con, $sql);
                                    $row = mysqli_fetch_array($res);
                                    echo $row['a'] ?>)</strong>

        <div class="city-grid">
            <div class="grid-items">
                <div class="h3_">Best Call girl in City <span>"A"</span></div>
                <a href="<?=get_url() ?>call-girls/agra/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Agra (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'agra'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
                <a href="<?=get_url() ?>call-girls/ahmedabad/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Ahmedabad (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'ahmedabad'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
                <a href="<?=get_url() ?>call-girls/ajmer/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Ajmer (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'ajmer'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
                <a href="<?=get_url() ?>call-girls/allahabad/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Allahabad (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'allahabad'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
                <a href="<?=get_url() ?>call-girls/ambala/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Ambala (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'ambala'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
                <a href="<?=get_url() ?>call-girls/amritsar/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>
                                Amritsar (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'amritsar'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
                
                <a href="<?=get_url() ?>call-girls/aligarh/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>
                            Aligarh (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'aligarh'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">
                <div class="h3_">Best Call girl in City <span>"B"</span></div>
                <a href="<?=get_url() ?>call-girls/bangalore/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Bangalore (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'bangalore'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
                <a href="<?=get_url() ?>call-girls/bhopal/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Bhopal (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'bhopal'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
                <a href="<?=get_url() ?>call-girls/bhubaneswar/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Bhubaneswar (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'bhubaneswar'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">

                <div class="h3_">Best Call girl in City <span>"C"</span></div>
                <a href="<?=get_url() ?>call-girls/chennai/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Chennai (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'chennai'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
                <a href="<?=get_url() ?>call-girls/coimbatore/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Coimbatore (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'coimbatore'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">
                <div class="h3_">Best Call girl in City <span>"D"</span></div>
                <a href="<?=get_url() ?>call-girls/dehradun/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Dehradun (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'dehradun'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
                <a href="<?=get_url() ?>call-girls/delhi/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Delhi (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'delhi'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">
                <div class="h3_">Best Call girl in City <span>"F"</span></div>
                <a href="<?=get_url() ?>call-girls/faridabad/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Faridabad (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'faridabad'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">
                <div class="h3_">Best Call girl in City <span>"G"</span></div>
                <a href="<?=get_url() ?>call-girls/goa/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Goa (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'goa'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
                <a href="<?=get_url() ?>call-girls/gurgaon/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Gurgaon (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'gurgaon'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
                <a href="<?=get_url() ?>call-girls/ghaziabad/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Ghaziabad (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'ghaziabad'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
                <a href="<?=get_url() ?>call-girls/guwahati/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Guwahati (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'guwahati'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
                <a href="<?=get_url() ?>call-girls/gorakhpur/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Gorakhpur (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'gorakhpur'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
                <a href="<?=get_url() ?>call-girls/greater-noida/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Greater Noida (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'greater-noida'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">
                <div class="h3_">Best Call girl in City <span>"H"</span></div>
                <a href="<?=get_url() ?>call-girls/hyderabad/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Hyderabad (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'hyderabad'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
                <a href="<?=get_url() ?>call-girls/haridwar/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Haridwar (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'haridwar'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">
                <div class="h3_">Best Call girl in City <span>"J"</span></div>
                <a href="<?=get_url() ?>call-girls/jalandhar/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Jalandhar (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'jalandhar'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
                <a href="<?=get_url() ?>call-girls/jhansi/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Jhansi (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'jhansi'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
                <a href="<?=get_url() ?>call-girls/jaipur/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Jaipur (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'jaipur'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
                <a href="<?=get_url() ?>call-girls/jodhpur/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Jodhpur (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'jodhpur'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">
                <div class="h3_">Best Call girl in City <span>"K"</span></div>
                <a href="<?=get_url() ?>call-girls/kanpur/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Kanpur (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'kanpur'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
                <a href="<?=get_url() ?>call-girls/kochi/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Kochi (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'kochi'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">
                <div class="h3_">Best Call girl in City <span>"L"</span></div>
                <a href="<?=get_url() ?>call-girls/lucknow/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Lucknow (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'lucknow'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
                <a href="<?=get_url() ?>call-girls/ludhiana/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Ludhiana (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'ludhiana'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">
                <div class="h3_">Best Call girl in City <span>"M"</span></div>
                <a href="<?=get_url() ?>call-girls/mysore/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Mysore (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'mysore'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
                <a href="<?=get_url() ?>call-girls/mumbai/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Mumbai (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'mumbai'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">
                <div class="h3_">Best Call girl in City <span>"P"</span></div>
                <a href="<?=get_url() ?>call-girls/pune/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Pune (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'pune'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">
                <div class="h3_">Best Call girl in City <span>"S"</span></div>
                <a href="<?=get_url() ?>call-girls/surat/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Surat (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'surat'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">
                <div class="h3_">Best Call girl in City <span>"T"</span></div>
                <a href="<?=get_url() ?>call-girls/thane/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Thane (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'call-girls' && cities = 'thane'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>



    </div>
    <div class="container" style="background-color:transparent;border:0;padding:0;font-size:1rem;font-weight: 400; display:none"><h2 style="font-weight: 400;">Find Passionate Escorts In Your City</h2></div>
    <div class="container" style=" display:none">
        <strong style="display: none;">Indian Escorts(<?php $sql2 = "SELECT COUNT(profile_id) as aa FROM `profiles` WHERE `callgirl_escort` = 'escorts'";
                                $res2 = mysqli_query($con, $sql2);
                                $row2 = mysqli_fetch_array($res2);
                                echo $row2['aa'] ?>)</strong>

<div class="city-grid">
            <div class="grid-items">
                <div class="h3_">Best Escorts in City <span>"A"</span></div>
                <a href="<?=get_url() ?>escorts/ahmedabad/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Ahmedabad (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'escorts' && cities = 'ahmedabad'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
                <a href="<?=get_url() ?>escorts/ajmer/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Ajmer (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'escorts' && cities = 'ajmer'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
                <a href="<?=get_url() ?>escorts/allahabad/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Allahabad (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'escorts' && cities = 'allahabad'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
                <a href="<?=get_url() ?>escorts/ambala/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Ambala (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'escorts' && cities = 'ambala'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
                <a href="<?=get_url() ?>escorts/amritsar/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>
                                Amritsar (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'escorts' && cities = 'amritsar'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">
                <div class="h3_">Best Escorts in City <span>"B"</span></div>
                <a href="<?=get_url() ?>escorts/bangalore/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Bangalore (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'escorts' && cities = 'bangalore'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
                <a href="<?=get_url() ?>escorts/bhubaneswar/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Bhubaneswar (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'escorts' && cities = 'bhubaneswar'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">

                <div class="h3_">Best Escorts in City <span>"C"</span></div>
                <a href="<?=get_url() ?>escorts/chennai/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Chennai (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'escorts' && cities = 'chennai'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">
                <div class="h3_">Best Escorts in City <span>"D"</span></div>
                <a href="<?=get_url() ?>escorts/dehradun/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Dehradun (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'escorts' && cities = 'dehradun'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
                <a href="<?=get_url() ?>escorts/delhi/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Delhi (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'escorts' && cities = 'delhi'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">
                <div class="h3_">Best Escorts in City <span>"G"</span></div>
                <a href="<?=get_url() ?>escorts/guwahati/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Guwahati (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'escorts' && cities = 'guwahati'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">
                <div class="h3_">Best Escorts in City <span>"F"</span></div>
                <a href="<?=get_url() ?>escorts/faridabad/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Faridabad (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'escorts' && cities = 'faridabad'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">
                <div class="h3_">Best Escorts in City <span>"K"</span></div>
                <a href="<?=get_url() ?>escorts/kanpur/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Kanpur (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'escorts' && cities = 'kanpur'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
            </div>
            
            <div class="grid-items">
                <div class="h3_">Best Escorts in City <span>"L"</span></div>
                <a href="<?=get_url() ?>escorts/lucknow/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Lucknow (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'escorts' && cities = 'lucknow'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">
                <div class="h3_">Best Escorts in City <span>"P"</span></div>
                <a href="<?=get_url() ?>escorts/pune/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Pune (<?php $sql = "SELECT COUNT(profile_id) as a FROM profiles WHERE callgirl_escort = 'escorts' && cities = 'pune'";
                                                                                                                        $res = mysqli_query($con, $sql);
                                                                                                                        $row = mysqli_fetch_array($res);
                                                                                                                        echo $row['a'] ?>)</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>



    </div>

    <div class="container">
        <p><a href="<?=get_url() ?>">Ctchicks</a> is a destination for the top-rated call girls in India. It is the most recommended Indian escort directory. Thousands of independent call girls post advertisements about their services, interests, photos, etc. Our platform caters to VIP escorts, divorced females, newly married ladies, college call girls, Russian escorts, etc. Our Ctchicks web portal caters to the most genuine and trusted escort service providers or independent call girls with their phone numbers.</p>

        <h1>Girls for friendship or dating near me</h1>

        </p>You can easily find girls near you on <a href="<?=get_url() ?>">Ctchicks.net</a>. You can easily find not only straight girls but also male escorts, shemales, lesbians, and other LGBTQA+ communities. Recently, we have collaborated with the most trusted and famous escort agencies in India and published almost 1200+ new profiles to cater to genuine service. Nowadays, it's quite difficult to find genuine girls for dating as most of the dating apps are fake to earn money on the name of subscriptions. We don’t charge any subscription fees to our visitors. Yes, girls may ask for money, but we are not responsible for any transactions between clients and girls. So please make sure that you contact only verified profiles or numbers on our platform. Otherwise, avoid any advance payment.</p>

        <h2>Why trust only Ctchicks.net for adult entertainment?</h2>

        <p>As this industry gets more vulnerable day by day. As we used to get news regarding frauds by pimps, brokers, or sometimes independent models, They used to take advance money and never provide any service. Girls used to leave a room or place immediately after taking payment, and clients left with disappointment and loss. To tackle such trust issues in major cities like Jaipur, Lucknow, Goa, etc., we introduce safety features on our website.</p>

        <p>Our platform used to put the mobile numbers of our trusted and genuine brokers from any specific city apart from their profiles. Get in touch with a trusted person for your private needs and desires. We don’t have any connection with any illegal businesses, as we are just an advertising platform. But we used to serve our visitors with some genuine links. So we request that our visitors connect with brokers or independent models whose numbers are specifically listed on our website. So we make sure that any cutting or monetary fraud will not happen to you. If you have any payment or fraud-related issues, you can contact us at our email address with payment history proof. We make sure that we get a 100% refund in such cases. But we also suggest that our online visitors avoid any advance payment before any physical meeting. Otherwise, you can contact our verified profiles or numbers with full trust.</p>

        <h3>Seeking Genuine Call girls in your room despite visiting any red light area.</h3>

        <p>We all know that visiting any red light area or brothel may be risky. Despite putting yourself in any kind of danger, You can take erotic genuine service from the Ctchicks classified platform. On the other hand, if any independent model needs to post any classified ad without any hassle to get genuine clients, then Ctchicks will be your first choice. Girls can post ads as per their city with all the details without any fees. We don’t charge a single penny to post an ad. But we recommend using genuine photos and other details. We are here to provide a trustworthy intimate partner in any corner of India and other serving countries. So get ready to get a real bang with naughty models in your city within your budget.</p>
    </div>


    <?php include './footer2.php' ?>

    <script>
        document.getElementById('search-for-cities-in-row').addEventListener('keyup', (e) => {
            text_ = e.target.value.toLowerCase();
            search_para = document.querySelectorAll('.list-of-cities')
            for (i = 0; i < search_para.length; i++) {
                for (j = 0; j < search_para[i].children.length; j++) {
                    if (search_para[i].children[j].children[0].textContent.toLowerCase().includes(text_)) {
                        search_para[i].children[j].style.display = 'block'
                    } else {
                        search_para[i].children[j].style.display = 'none'
                    }
                }

            }
        })
    </script>

</body>

</html>