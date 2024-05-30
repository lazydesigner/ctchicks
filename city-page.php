<?php include './inc.php' ?>
<?php

// ini_set('error_reporting', E_ALL);
// ini_set('display_errors', 1);
$uri = explode('/', $_SERVER['REQUEST_URI']);

$cat =  trim($uri[1]);
$city = '';

// Get current date and time
$currentDateTime = new DateTime();
$currentDateTime2 = new DateTime();

// Add 5 days to the current date and time
$currentDateTime->modify('+5 days');

// Format the modified date and time
$formattedDateTime = $currentDateTime->format('Y-m-d');
$formattedDateTime2 = $currentDateTime2->format('Y-m-d');

$del = "DELETE FROM new_profiles WHERE cities = '{$_GET['city']}' AND till_date < '$formattedDateTime2'";

$del_r = mysqli_query($con, $del);
if($del){}


$c = explode('-', $_GET['city']);
foreach ($c as $i => $ct) {
    if ($i == count($c)) {
        $city .= strtolower(trim($ct));
    } else {
        $city .= strtolower(trim($ct)) . ' ';
    }
}
$looking_for_city = "SELECT * FROM city WHERE city_name = '{$_GET['city']}'";
$looking_for_city_result = mysqli_query($con, $looking_for_city);
if (!mysqli_num_rows($looking_for_city_result)) {
    header("Location: https://ctchicks.com/404");
} else {

    $profile_query2 = "
        SELECT * 
        FROM new_profiles 
        WHERE cities = '{$_GET['city']}' AND callgirl_escort = '$cat' ";
    $profile_query_result = mysqli_query($con, $profile_query2);

    if (mysqli_num_rows($profile_query_result) < 1) {
        $pre = 'notpresent';    
        $profile_query = "
        SELECT * 
        FROM profiles 
        WHERE cities = '{$_GET['city']}' AND callgirl_escort = '$cat' 
        ORDER BY RAND() ";
        $profile_query_result = mysqli_query($con, $profile_query);
        if (mysqli_num_rows($profile_query_result) < 1) {
        }
    }    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $noindex ?>
    <title>Call Girls in <?=$city ?>: Free Delivery 24x7 at Your Doorstep</title>
    <meta name="description" content="Being one of the top <?=$city ?> call girls directory we provide fast delivery in 20 mins. All our call girls in <?=$city ?> are available 24/7 in Cash on delivery." />
    <link rel="canonical" href="https://ctchicks.com/<?=strtolower($cat).'/'.strtolower($_GET['city']).'/' ?>" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Call Girls in <?=$city ?>: Free Delivery 24x7 at Your Doorstep" />
    <meta property="og:description" content="Being one of the top <?=$city ?> call girls directory we provide fast delivery in 20 mins. All our call girls in <?=$city ?> are available 24/7 in Cash on delivery." />
    <meta property="og:url" content="https://ctchicks.com/<?=strtolower($cat).'/'.strtolower($_GET['city']).'/' ?>" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Call Girls in <?=$city ?>: Free Delivery 24x7 at Your Doorstep" />
    <meta name="twitter:description" content="Being one of the top <?=$city ?> call girls directory we provide fast delivery in 20 mins. All our call girls in <?=$city ?> are available 24/7 in Cash on delivery." />
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
            height: 190px;
            border: 2px solid var(--primary);
            display: flex;
            flex-wrap: wrap;
            margin: 1% 0;
            border-radius:10px;
            padding: 1%;
        }

        .long-profile-image {
            width: 160px;
            height: 100%;
            border-radius: 50%;
            /* overflow: hidden; */
            background-color: rgb(233, 233, 233);
            position: relative;
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
            background-color: var(--secondary);
            border: 0;
            margin: 5% 1%;
            cursor: pointer;
            /* padding: 42%; */
        }
        
        .top-cities-of-india a:nth-child(even) button{
            background-color: #0075da;
            color: white;
        }
        
