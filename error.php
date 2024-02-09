<?php include './inc.php' ?>
<?php 

$uri = explode('/', $_SERVER['REQUEST_URI']);

$error_cat =  trim($uri[1]);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
    <link rel="shortcut icon" type="image/x-icon" href="'.$cdn_url.'icon/favicon.png" />
    <title>404 - Page Not Found</title>
    <meta name="description" content="Browse our call girl directory for escorts service, independent Call Girls, and divorce escort girls with photos, WhatsApp and phone numbers. Get erotic service in India." />
    <link rel="canonical" href="https://ctchicks.com/404" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="404 - Page Not Found" />
    <meta property="og:description" content="Browse our call girl directory for escorts service, independent Call Girls, and divorce escort girls with photos, WhatsApp and phone numbers. Get erotic service in India." />
    <meta property="og:url" content="https://ctchicks.com/404" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="404 - Page Not Found" />
    <meta name="twitter:description" content="Browse our call girl directory for escorts service, independent Call Girls, and divorce escort girls with photos, WhatsApp and phone numbers. Get erotic service in India." />
    <?= $page_css ?>


    <style>
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

        @media screen and (max-width:500px) {
            .list-of-cities {
                grid-template-columns: repeat(auto-fit, minmax(50%, 1fr));
            }
        }
        #content{
            width: 100%;
            height: 100%;
            display: grid;
            place-items: center;
            text-align: center;
        }
    </style>
</head>

<body>

    <?php include './navbar.php' ?>

    <div class="container"  id="content">
    <div><h2>404 - Error</h2>
<p>404 - Page not found, page your looking for is no longer exists.</p></div>
    </div>


    <?php include './footer2.php' ?>


</body>

</html>