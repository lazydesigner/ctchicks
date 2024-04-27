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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $noindex ?>
    <title> Call girls in <?= $area ?> (<?= $city ?>) with Real Phone Number</title>
    <meta name="description" content="Hey! I am independent call girl near <?= $area ?> in <?= $city ?>, I offer services at low prices. I'm offering you these services at your home or hotel room." />
    <link rel="canonical" href="https://ctchicks.com/<?= $cat . '/' . $_GET['city'] . '/' . $_GET['area'] . '/' ?>" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content=" Call girls in <?= $area ?> (<?= $city ?>) with Real Phone Number
" />
    <meta property="og:description" content="Hey! I am independent call girl near <?= $area ?> in <?= $city ?>, I offer services at low prices. I'm offering you these services at your home or hotel room." />
    <meta property="og:url" content="https://ctchicks.com/<?= $cat . '/' . $_GET['city'] . '/' . $_GET['area'] . '/' ?>" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content=" Call girls in <?= $area ?> (<?= $city ?>) with Real Phone Number
" />
    <meta name="twitter:description" content="Hey! I am independent call girl near <?= $area ?> in <?= $city ?>, I offer services at low prices. I'm offering you these services at your home or hotel room." />
    <?= $page_css ?>
    <style>
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
            height: 160px;
            border: 2px solid rgb(173, 173, 173);
            display: flex;
            flex-wrap: wrap;
            margin: 1% 0;
        }

        .long-profile-image {
            width: 160px;
            height: 100%;
            background-color: rgb(233, 233, 233);
            position: relative;
        }

        .long-profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top;
        }

        .image-count {
            width: 40px;
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
            width: 100px;
            height: 40px;
            border: 0;
            font-size: 1.05rem;
            cursor: pointer;
        }

        .last-step h4 {
            font-size: 1.4rem;
        }

        .top-cities-of-india {
            width: 100%;
            height: auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: start;
            gap: 3%;
        }

        .top-cities-of-india button {
            width: 100px;
            height: 40px;
            border-radius: 3px;
            background-color: var(--secondary);
            border: 0;
            margin: 5% 1%;
            cursor: pointer;
            /* padding: 42%; */
        }

        .faq {
            display: flex;
            flex-direction: column;
        }

        .question {
            background-color: #f6f6f6;
            cursor: pointer;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: bold;
            margin: 5px;
            border-radius: 10px;
            transition: all 0.3s ease-out;
        }

        .question:hover {
            background-color: #ebebeb;
        }

        .answer {
            display: none;
            padding: 20px;
            font-size: 16px;
            line-height: 1.4;
            margin: 5px;
            border-radius: 10px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease-out;
        }

        .question.active {
            background-color: #edf2f7;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);
            transform: translateY(-10px);
            border-radius: 10px 10px 0 0;
        }

        .question.active+.answer {
            display: block;
            transform: translateY(0);
            border: 1px solid #e2e8f0;
            border-top: none;
            border-radius: 0 0 10px 10px;
        }

        @media screen and (max-width: 530px) {

            .just-two-line {
                display: none;
            }

        }

        @media screen and (max-width: 500px) {
            .form-container {
                grid-template-columns: repeat(1, minmax(100%, 1fr));
            }
        }

        @media screen and (max-width: 430px) {
            .long-profile-image {
                width: 90px;
            }

            .long-profile-detail {
                width: calc(100% - 90px);
            }

            .long-btn-action button {
                width: 90px;
            }
        }

        /* City CSS */
    </style>
</head>

