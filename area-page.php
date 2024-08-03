<?php include './inc.php' ?>
<?php
$uri = explode('/', $_SERVER['REQUEST_URI']);

$cat = trim($uri[1]);
$city = '';
$area = '';



$c = explode('-', $_GET['city']);
$a = explode('-', $_GET['area']);
foreach ($c as $i => $ct) {
    if ($i == count($c)) {
        $city .= strtolower(trim($ct));
    } else {
        $city .= strtolower(trim($ct)) . ' ';
    }
}
foreach ($a as $j => $ar) {
    if ($j == count($a)) {
        $area .= strtolower(trim($ar));
    } else {
        $area .= strtolower(trim($ar)) . ' ';
    }
}


$looking_for_city_area = "SELECT * FROM area WHERE area_city_name = '{$_GET['city']}' and area_name = '{$_GET['area']}'";
$looking_for_city_area_result = mysqli_query($con, $looking_for_city_area);
if (!mysqli_num_rows($looking_for_city_area_result)) {
    header("Location: https://ctchicks.com/404");
} else {
    $profile_query = "SELECT * FROM profiles WHERE  cities = '{$_GET['city']}' AND areas = '{$_GET['area']}' AND callgirl_escort = '$cat' ";
    $profile_query_result = mysqli_query($con, $profile_query);
    if (mysqli_num_rows($profile_query_result) < 1) {
    }
}


