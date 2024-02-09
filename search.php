<?php
include './inc.php';

$city = $_GET['city'];

$a = explode('-', $_GET['locality']);

$gender = $_GET['gender'];

$b = explode('-', $_GET['category']);

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
}
if (!empty($_GET['locality'])) {
    $sql .= "and `areas` = '{$_GET['locality']}' ";
    $count .= "and `areas` = '{$_GET['locality']}' ";
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
    <link rel="canonical" href="<?= $fullURL ?>/" />
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
            "name": "Poojamahajan",
            "url": "https://poojamahajan.com",
            "logo": "https://poojamahajan.com/dashboard/assets/images/POOJA.webp.png"
        }
    </script>
</head>

<body>
    <?php include './navbar.php' ?>
    <div class="container">
        <?php if (isset($data)) { ?>

            <div class="list-of-profile">
                <h2>Are you looking for call girls in <?= $area ?> for friendship?</h2>
                <p>On our website, Poojamahajan Escort Portal, you can find multiple ads for <?= $area ?> call girls who offer the best erotic services in this locality. If you're tired of searching for reliable call girls here and there, now search poojamahajan.com with <?= $area ?> name and with just a few clicks, you can see gorgeous call girls near you.</p>
                <p>During their visit to the <?= $city ?>, a charming model escort is with our clients. You can book tempting call girls for your personal needs on any occasion. Our escorts are both elite and polite. A sultry figure call girl without a sense of manners or speech will ruin your mood if you reserve one. So we prefer passionate and curvy-calling girls of our plateform with dressing sense.</p>
                <p>Our escort service in <?= $area ?> chooses all our escorts wisely so they will not spoil your mood. We guarantee that if our <?= $area ?> call girls do not compromise and behave well, we will try to refund the full amount. Contact these models now and get a luxurious girlfriend experience at any private party or celebration. You can easily find online girls with numbers and see their real pictures, which helps save time. Poojamahajan also offers other different types of <?= $area ?> call girls, on the basis of age, color, body type, etc., who offer 24/7 services with no travel charges for nearby hotels or private property bunglows or rooms.</p>
                <p>We do not interfere between the ad publisher and clients. You can negotiate the price and discuss the payment mode. You will easily find high-profile and cheap call girls for short-term or long-term relationships with contact details.</p>
                <h3>Mature escorts and housewife call girls near me in <?= $area ?></h3>
                <p>How would you find a juicy and genuine mature bursty housewives call girls near you in <?= $area ?>? The answer to this statement is Poojamahajan.com, which allows you to navigate thousands of high-profile married escorts or divorced housewives to select the one that suits you best as per your taste. You can book any partner at any time near you in <?= $area ?> of the listed models on our web portal for various sexual or emotional needs. Your reach is not limited to housewife escorts; you can also browse thousands of other profiles of Models call girls, Air hostess call girls, Actress call girls, Facebook call girls, Instagram celebrities, punjabi call girls, and Russian call girls on your single visit to our Poojamahajan.com</p>
            </div>

            <?php while ($row = mysqli_fetch_assoc($res)) {
                if (!empty($row['image_']) && $row['image_'] != null) {
                    $image_count = json_decode($row['image_'], true);
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

            <div class="list-of-profile">
                <h2>FAQ</h2>
                <h3>What things do I need to take care of while booking a call girl in <?= ucwords($area) ?>?</h3>
                <p>You need to look into following things while booking a call girls in <?= ucwords($area) ?>: -</p>
                <ol>
                    <li>Look for any recommendation from your friend or colleague</li>
                    <li>Always choose ctchicks.com services</li>
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


</body>

</html>