<body onload="checkCookie()">

    <?php include './navbar.php' ?>

    <div class="container" style="border: 0;padding:0;background:transparent">
        <?php
        while ($row = mysqli_fetch_assoc($profile_query_result)) {

            if(!empty($row['image_']) && $row['image_'] != null ){
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

            <div class="long-profile">
                <div class="long-profile-image">
                    <a href="<?= $create_url ?>">
                    <?php if(isset($image_count)){ ?>
                    <img src="<?= $cdn_url ?>profiles/<?= $image_count[0] ?>" alt="<?=$image_count_alt[0] ?>" width="100%" loading="lazy" height="100%" />
                    <?php } ?>
                    </a>
                    <span class="favourite" id="favourite"><?= $heart ?></span>
                    <span class="image-count"><?= $camera ?><?php if(isset($image_count)){ echo count($image_count); } ?></span>
                </div>
                <div class="long-profile-detail">
                    <a href="<?= $create_url ?>">
                        <h3><?= $row['page_h1'] ?></h3>
                    </a>
                    <div class="just-two-line">
                        <p><?= $row['content'] ?></p>
                    </div>
                    <div class="long-btn-action">
                        <a href="https://api.whatsapp.com/send?phone=910000000000&text=Hi%20Kiara,%20I%20want%20a%20service%20in%20Goa%20found%20you%20on%20Ctchicks"><button style="background-color: green;color:white">WhatsApp</button></a>
                        <a href="tel:+910000000000"><button style="background-color:#0075DA;color:white">Contact</button></a>
                    </div>
                </div>
            </div>

        <?php } ?>




    </div>

    <div class="container">
        <h2>Are you looking for young call girls in the <?= ucwords($city) ?> for friendship?</h2>
        <p>On our <a href="<?= get_url() ?>">Ctchicks website</a>, you will find hundreds of classified profiles of <a href="<?= get_url() . $cat . '/' . $_GET['city'] . '/' ?>"><?= ucwords($city) ?> call girls</a>. All Call girls near <?= ucwords($city) ?> profiles are 100% genuine and verified from our end through video calls. These hot and charming models can be contacted easily through our website. All our <?= ucwords($city) ?> female models are curvy, passionate, experienced, harmonious, and sexually excited.</p>
        <p>You can easily find phone numbers of independent call girls in the <?= ucwords($city) ?> on Ctchicks. These females are readily available anywhere in the <?= ucwords($city) ?>. These girls can come to your place or hotel room without any advance. You need to pay only after they arrive at your location. You can find call girls in the <?= ucwords($city) ?> as per your particular taste 24x7 in <?= ucwords($city) ?>.</p>

        <h2>Mature ladies and housewives call girls near me in the <?= ucwords($city) ?>.</h2>

        <p>Apart from thousands of young college girls, you can find hot and juicy mature milfs in the <?= ucwords($city) ?>. Many newly married or divorced ladies are available near you in the <?= ucwords($city) ?>. These adult females are chubby and experienced in erotic desires. Most of them are well experienced to satisfy the urge of your inner desires.</p>

        <p>Ctchicks.com allows our visitors to find a suitable partner for them. Our visitors can browse all the available profiles and communicate with them without fees or charges. You can date these call girls or get them for sexual encounters without any commitment. Many YouTube models, Facebook girls, and Instagram sensations post their ads for some extra income or fun.</p>

        <p><a href="<?= get_url() ?>">Ctchicks.com</a> is not an escort service agency; we are just any classified ad platform. We work as a communication medium between visitors and models. We are not reliable for any financial activity between them.</p>

        <h3 class="third-heading">FAQ</h3>
        <div class="faq">
            <div class="question">
                <h4><strong>Can We Bring Call Girls To Hotel In <?=  ucwords($area) ?>?</strong></h4>
            </div>
            <div class="answer">
                <p>Yes! <?= $area ?> is a beautiful Area and one that has even its air laden with love. To clear your doubts, simply reach out to our team of dedicated staff, and we will point you in the direction of hotels that are warm and luxurious.</p>
            </div>
            <div class="question">
                <h4><strong>Is The Photo Of The <?=  ucwords($area) ?> Call Girl Genuine?</strong></h4>
            </div>
            <div class="answer">
                <p>As we offer cheap call girl service in <?=  ucwords($area) ?>, we do well to make sure that all our girls are properly vetted and their photos genuine, so you have nothing to worry about. Just sit back and relax.</p>
            </div>
            <div class="question">
                <h4>What Benefits Of Choosing Call Girls At Ctchicks.com</h4>
            </div>
            <div class="answer">
                <p>We guarantee you maximum enjoyment when you choose ctchicks.com. Also, your identity is safe with us. Only the girl and you will know you used our service. We also guarantee you your value for your money due to our pocket-friendly rates for premium service and many more.</p>
            </div>
            <div class="question">
                <h4>What is price of call girl in <?=  ucwords($area) ?>, <?=  ucwords($city) ?></h4>
            </div>
            <div class="answer">
                <p>Low to High-priced sex workers call girls in <?=  ucwords($area) ?>, <?=  ucwords($city) ?> charge anywhere from 10,000 ( 10k ) to 50,000 (50k) rupees for an hour, but some charge many times more. Also Available for budget clints.</p>
            </div>
            <div class="question">How do I book a call girl in <?=  ucwords($area) ?>, <?=  ucwords($city) ?>?</div>
            <div class="answer">
                <p>If you want to Hire a call girl in <?=  ucwords($area) ?>, <?=  ucwords($city) ?> then follow these simple steps:</p>
                <p> <br>• Make a list of all genuine call girls service provider agencies by searching “Call Girls Near Me in <?=  ucwords($area) ?>, <?=  ucwords($city) ?>” on the Internet.
                    <br>• Visit ctchicks.com websites in <?=  ucwords($area) ?>, <?=  ucwords($city) ?> city one by one and read all things carefully.
                    <br>• Select your desired <?=  ucwords($area) ?>, <?=  ucwords($city) ?> call girls, and provide your identity details for verification.
                    <br>• Get a <?=  ucwords($area) ?>, <?=  ucwords($city) ?> call girl’s Number and fix your meeting date and time.
                    <br>• Take the <?=  ucwords($area) ?>, <?=  ucwords($city) ?> call girls service and pay the amount to the call girls in <?=  ucwords($area) ?>, <?=  ucwords($city) ?>.
                </p>
            </div>
            <div class="question"><h4>Is There a Refund Policy Available</h4></div>
            <div class="answer">No, once you pay our call girl in <?=  ucwords($area) ?>, <?=  ucwords($city) ?>, we cannot refund the money.</div>
        </div>
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
        $areaX .= "<a href='" . get_url() . $cat . "/" . $row['area_city_name'] . "/" . strtolower($area) . "/'><button>" . ucwords(strtolower($a)) . "</button></a>";
    }
}
echo $areaX;

?>
        </div>
    </div>

    <?php include './footer2.php' ?>

</body>

</html>