if($cat == 'call-girls'){
    $meta_title = ' Call girls in '.$area .'('. $city .') with Real Phone Number';
    $meta_description = "Hey! I am independent call girl near  $area in $city, I offer services at low prices. I'm offering you these services at your home or hotel room.";
}else{
    $meta_title = ' Escorts in '.$area .'('. $city .') with Real Phone Number';
    $meta_description = "Hey! I am independent Escorts near  $area in $city, I offer services at low prices. I'm offering you these services at your home or hotel room."; 
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $noindex ?>
    <title><?=$meta_title ?></title>
    <meta name="description" content="<?=$meta_description ?>" />
    <link rel="canonical" href="https://ctchicks.com/<?= strtolower($cat) . '/' . strtolower($_GET['city']) . '/' . strtolower($_GET['area']) . '/' ?>" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?=$meta_title ?>
" />
    <meta property="og:description" content="<?=$meta_description ?>" />
    <meta property="og:url" content="https://ctchicks.com/<?= $cat . '/' . $_GET['city'] . '/' . $_GET['area'] . '/' ?>" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?=$meta_title ?>
" />
    <meta name="twitter:description" content="<?=$meta_description ?>" />
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


        .just-two-line {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            font-weight: 500;
        }

        /* City CSS */
        .long-profile {
            width: 100%;
            height: 190px;
            border: 2px solid var(--primary);
            display: flex;
            flex-wrap: wrap;
            margin: 1% 0;
            border-radius: 10px;
            padding: 1%;
            position: relative;
        }

        .premium-tag {
            position: absolute;
            top: 2px;
            right: 5px;
            padding: 2.5px 10px;
            border: 1px solid var(--primary);
            background-color: var(--primary);
            color: white;
            font-size: small;
            border-radius: 15px;

        }

        .long-profile-image {
            width: 160px;
            height: 100%;
            border-radius: 50%;
            /* overflow: hidden; */
            background-color: rgb(233, 233, 233);
            position: relative;
            border: 1.5px solid var(--primary);
        }

        .long-profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top;
            border-radius: 50%;
        }

        .image-count {
            width: 30px;
            color: white;
            position: absolute;
            display: flex;
            align-items: center;
            border-radius: 2px;
            bottom: 1%;
            left: 1%;
            padding: 1%;
            background-color: rgba(0, 0, 0, 0.628);
        }

        .favourite {
            width: 30px;
            color: white;
            position: absolute;
            top: 1%;
            right: 1%;
        }

        .long-profile-detail {
            width: calc(100% - 160px);
            height: 100%;
            padding: 1%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .long-profile-detail h3 {
            font-size: 1.3rem;
            margin: 0;
            padding: 0;
        }

        .long-btn-action {
            width: 100%;
            display: flex;
            justify-content: end;
            gap: 2%;
        }

        .long-profile-detail p {
            padding: 0;
            margin: 1% 0;
        }

        .long-btn-action button {
            /* width: 100px; */
            height: 40px;
            border: 0;
            font-size: 1.05rem;
            border-radius: 100px;
            padding: 0 15px;
            cursor: pointer;
        }

        .last-step h4 {
            font-size: 1.4rem;
            text-align: center;
        }

        .top-cities-of-india {
            width: 100%;
            height: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 3%;
        }

        .top-cities-of-india button {
            width: 100px;
            height: 40px;
            border-radius: 3px;
            background-color: green;
            border: 0;
            margin: 5% 1%;
            cursor: pointer;
            color: white;
            /* padding: 42%; */
        }

        .top-cities-of-india a:nth-child(even) button {
            background-color: #0075da;
            color: white;
        }

        @media screen and (max-width: 580px) {

            .long-profile {
                height: auto;
                justify-content: center;
            }

            .long-profile-detail h3 {
                font-size: 1.2rem;
                margin: 0;
                padding: 0;
            }

            .long-profile-image {
                width: 50%;
                aspect-ratio: 1/1;
            }

            /* }
        @media screen and (max-width: 530px) { */

            .just-two-line {
                font-size: small;
                line-height: 20px;
                -webkit-line-clamp: 4;
                margin-top: 3px;
            }

        }

        @media screen and (max-width: 500px) {
            .form-container {
                grid-template-columns: repeat(1, minmax(100%, 1fr));
            }
        }

        @media screen and (max-width: 430px) {

            /* .long-profile-image{width: 90px;} */
            .long-profile-detail {
                width: 100%;
            }
        }

        /* City CSS */
    </style>
</head>

<body onload="checkCookie()">

        <?=$_18 ?>

    <?php include './navbar.php' ?>

    <div class="container" style="border: 0;padding:0;background:transparent">
        <?php
        $count_pro = 1;
        while ($row = mysqli_fetch_assoc($profile_query_result)) {

            if (!empty($row['image_']) && $row['image_'] != null) {
                $image_count = json_decode($row['image_'], true);
                $image_count_alt = json_decode($row['image_alt_'], true);
            }

            $create_url = 'https://ctchicks.com/' . $row['callgirl_escort'] . '/' . $row['cities'] . '/';
            if (strtolower($row['areas']) == 'all') {
                $create_url .= $row['identity_cat'] . '/';
            } else {
                $create_url .= $row['areas'] . '/' . $row['identity_cat'] . '/';
            }


        ?>

            <div class="long-profile" style="<?php if ($count_pro % 4 == 0 || $count_pro == 1 || $count_pro == 2) {
                                                    echo 'border: 2px solid pink;';
                                                } ?>">
                <?php


                if ($count_pro % 3 == 0) {
                    echo '<div class="premium-tag">PRO</div>';
                } elseif ($count_pro % 4 == 0) {
                    echo '<div class="premium-tag">PRO MAX</div>';
                } elseif ($count_pro == 1) {
                    echo '<div class="premium-tag">PRO MAX</div>';
                } elseif ($count_pro == 2) {
                    echo '<div class="premium-tag">PRO MAX</div>';
                }
                $count_pro += 1;

                ?>
                <div class="long-profile-image">
                    <a href="<?= $create_url ?>">
                        <?php if (isset($image_count)) { ?>
                            <img src="<?= $cdn_url ?>profiles/<?= $image_count[0] ?>" alt="<?= $image_count_alt[0] ?>" width="100%" loading="lazy" height="100%" />
                        <?php } ?>
                    </a>
                    <!-- <span class="favourite" id="favourite"><?= $heart ?></span>
                    <span class="image-count"><?= $camera ?><?php if (isset($image_count)) {
                                                                echo count($image_count);
                                                            } ?></span> -->
                </div>
                <div class="long-profile-detail">
                    <a href="<?= $create_url ?>">
                        <h3 style=" font-size: 1rem; line-height: 18px;"><?= $row['page_h1'] ?></h3>
                    </a>
                    <div class="just-two-line">
                        <p><?= $row['content'] ?></p>
                    </div>
                    <div class="long-btn-action">
                        <a href="https://api.whatsapp.com/send?phone=91<?php if (!empty($row['phone'])) {
                                                                            echo $row['phone'];
                                                                        } else {
                                                                            echo '0000000000';
                                                                        } ?>&text=Hi%20Kiara,%20I%20want%20a%20service%20in%20Goa%20found%20you%20on%20Ctchicks"><button style="background-color: green;color:white"><i class="ri-whatsapp-line"></i> <?php if (!empty($row['phone'])) {
                                                                                                                                                                                                                                                                                                                                        echo $row['phone'];
                                                                                                                                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                                                                                                                                        echo '0000000000';
                                                                                                                                                                                                                                                                                                                                    } ?></button></a>
                        <!-- <a href="tel:+910000000000"><button style="background-color:#0075DA;color:white">Contact</button></a> -->
                    </div>
                </div>
            </div>

        <?php } ?>




    </div>

    <div class="container" style="user-select: none;">
        <h2>Are you looking for young <?php if($cat == 'escorts'){echo 'escorts';}else{ echo 'call girls'; } ?> in the <?= ucwords($area) ?>  <?= ucwords($city) ?>for friendship?</h2>
        <p>On our <a href="<?= get_url() ?>">Ctchicks website</a>, you will find hundreds of classified profiles of <a href="<?= get_url() . $cat . '/' . $_GET['city'] . '/' ?>"><?= ucwords($city) ?> <?php if($cat == 'escorts'){echo 'escorts';}else{ echo 'call girls'; } ?></a>. All <?php if($cat == 'escorts'){echo 'escorts';}else{ echo 'call girls'; } ?> near <?= ucwords($city) ?> profiles are 100% genuine and verified from our end through video calls. These hot and charming models can be contacted easily through our website. All our <?= ucwords($city) ?> female models are curvy, passionate, experienced, harmonious, and sexually excited.</p>
        <p>You can easily find phone numbers of <a href='<?= get_url() . $cat . '/'.$_GET['city'].'/'. $_GET['area'] . '/' ?>'>independent <?php if($cat == 'escorts'){echo 'escorts';}else{ echo 'call girls'; } ?> in the <?= ucwords($area) ?></a> on Ctchicks. These females are readily available anywhere in the <?= ucwords($city) ?>. These girls can come to your place or hotel room without any advance. You need to pay only after they arrive at your location. You can find <?php if($cat == 'escorts'){echo 'escorts';}else{ echo 'call girls'; } ?> in the <?= ucwords($city) ?> as per your particular taste 24x7 in <?= ucwords($city) ?>.</p>

        <h2>Mature ladies and housewives <?php if($cat == 'escorts'){echo 'escorts';}else{ echo 'call girls'; } ?> near me in the <?= ucwords($area) ?>.</h2>

        <p>Apart from thousands of young college girls, you can find hot and juicy mature milfs in the <?= ucwords($city) ?>. Many newly married or divorced ladies are available near you in the <?= ucwords($area) ?> <?= ucwords($city) ?>. These adult females are chubby and experienced in erotic desires. Most of them are well experienced to satisfy the urge of your inner desires.</p>

        <p>Ctchicks.com allows our visitors to find a suitable partner for them. Our visitors can browse all the available profiles and communicate with them without fees or charges. You can date these <?php if($cat == 'escorts'){echo 'escorts';}else{ echo 'call girls'; } ?> or get them for sexual encounters without any commitment. Many YouTube models, Facebook girls, and Instagram sensations post their ads for some extra income or fun.</p>

        <p><a href="<?= get_url() ?>">Ctchicks.com</a> is not an escort service agency; we are just any classified ad platform. We work as a communication medium between visitors and models. We are not reliable for any financial activity between them.</p>

        <h3 class="third-heading">Bring call girls To your Hotel room In ( <?= ucwords($area) ?> ).</h3>
        <p>Yes, you can enjoy private services from top call girls at any hotel. ( <?= ucwords($area) ?>
        )is a beautiful area that has its air laden with love. To clear your doubts, simply reach out to our team of dedicated staff, and we will point you in the direction of warm and luxurious hotels. If you don't know which hotel is good for you. Let us make the arrangements for the happiest night of your life. Make sure to reach the room on time and enjoy every last moment. If you book a room in some good hotels they could be a safer place to relax with our lovely girls. So invest your money in a night where you enjoy satisfying services from start to end.</p>

        <h2>How to check the authenticity of (<?= ucwords($area) ?>) call girls</h2>

        <p>As we offer cheap call girl service in ( <?= ucwords($area) ?>
    ), we do well to make sure that all our girls are properly vetted and their photos genuine, so you have nothing to worry about. Just sit back and relax. We will make sure that you get the sexiest call girl available at your time. To make your time with us best we only share real images of our female staff. You can rely on us as we offer doorstep delivery with no advance. Images might be old but you are going to get the same girl as the images. If you are going for Russian you are going to get images that are just one week old.</p>

    <h2>How do you know if the price of a call girl in ( <?= ucwords($area) ?> ) is genuine or not?</h2>

    <p>If you want to Hire a call girl in ( <?= ucwords($area) ?> )then follow these simple steps:</p>
