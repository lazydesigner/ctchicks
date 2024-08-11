<?php include './inc.php' ?>
<?php
$uri = explode('/', $_SERVER['REQUEST_URI']);

$cat =  trim($uri[1]);
$city = '';

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
    header("Location: https://ctchicks.net/404");
} else {
    $profile_query = "SELECT * FROM profiles WHERE  cities = '{$_GET['city']}'  AND callgirl_escort = '$cat' ";
    $profile_query_result = mysqli_query($con, $profile_query);
    if (mysqli_num_rows($profile_query_result) < 1) {
        header("Location: https://ctchicks.net/404");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $noindex ?>
    <title>Escorts in <?=$city ?>: Free Delivery 24x7 at Your Doorstep</title>
    <meta name="description" content="Being one of the top <?=$city ?> Escorts directory we provide fast delivery in 20 mins. All our Escorts in <?=$city ?> are available 24/7 in Cash on delivery." />
    <link rel="canonical" href="<?=get_url() ?><?=$cat.'/'.$_GET['city'].'/' ?>" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Escorts in <?=$city ?>: Free Delivery 24x7 at Your Doorstep" />
    <meta property="og:description" content="Being one of the top <?=$city ?> Escorts directory we provide fast delivery in 20 mins. All our Escorts in <?=$city ?> are available 24/7 in Cash on delivery." />
    <meta property="og:url" content="<?=get_url() ?><?=$cat.'/'.$_GET['city'].'/' ?>" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Escorts in <?=$city ?>: Free Delivery 24x7 at Your Doorstep" />
    <meta name="twitter:description" content="Being one of the top <?=$city ?> Escorts directory we provide fast delivery in 20 mins. All our Escorts in <?=$city ?> are available 24/7 in Cash on delivery." />
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
    font-weight: 900;
    color: var(--primary);
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
            border-radius:10px;
            padding: 1%;
            position: relative;
        }
        .premium-tag{
            position: absolute;
            top: 2px;
            right: 5px;
            padding: 2.5px 10px;
            border: 1px solid var(--primary);
            background-color: var(--primary);
            color:white;
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
        
        .top-cities-of-india a:nth-child(even) button{
            background-color: #0075da;
            color: white;
        }
        
@media screen and (max-width: 580px) {
    
    .long-profile {
        height: auto;
        justify-content: center;
    }

        .long-profile-detail h3 {
            font-size: 1rem;
            margin: 0;
            padding: 0;
        }
        .long-profile-image{
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
.form-container{
    grid-template-columns: repeat(1, minmax(100%, 1fr));
}
    }

@media screen and (max-width: 430px) {
/* .long-profile-image{width: 90px;} */
.long-profile-detail {width: 100%;}
}
    </style>
</head>

<body onload="checkCookie()">

<?=$_18 ?>

    <?php include './navbar.php' ?>

    <div class="container">
    <p>Do not impose any limitations as you have to sustain the real charm of your life. Which hot spirit is ready to follow your sensation urge while dwelling in <?= ucwords($city) ?> for a short time?  If you have the sure addiction to make the love sense. Then knocking on the bell of the brother agency is not a bad deal for you. At this destination, you can find the broad coverage of the Independent <a href='<?=get_url() ?><?=$cat.'/'.$_GET['city'].'/' ?>'><?= ucwords($city) ?> escort</a>.  Engaging in the fantasy flavor is not a new act, but their biography attachment describes well how they can provide you the long-lasting service.</p>
    <p>The main mission and vision of our escort agency is not to let you tired more, and to let you relax through doing a heartwarming massage to the concerned person. So, you never thought that taking the escort service was a bad decision for you. After spending some time with the beautiful girls, you can feel happy, and energetic.  So, you do not depress more and select the jovial escort to bring new hope into your life. The in-birth erotic vibes hold the full stamina to do something well in your life.</p>
    </div>

    <div class="container" style="border: 0;padding:0;background:transparent">


        <?php
        $count_pro = 1;
        while ($row = mysqli_fetch_assoc($profile_query_result)) {
            if(!empty($row['image_']) && $row['image_'] != null ){
                $image_count = json_decode($row['image_'], true);
                $image_count_alt = json_decode($row['image_alt_'], true);
            }

            
            $create_url = '<?=get_url() ?>' . $row['callgirl_escort'] . '/' . $row['cities'] . '/';
            if (strtolower($row['areas']) == 'all') {
                $create_url .= $row['identity_cat'] . '/';
            } else {
                $create_url .= $row['areas'] . '/' . $row['identity_cat'] . '/';
            }


        ?>

            <div class="long-profile">
            <?php 
                
                
                if($count_pro % 3 == 0){
                    echo '<div class="premium-tag">PRO</div>';
                }elseif($count_pro % 4 == 0){
                    echo '<div class="premium-tag">PRO MAX</div>';
                }elseif($count_pro == 1){
                    echo '<div class="premium-tag">PRO MAX</div>';
                }elseif($count_pro == 2){
                    echo '<div class="premium-tag">PRO MAX</div>';
                }
                $count_pro += 1;
            
            ?>
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
                        <p><?= trim($row['content']) ?></p>
                    </div>
                    <div class="long-btn-action">
                        <a href="https://api.whatsapp.com/send?phone=910000000000&text=Hi%20Kiara,%20I%20want%20a%20service%20in%20Goa%20found%20you%20on%20Ctchicks"><button style="background-color: green;color:white">WhatsApp</button></a>
                        <!-- <a href="tel:+910000000000"><button style="background-color:#0075DA;color:white">Contact</button></a> -->
                    </div>
                </div>
            </div>

        <?php } ?>




    </div>

    <div class="container">
        
        <p>The alluring style of the escorts in <?= ucwords($city) ?> does not let you be silent. By the way, the adult entertainment passion inspires her to make stunning nights. Do not take the escort hiring process for your amusement only, but also she fulfill their sexual appetite.  Our <?= ucwords($city) ?> escort has a proven record of providing a seamless fetish game.</p>

        <h2>How can you interact with the flawless <?= ucwords($city) ?> escort service? </h2>
        <p>Keeping their day effective is the choice of almost. But, they do not get the right idea of how to do this. One should take a break from normal life as their mind and soul need the utmost peace of mind. So, you do not overlook the importance of the erotic play of the hot and sexy females in their lives.  The inclusion of the endless fun possibility happens with the meritorious escorts to push some weird feelings in the context of pure pleasure.</p>
        <p>If you have a frequent obsession with meeting with the sweet darling, then you can use the modern approach to interact with this girl. Instead of taking the round tour of the common brothel, you can visit the adult and escort directory to book the perfect busty ladies for you. They do the effective romance is your life, and are ready to follow your modern and antique adult instruction.  </p>
        <p>So, you ought to read the reviews and records of the many escort agencies and ensure how these <?= ucwords($city) ?>-based escorts can have the power to surprise your internal wishes. On their directory, you can like the particular photo, and pick up their phone to know about their choice for making the hook up suite or any other intense pose.</p>
        <h2>Is finding the extraordinary <?= ucwords($city) ?> escort not under your control? </h2>
        <p>Nothing in this dynamic world is impossible to achieve.  If you have genuine intentions and take action according to them, then you find the best dating partner. They have a great attitude on how to meet with specific clients and provide them the unforgettable experiences.  They have the unbelievable power to seduce and provide youth with the desired satisfaction. No matter which escort you select, they provide you the deep interaction to provide you the sure affection. </p>
        <p>But, one thing you notice here is the huge difference between your religious partner and temporary partner.  Along with you, they have a better understanding of how to make you engage to represent what things are on the priority base.  If you are serious about making the real charm to rub the genital organ, then our blonde partner never leaves your expectations in the middle. They have a great sense of what their lustful customer looking forward to with their fetish organ.        </p>
        <p>The sexual practice is in them on the serious verge as their pussy becomes wet to fetish the most relatable loving practice.  The moral of the story is that the concerned person intends to find the advanced category of love.</p>
        <h3>Money is no obstacle to hiring an <a href='<?=get_url() ?><?=$cat.'/'.$_GET['city'].'/' ?>'>escort service in <?= ucwords($city) ?></a></h3>
        <p>Do not think finding hot and dirty personality escorts is the tough choice for you. In this glamorous world, taking an escort service becomes quite easy to delight the internal soul of the respective person. Many college girls wish to earn some decent pocket money without rubbing their shoulders.  These hot and energetic girls do not spend more money on making relationships and dating partners.</p>
        <p>Our dating and escort directory enriches with many passionate girls to meet with prosperous men. They do not have the huge money demand as getting the satisfaction beam plays an important role in one’s life. If you intend to take the cheap level service, then you can count on our <a href='https://ctchicks.net'>professional escort service</a>.
        </p>
        <p>They do not make a big difference in their commitment as their listing sites and intend you the blessing touch of the sizzling expression. Thereby, you are requested not to shrink your expectations for making a relationship.</p>
        <h2>Hire an independent escort to go beyond the flirt</h2>
        <p>Staying with an appealing causal soul mate that does not disobey your choice. Having the temporary gripping finds you this concern as if you live in paradise for the utmost pleasure.  Finding the company of independent escort girls gives you a different feeling as your dirty wishes do not need the explanation version of our lovable whores. Our <a href='<?=get_url() ?><?=$cat.'/'.$_GET['city'].'/' ?>'>independent escorts</a> have a sure sense of how to reach as the lustful customer urges you for something.</p>

        <h3>The customer provides feed for the best <?= ucwords($city) ?> escort</h3>
        <p>None of you can find any complaint regarding the seducing style and the sexual dosage. By the way, our escort girls have the full devotion to attend to a particular customer.  They hold a holistic approach to serving their customer and do not raise the senseless step. Likewise, other professionals, these sizzling and stunning girls are honing their practice to provide the best service. Tell your most appropriate time for making the happy moment without any sacrifice.  We provide the precise details of which time is available to seduce and warm your bed without making the nonsense talk. The best way is to boo their service as quickly as possible to grasp their love-making services.</p>
        <h2>Check the comfortless of our escort girls</h2>
        <p>If you do not want to see the dispute in in-call and outcall service, then you would have to seal your deal for completing the orgasm details. They are comfortable doing the cum on face, cum to swallow, blowjobs, and many dirty actions. Now, you do not stay in the sexual intimacy trouble anymore.</p>
            <h3></h3>
    </div>

    <div class="container last-step">
        <h4>Top Cities Of India</h4>
        <div class="top-cities-of-india">
            <a href="<?=get_url() ?><?= $cat ?>/chennai/"><button>Chennai</button></a>
            <a href="<?=get_url() ?><?= $cat ?>/ahmedabad/"><button>Ahmedabad</button></a>
            <a href="<?=get_url() ?><?= $cat ?>/delhi/"><button>Delhi</button></a>
            <a href="<?=get_url() ?><?= $cat ?>/indore/"><button>Indore</button></a>
            <a href="<?=get_url() ?><?= $cat ?>/bangalore/"><button>Bangalore</button></a>
            <a href="<?=get_url() ?><?= $cat ?>/pune/"><button>Pune</button></a>
            <a href="<?=get_url() ?><?= $cat ?>/jaipur/"><button>Jaipur</button></a>
            <a href="<?=get_url() ?><?= $cat ?>/gurgaon/"><button>Gurgaon</button></a>
            <a href="<?=get_url() ?><?= $cat ?>/hyderabad/"><button>Hyderabad</button></a>
            <a href="<?=get_url() ?><?= $cat ?>/kochi/"><button>Kochi</button></a>
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

        $profile_exist = "SELECT * FROM profiles WHERE cities = '$cityX' AND areas = '$area' AND callgirl_escort = 'escorts'";
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

    </div>

    <?php include './footer2.php' ?>

</body>

</html>