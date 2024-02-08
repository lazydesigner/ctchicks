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
    header("Location: https://ctchicks.com/404");
} else {
    $profile_query = "SELECT * FROM profiles WHERE  cities = '{$_GET['city']}'  AND callgirl_escort = '$cat' ";
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
    <title>The Best Escort Services In India | CtChicks</title>
    <meta name="description" content="If you are looking for a call girl who can give you a satisfying service, CtChicks is one of the top escort platforms that can provide you with many call girls." />
    <link rel="canonical" href="https://ctchicks.com/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="The Best Escort Services In India | CtChicks" />
    <meta property="og:description" content="If you are looking for a call girl who can give you a satisfying service, CtChicks is one of the top escort platforms that can provide you with many call girls." />
    <meta property="og:url" content="https://ctchicks.com/" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="The Best Escort Services In India | CtChicks" />
    <meta name="twitter:description" content="If you are looking for a call girl who can give you a satisfying service, CtChicks is one of the top escort platforms that can provide you with many call girls." />
    <?= $page_css ?>
    <style>
        .just-two-line {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            font-weight: 500;
            /* start showing ellipsis when 3rd line is reached */
            white-space: pre-wrap;
            /* let the text wrap preserving spaces */
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

        /* City CSS */
    </style>
</head>

<body>

    <?php include './navbar.php' ?>

    <div class="container" style="border: 0;padding:0;background:transparent">


        <?php
        while ($row = mysqli_fetch_assoc($profile_query_result)) {

            $image_count = json_decode($row['image_'], true);

            $create_url = 'https://ctchicks.com/' . $row['callgirl_escort'] . '/' . $row['cities'] . '/';
            if (strtolower($row['areas']) == 'all') {
                $create_url .= $row['identity_cat'] . '/';
            } else {
                $create_url .= $row['areas'] . '/' . $row['identity_cat'] . '/';
            }


        ?>

            <div class="long-profile">
                <div class="long-profile-image">
                    <a href="<?= $create_url ?>"><img src="<?= $cdn_url ?>profiles/<?= $image_count[0] ?>" alt="Call Girl Image" width="100%" loading="lazy" height="100%" /></a>
                    <span class="favourite" id="favourite"><?= $heart ?></span>
                    <span class="image-count"><?= $camera ?><?= count($image_count) ?></span>
                </div>
                <div class="long-profile-detail">
                    <a href="<?= $create_url ?>">
                        <h3><?= $row['page_h1'] ?></h3>
                    </a>
                    <div class="just-two-line"><p><?= $row['content'] ?></p></div>
                    <div class="long-btn-action">
                        <a href="https://api.whatsapp.com/send?phone=910000000000&text=Hi%20Kiara,%20I%20want%20a%20service%20in%20Goa%20found%20you%20on%20Ctchicks"><button style="background-color: green;color:white">WhatsApp</button></a>
                        <a href="tel:+910000000000"><button style="background-color:#0075DA;color:white">Contact</button></a>
                    </div>
                </div>
            </div>

        <?php } ?>




    </div>

    <div class="container">
        <h2>How to get in touch with call girls in <?= ucwords($city) ?>?</h2>
        <p>
            Stop wasting your time in finding the best partner to satisfy your sexual cravings. Here at Ctchicks, you can easily find the best escorts and call girls in <?= ucwords($city) ?>, without any hassle. Visit our online platform and find the best sex workers in <?= ucwords($city) ?>. On our website <a href="<?= get_url() ?>">Ctchicks.com</a>, you can find hot call girls in <?= ucwords($city) ?> to fulfill any fantasy or desire that you want to fulfill. You can imagine yourself in sex positions like anal sex, threesome, and erotic massage as our platform provides the best interface between you and your dream babe.
        </p>
        <p>
            Our platform is one of the emerging platforms where <a href="<?= get_url() . $city . '/' ?>"><?= ucwords($city) ?> call girls</a> post classified adult ads. We offer a wide range of escorts as per your preferences like shemale, lesbians, gays, MILFs, models, etc. On our website, you can easily find women from all over India or the world such as Thai, African and the most sought-after white Russian escorts. We also have a good number of profiles of Desi girls and Bhabhies in Banglore. If you wish to have sex with a horny person in your bed without wasting any time, Check out our website for adult ads posted by <?= ucwords($city) ?> call girls who want to have some fun tonight too. May you find the woman of your dreams who can provide you with memorable erotic moments.
        </p>
        <h2>Hire an Independent Call girl in <?= ucwords($city) ?> to fulfill your Urge.</h2>
        <p>
            It is extraordinary to find unmatched entertainment with <a href="<?= get_url() . $city . '/' ?>">independent models from <?= ucwords($city) ?></a>. These girls are polite and belong to the elite society of <?= ucwords($city) ?>. You can easily find advertisements for independent call girls in <?= ucwords($city) ?> on our platform. You can easily contact them and have the sexiest night. They are open-minded and independent in every way, They are perfect as they provide personalized companionship for your fantasies. You can easily connect with them with their real photo and personal number given on their profile on our website. It is very easy to book a passionate date with high-profile call girls in <?= ucwords($city) ?>, just visit as many profiles as you like and view real photos of passionate girls to choose one, call her as per your schedule and enjoy your night.</p>
        <p>
            These independent <a href="https://en.wikipedia.org/wiki/Prostitution" target="_blank" rel="nofollow">prostitutes</a> could be affordable or a little expensive, depending on the time, service and your requirements. These independent models are very health conscious so they maintain their bodies very well. These escorts also undergo regular medical checkups to ensure that they are free from any STDs. Their bodies are slim and graceful and they can spend anywhere from an hour to the whole night with you. These nymphs are very skilled and are known to surprise men with their bodies. After getting a glare from them, you will just want to fuck them on your bed. You can easily find an independent call girl for in-call and out-call services at any time of the day on our website <a href="<?= get_url() ?>">Ctchicks</a>.
        </p>
        <h3> Feedback and Review from Customers for best Call Girls near <?= ucwords($city) ?></h3>
        <p>
            We believe in authentic and genuine service so that our clients have the best and most genuine experience of the most intimate moments with the best call girls near <?= ucwords($city) ?>. That's why we created a completely transparent and trustworthy review system. We have collected data from all the escorts who want to satisfy your sexual appetite. We have collected feedback and reviews from our customers regarding escort services with the help of an online review system.</p>
        <p>
            Our experts have properly collected and divided the reviews to get the best model for your erotic fun. We have categorized all the data and created a list of call girls in <?= ucwords($city) ?> from our customers experience and feedback, dividing them according to their service and rates, so that you can easily find the best <a href="<?= get_url() . $city . '/' ?>">female administration in <?= ucwords($city) ?></a> under your budget. You can easily save time by visiting Ctchicks PRO escort profiles as these call girls are providing the best erotic service on a budget.
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
            When hiring a Hooker in <?= ucwords($city) ?> for your deepest and darkest secrets, the cost of hiring an escort depends on the service and the period for which you want the escort. When you want a call girl for an hour there are more affordable options than hiring her for the whole night. They will charge less if you want to spend private time in your home or hotel or charge more if you want to go out to events or parties. To get the best female <a href="<?= get_url() . $city . '/' ?>">call girls in <?= ucwords($city) ?></a>, it is important to discuss the services and specify what you want and need before booking your dream girl in <?= ucwords($city) ?>.
        </p>

    </div>

    <div class="container last-step">
        <h4>Top Cities Of India</h4>
        <div class="top-cities-of-india">
            <a href="https://ctchicks/<?= $cat ?>/chennai/"><button>Chennai</button></a>
            <a href="https://ctchicks/<?= $cat ?>/ahmedabad/"><button>Ahmedabad</button></a>
            <a href="https://ctchicks/<?= $cat ?>/delhi/"><button>Delhi</button></a>
            <a href="https://ctchicks/<?= $cat ?>/indore/"><button>Indore</button></a>
            <a href="https://ctchicks/<?= $cat ?>/bangalore/"><button>Bangalore</button></a>
            <a href="https://ctchicks/<?= $cat ?>/pune/"><button>Pune</button></a>
            <a href="https://ctchicks/<?= $cat ?>/jaipur/"><button>Jaipur</button></a>
            <a href="https://ctchicks/<?= $cat ?>/gurgaon/"><button>Gurgaon</button></a>
            <a href="https://ctchicks/<?= $cat ?>/hyderabad/"><button>Hyderabad</button></a>
            <a href="https://ctchicks/<?= $cat ?>/kochi/"><button>Kochi</button></a>
        </div>
        <h4>Areas Of <?= $city ?></h4>
        <div class="top-cities-of-india" id="areasOfCity"></div>
        <a href="https://ctchicks/<?= $cat ?>/chennai/"><button>Chennai</button></a>
    </div>

    </div>

    <?php include './footer2.php' ?>

</body>

</html>