<ul>
    <li>Make a list of all genuine call girls service provider agencies by searching “call girls Near Me in ( <?= ucwords($area) ?>  ) on the Internet.</li>
    <li>Visit ctchicks.com websites in ( <?= ucwords($area) ?> ) city one by one and read all things carefully.</li>
    <li>Select your desired ( <?= ucwords($area) ?> ) call girls, and provide your identity details for verification.</li>
    <li>Get a ( <?= ucwords($area) ?> ) call girl’s Number and fix your meeting date and time.</li>
    <li>Take the ( <?= ucwords($area) ?> ) call girls service and pay the amount to the call girls in ( <?= ucwords($area) ?> ).</li>
</ul>





    </div>
    <div class="container last-step">
        <h4>Top Cities Of India</h4>
        <div class="top-cities-of-india">
            <a href="https://ctchicks.com/<?= $cat ?>/chennai/"><button>Chennai</button></a>
            <a href="https://ctchicks.com/<?= $cat ?>/ahmedabad/"><button>Ahmedabad</button></a>
            <a href="https://ctchicks.com/<?= $cat ?>/delhi/"><button>Delhi</button></a>
            <a href="https://ctchicks.com/<?= $cat ?>/indore/"><button>Indore</button></a>
            <a href="https://ctchicks.com/<?= $cat ?>/bangalore/"><button>Bangalore</button></a>
            <a href="https://ctchicks.com/<?= $cat ?>/pune/"><button>Pune</button></a>
            <a href="https://ctchicks.com/<?= $cat ?>/jaipur/"><button>Jaipur</button></a>
            <a href="https://ctchicks.com/<?= $cat ?>/gurgaon/"><button>Gurgaon</button></a>
            <a href="https://ctchicks.com/<?= $cat ?>/hyderabad/"><button>Hyderabad</button></a>
            <a href="https://ctchicks.com/<?= $cat ?>/kochi/"><button>Kochi</button></a>
        </div>
        <h4>Areas Of <?= ucwords($city) ?></h4>
        <div class="top-cities-of-india" id="areasOfCity">
            <?php

            $cityX = strtolower($_GET['city']);
            $areaX = '';

            $area_list = "SELECT * FROM area2 WHERE area_city_name = '$cityX'";
            $res = mysqli_query($con, $area_list);
            if (mysqli_num_rows($res) > 0) {
                $row = mysqli_fetch_assoc($res);
                $areas = json_decode($row['area_name'], true);
                foreach ($areas as $area) {
                    $a = '';
                    foreach (explode('-', $area) as $c) {
                        $a .= $c . ' ';
                    }
                    $profile_exist = "SELECT * FROM profiles WHERE cities = '$cityX' AND areas = '$area' AND callgirl_escort = '$cat'";
                    $result_profile_exist = mysqli_query($con, $profile_exist);
                    if (mysqli_num_rows($result_profile_exist) > 0) {
                        $areaX .= "<a href='" . get_url() . $cat . "/" . $row['area_city_name'] . "/" . strtolower($area) . "/'><button>" . ucwords(strtolower($a)) . "</button></a>";
                    }        
                }
            }
            echo $areaX;

            ?>
        </div>
    </div>

    <?php include './footer2.php' ?>

</body>

</html>