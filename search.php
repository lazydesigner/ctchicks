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
    <?=$noindex ?>
    <title>Ctchicks - Search your Escort</title>
    <link rel="canonical" href="<?= $fullURL ?>/" />    
    <meta name="description" content="Being one of the top <?=$city ?> call girls directory we provide fast delivery in 20 mins. All our call girls in <?=$city ?> are available 24/7 in Cash on delivery." />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Call Girls in <?=$city ?>: Free Delivery 24x7 at Your Doorstep" />
    <meta property="og:description" content="Being one of the top <?=$city ?> call girls directory we provide fast delivery in 20 mins. All our call girls in <?=$city ?> are available 24/7 in Cash on delivery." />
    <meta property="og:url" content="<?= $fullURL ?>/" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Call Girls in <?=$city ?>: Free Delivery 24x7 at Your Doorstep" />
    <meta name="twitter:description" content="Being one of the top <?=$city ?> call girls directory we provide fast delivery in 20 mins. All our call girls in <?=$city ?> are available 24/7 in Cash on delivery." />
    <meta name="theme-color" content="#ffffff">
    <?= $page_css ?>

    <style>
        .multiline-ellipsis {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            /* start showing ellipsis when 3rd line is reached */
            white-space: pre-wrap;
            /* let the text wrap preserving spaces */
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
                $ax = json_decode($row['profile_images'], true);
            ?>
                <div class="profile-section-box">
                    <div class="profile-section-box-image">
                        <a href="<?= get_url() ?><?= $row['page_url'] ?>"><img src="<?= $ax[0] ?>" width="100%" height="100%" style="object-fit: cover;object-position:top" alt=""></a>
                    </div>
                    <div class="profile-section-box-detail">
                        <h3><a href="<?= get_url() ?><?= $row['page_url'] ?>"><?= $row['page_h1'] ?></a></h3>
                        <div class="multiline-ellipsis" style="margin-bottom: 2%;"><?= $row['content'] ?></div>
                        <div class="profile-section-button-detail">
                            <button><i class="ri-whatsapp-fill"></i> WhatsApp</button>
                            <button><i class="ri-phone-fill"></i> Contact</button>
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