@media screen and (max-width: 580px) {
    

.long-profile-image{border-radius: 0;}  
.long-profile-image img{border-radius: 0;}  

        .long-profile-detail h3 {
            font-size: 1rem;
            margin: 0;
            padding: 0;
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
.form-container{
    grid-template-columns: repeat(1, minmax(100%, 1fr));
}
    }

@media screen and (max-width: 430px) {
.long-profile-image{width: 90px;}
.long-profile-detail {width: calc(100% - 90px);}
}

        /* City CSS */
    </style>
</head>

<body onload="checkCookie()">

    <?php include './navbar.php' ?>

    <div class="container" style="user-select: none;">
    <p>On <strong>Ctchicks</strong>, you can browse a meticulously crafted collection of <a href="<?= get_url() . $cat.'/'.$_GET['city'].'/' ?>">call girls in <?=ucwords($city) ?></a>. Discover thousands of independent <?=ucwords($city) ?> call girls and select that suit your needs. Our website offers a diverse epitome of elegance and experience. Our website provides a seamless and transparent environment for a better browsing experience. So that you pursue through our extensive listings or portfolios that include comprehensive biographies. This portfolio also includes providing service,body figure details, complexions, and images of the model.</p><p>
<b>Ctchicks</b> works more than a repository of profiles because we are your trusted partner in the world of call girls. Join us on a Journey where beauty knows no boundaries and possibilities are endless.</p>

    </div>

    <div class="container" style="border: 0;padding:0;background:transparent">


        <?php
        while ($row = mysqli_fetch_assoc($profile_query_result)) {

                if(isset($pre)){
                    $key = '';
                    $value = '';
                foreach($row as $r=>$v){
                    $key .= "$r,";
                    $vv = addslashes($v);
                    $value .= "'{$vv}',";
                }
                    $key .= 'till_date';
                    $value .= "'{$formattedDateTime}'";
                    $in = "INSERT INTO new_profiles($key) VALUES ($value)";
                    $r = mysqli_query($con, $in);
                if($r){ echo '';}
                }

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
                        <h3 style=" line-height: 18px;"><?= $row['page_h1'] ?></h3>
                    </a>
                    <div class="just-two-line">
                        <p><?= trim($row['content']) ?></p>
                    </div>
                    <div class="long-btn-action">
                        <a href="https://api.whatsapp.com/send?phone=91<?php if(!empty($row['phone'])){echo $row['phone']; }else{echo '0000000000';} ?>&text=Hi%20Kiara,%20I%20want%20a%20service%20in%20Goa%20found%20you%20on%20Ctchicks"><button style="background-color: green;color:white"><i class="ri-whatsapp-line"></i> <?php if(!empty($row['phone'])){echo $row['phone']; }else{echo '0000000000';} ?></button></a>
                        <!-- <a href="tel:+910000000000"><button style="background-color:#0075DA;color:white">Contact</button></a> -->
                    </div>
                </div>
            </div>

        <?php } ?>




    </div>

    <div class="container" style="user-select: none;">
        <h2>How to get in touch with call girls in <?= ucwords($city) ?>?</h2>
        <p>
            Stop wasting your time in finding the best partner to satisfy your sexual cravings. Here at Ctchicks, you can easily find the best escorts and call girls in <?= ucwords($city) ?>, without any hassle. Visit our online platform and find the best sex workers in <?= ucwords($city) ?>. On our website <a href="<?= get_url() ?>">Ctchicks.com</a>, you can find hot call girls in <?= ucwords($city) ?> to fulfill any fantasy or desire that you want to fulfill. You can imagine yourself in sex positions like anal sex, threesome, and erotic massage as our platform provides the best interface between you and your dream babe.
        </p>
        <p>
            Our platform is one of the emerging platforms where <a href="<?= get_url().$cat.'/'.$_GET['city'].'/' ?>"><?= ucwords($city) ?> call girls</a> post classified adult ads. We offer a wide range of escorts as per your preferences like shemale, lesbians, gays, MILFs, models, etc. On our website, you can easily find women from all over India or the world such as Thai, African and the most sought-after white Russian escorts. We also have a good number of profiles of Desi girls and Bhabhies in <?= ucwords($city) ?>. If you wish to have sex with a horny person in your bed without wasting any time, Check out our website for adult ads posted by <?= ucwords($city) ?> call girls who want to have some fun tonight too. May you find the woman of your dreams who can provide you with memorable erotic moments.
        </p>
        <h2>Hire an Independent Call girl in <?= ucwords($city) ?> to fulfill your Urge.</h2>
        <p>
            It is extraordinary to find unmatched entertainment with <a href="<?= get_url() .$cat.'/'.$_GET['city'].'/' ?>">independent models from <?= ucwords($city) ?></a>. These girls are polite and belong to the elite society of <?= ucwords($city) ?>. You can easily find advertisements for independent call girls in <?= ucwords($city) ?> on our platform. You can easily contact them and have the sexiest night. They are open-minded and independent in every way, They are perfect as they provide personalized companionship for your fantasies. You can easily connect with them with their real photo and personal number given on their profile on our website. It is very easy to book a passionate date with high-profile call girls in <?= ucwords($city) ?>, just visit as many profiles as you like and view real photos of passionate girls to choose one, call her as per your schedule and enjoy your night.</p>
        <p>
            These independent <a href="https://en.wikipedia.org/wiki/Prostitution" target="_blank" rel="nofollow">prostitutes</a> could be affordable or a little expensive, depending on the time, service and your requirements. These independent models are very health conscious so they maintain their bodies very well. These escorts also undergo regular medical checkups to ensure that they are free from any STDs. Their bodies are slim and graceful and they can spend anywhere from an hour to the whole night with you. These nymphs are very skilled and are known to surprise men with their bodies. After getting a glare from them, you will just want to fuck them on your bed. You can easily find an independent call girl for in-call and out-call services at any time of the day on our website <a href="<?= get_url() ?>">Ctchicks</a>.
        </p>
        <h3> Feedback and Review from Customers for best Call Girls near <?= ucwords($city) ?></h3>
        <p>
            We believe in authentic and genuine service so that our clients have the best and most genuine experience of the most intimate moments with the best call girls near <?= ucwords($city) ?>. That's why we created a completely transparent and trustworthy review system. We have collected data from all the escorts who want to satisfy your sexual appetite. We have collected feedback and reviews from our customers regarding escort services with the help of an online review system.</p>
        <p>
            Our experts have properly collected and divided the reviews to get the best model for your erotic fun. We have categorized all the data and created a list of call girls in <?= ucwords($city) ?> from our customers experience and feedback, dividing them according to their service and rates, so that you can easily find the best <a href="<?= get_url() . $cat.'/'.$_GET['city'].'/' ?>">female administration in <?= ucwords($city) ?></a> under your budget. You can easily save time by visiting Ctchicks PRO escort profiles as these call girls are providing the best erotic service on a budget.
        </p>
        <p>
            If you are confused about choosing from our huge range of call girls in <?= ucwords($city) ?> ads, you can easily contact our female executive through call and share your requirements. Our executives will understand your needs and send you pictures of eager call girls on WhatsApp to satisfy your sexual desire. Just look at the pictures of sexy and glamorous girls and select one and get the attractive beauty at your place in real-time.
        </p>
        <h2>What type of sexual service you can get in <?= ucwords($city) ?></h2>
        <p>
            Since escorts have perfect physical shape you can fulfill any fantasy with them. But it is important to note that all party and event partners in <?= ucwords($city) ?> provide special services like oral, anal, BDSM, 69 etc. for your entertainment. Different prostitutes specialize in different types of services that can cheer up your mood. To get the perfect body for you, just properly read the profiles posted by sex workers in <?= ucwords($city) ?> on Ctchicks.
        </p>

        <h3>How much do <?= ucwords($city) ?> call girls cost? </h3>
        <p>
            When hiring a Hooker in <?= ucwords($city) ?> for your deepest and darkest secrets, the cost of hiring an escort depends on the service and the period for which you want the escort. When you want a call girl for an hour there are more affordable options than hiring her for the whole night. They will charge less if you want to spend private time in your home or hotel or charge more if you want to go out to events or parties. To get the best female <a href="<?= get_url() . $cat.'/'.$_GET['city'].'/' ?>">call girls in <?= ucwords($city) ?></a>, it is important to discuss the services and specify what you want and need before booking your dream girl in <?= ucwords($city) ?>.
        </p>

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

    </div>

    <?php include './footer2.php' ?>

</body>

</html>