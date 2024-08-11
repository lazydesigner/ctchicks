<?php
include './inc.php';

$city = $_GET['city'];

$a = explode('-', $_GET['locality']);

$gender = $_GET['gender'];

$b = explode('-', $_GET['category']);
$cat = 'call-girls'; 

$age = explode('-', $_GET['age']);

$area = '';

if (isset($a[1])) {
    if (isset($a[2])) {
        $area = $a[0] . ' ' . $a[1] . ' ' . $a[2];
    } else {
        $area = $a[0] . ' ' . $a[1];
    }
} else {
    $area = $a[0];
}

if(empty($area)){
    $area = $city;
}

if (isset($b[1])) {
    $cat = $b[0] . ' ' . $b[1];
} else {
    $cat = $b[0];
}

$sql = "SELECT * FROM profiles WHERE `callgirl_escort` = '{$_GET['category']}' ";
$count = "SELECT COUNT(*) as a FROM profiles WHERE `callgirl_escort` = '{$_GET['category']}' ";

if (!empty($city)) {
    $sql .= "and `cities` = '$city' ";
    $count .= "and `cities` = '$city' ";
    $city_url = "https://ctchicks.net/".$_GET['category'].'/'.$_GET['city'].'/';
}
if (!empty($_GET['locality'])) {
    $sql .= "and `areas` = '{$_GET['locality']}' ";
    $count .= "and `areas` = '{$_GET['locality']}' ";
    $area_url = "https://ctchicks.net/".$_GET['category'].'/'.$_GET['city'].'/'.$_GET['locality'].'/';
}
// if(!empty($gender)){

// }
if (!empty($_GET['age'])) {
    if (isset($age[1])) {
        $sql .= " and `profile_age` BETWEEN $age[0] AND $age[1]  ";
        $count .= " and `profile_age` BETWEEN $age[0] AND $age[1]  ";
    } else {
        $sql .= " and `profile_age` > $age[0]  ";
        $count .= " and `profile_age` > $age[0]  ";
    }
}

$sql .= "LIMIT 0, 10";

$res = mysqli_query($con, $sql);
$count_res = mysqli_query($con, $count);
$count_result = mysqli_fetch_assoc($count_res);

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
}
$fullURL = "http" . (isset($_SERVER['HTTPS']) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.6.0/remixicon.min.css" integrity="sha512-pI8MMQ9fC050RkbUOr8cJ75T5bYJpT1PAiML/7QZM6Fr74Ef6csO2/Cl92q+Qpxidm7WonXr6f+DbyxNHPGH8g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" integrity="sha512-rd0qOHVMOcez6pLWPVFIv7EfSdGKLt+eafXh4RO/12Fgr41hDQxfGvoi1Vy55QIVcQEujUE1LQrATCLl2Fs+ag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?= $noindex ?>
    <title>Ctchicks - Search your Escort</title>
    <link rel="canonical" href="https://ctchicks.net/search/" />
    <meta name="description" content="Being one of the top <?= $city ?> call girls directory we provide fast delivery in 20 mins. All our call girls in <?= $city ?> are available 24/7 in Cash on delivery." />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Call Girls in <?= $city ?>: Free Delivery 24x7 at Your Doorstep" />
    <meta property="og:description" content="Being one of the top <?= $city ?> call girls directory we provide fast delivery in 20 mins. All our call girls in <?= $city ?> are available 24/7 in Cash on delivery." />
    <meta property="og:url" content="<?= $fullURL ?>/" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Call Girls in <?= $city ?>: Free Delivery 24x7 at Your Doorstep" />
    <meta name="twitter:description" content="Being one of the top <?= $city ?> call girls directory we provide fast delivery in 20 mins. All our call girls in <?= $city ?> are available 24/7 in Cash on delivery." />
    <meta name="theme-color" content="#ffffff">
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
    </style>
    <style>
        table {
            width: 100%;
            border-spacing: 0;
            border: 1px solid black;
        }

        table tr:nth-child(odd) {
            background-color: lightgrey;
        }

        table tr td {
            padding: 1%;
        }
    </style>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Ctchicks",
            "url": "https://ctchicks.net/",
            "logo": ""
        }
    </script>
</head>

<body onload="checkCookie()">
    <?php include './navbar.php' ?>
    <div class="container" style="border: 0;background:transparent;padding:0;margin:0">
    <p><strong><?=$count_result['a']  ?> Results for <?=$cat ?> <?php if(!empty($_GET['city'])){echo 'in '.$_GET['city'] ; } ?></strong></p>
    </div>
    <div class="container">
        <?php if (isset($data)) { ?>
            <?php while ($row = mysqli_fetch_assoc($res)) {
                if (!empty($row['image_']) && $row['image_'] != null) {
                    $image_count = json_decode($row['image_'], true);
                }
                $create_url = 'https://ctchicks.net/' . $row['callgirl_escort'] . '/' . $row['cities'] . '/';
                if (strtolower($row['areas']) == 'all') {
                    $create_url .= $row['identity_cat'] . '/';
                } else {
                    $create_url .= $row['areas'] . '/' . $row['identity_cat'] . '/';
                }


            ?>

                <div class="long-profile">
                    <div class="long-profile-image">
                        <a href="<?= $create_url ?>">
                            <?php if (isset($image_count)) { ?>
                                <img src="<?= $cdn_url ?>profiles/<?= $image_count[0] ?>" alt="Call Girl Image" width="100%" loading="lazy" height="100%" />
                            <?php } ?>
                        </a>
                        <span class="favourite" id="favourite"><?= $heart ?></span>
                        <span class="image-count"><?= $camera ?><?php if (isset($image_count)) {
                                                                    echo count($image_count);
                                                                } ?></span>
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

            <button value=10  class='loadmore' id="loadmore">Load More</button>

            <div class="list-of-profile">
                <h2>FAQ</h2>
                <h3>What things do I need to take care of while booking a call girl in <?= ucwords($area) ?>?</h3>
                <p>You need to look into following things while booking a call girls in <?= ucwords($area) ?>: -</p>
                <ol>
                    <li>Look for any recommendation from your friend or colleague</li>
                    <li>Always choose ctchicks.net services</li>
                    <li>Make sure she is above legal age.</li>
                    <li>You can read a review of that particular escort.</li>
                    <li>Try to deal only in cash payments.</li>
                </ol>
            </div>
        <?php } else {
            echo '<h2 style="font-size:3rem">Not Profile Found</h2>';
        } ?>
    </div>


    </div>
    <?php include './footer2.php' ?>


    <script>
        document.getElementById('loadmore').addEventListener('click',(e)=>{
            let count = e.target.value

            searchsql = "<?=$sql ?>"

            phraseToRemove  = "LIMIT 0, 10"

            var words = searchsql.split(" ");

  // Find the starting index of the three-word phrase
  var startIndex = words.indexOf(phraseToRemove.split(" ")[0]);

  // Remove the three words from the array
  if (startIndex !== -1) {
    words.splice(startIndex, 3); // Remove 3 words starting from startIndex
  }

  // Join the remaining words back into a string
  var updatedParagraph = words.join(" ");
            console.log(updatedParagraph+'LIMIT 10, 20' )


            // let Loadmore = new FormData()
            // Loadmore.append('count', count)
            // fetch('<?=get_url() ?>getmoreresult/',{

            // })

        })
    </script>


</body>

</html>