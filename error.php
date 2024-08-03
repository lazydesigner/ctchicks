<?php http_response_code(404);  include './inc.php' ?>
<?php 

$uri = explode('/', $_SERVER['REQUEST_URI']);

$error_cat =  trim($uri[1]);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
    <link rel="shortcut icon" type="image/x-icon" href="'.$cdn_url.'icon/favicon.png" />
    <title>404 - Page Not Found</title>
    <meta name="description" content="Browse our call girl directory for escorts service, independent Call Girls, and divorce escort girls with photos, WhatsApp and phone numbers. Get erotic service in India." />
    <link rel="canonical" href="<?=get_url() ?>404" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="404 - Page Not Found" />
    <meta property="og:description" content="Browse our call girl directory for escorts service, independent Call Girls, and divorce escort girls with photos, WhatsApp and phone numbers. Get erotic service in India." />
    <meta property="og:url" content="<?=get_url() ?>404" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="404 - Page Not Found" />
    <meta name="twitter:description" content="Browse our call girl directory for escorts service, independent Call Girls, and divorce escort girls with photos, WhatsApp and phone numbers. Get erotic service in India." />
    <?= $page_css ?>

    <style>
        * {box-sizing: border-box;}

        :root {
            --primary: #0075da;
            /* --primary: #022F52; */
            --secondary: #A3B4C7;
            --secondaryC: rgb(223, 229, 235);
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
        a {list-style: none;text-decoration: none;}
        header {width: 100%;height: 50px;background-color: var(--primary);position: relative;}
        header :is(nav, .main-ul, .nav-ul, a) {height: 100%;text-decoration: none;display: flex;align-items: center;padding: 0;margin: 0;list-style: none;color: white;}
        nav {justify-content: space-between;width: 75%;margin: 0 auto !important;}
        .main-ul {width: 85%;gap: 5%;align-items: center;}
        .nav-ul {width: 50%;}
        .nav-ul li {padding: 0 2%;}
        .brand {font-size: 2.5rem;font-weight: 900;display: flex;align-items: center;}
        .brand img {width: 100px;}
        .ad-post2 {display: block !important;}
        .ad-post-btn,.search-girl {display: none;}
        .container {width: 75%;margin: 1.5% auto;height: auto;padding: .5% 1%;border-top: 5px solid var(--primary);background-color: var(--secondaryC);}
        .container a {font-weight: bold;color: var(--link);}
        form {margin: 1% 2%;}
        .form-container {width: 100%;height: auto;display: grid;grid-template-columns: repeat(4, minmax(24%, 1fr));grid-template-rows: auto;gap: 1%;padding: 2% auto;}
        .form-box {margin: auto 1%;width: 100%;height: 100%;padding: 2%;position: relative;}
        select,input {width: 100%;height: 40px;outline: 0;border-radius: 5px;border: 1px solid lightgrey;padding: 0 2%;}
        .form-box button {width: 120px;height: 40px;border: 5px;border-radius: 5px;font-size: 1rem;cursor: pointer;background-color: var(--primary);color: white;}
        .page-detail-and-information {width: 75%;margin: auto;padding: 1% 0 0 0;}
        .crumb {font-weight: bold;color: var(--secondary);}
        .footer-call-btn,.footer-whatsapp-btn {width: 70px;height: 70px;border-radius: 50%;background-color: var(--primary);position: fixed;bottom: 5%;padding: 0;margin: 0;display: grid;place-items: center;box-shadow: 0 0 6px 3px rgb(115, 115, 115);}
        .footer-call-btn {left: 2.5%;color: white;}
        .footer-whatsapp-btn {right: 2.5%;background-color: green;color: white;}
        footer {width: 100%;height: auto;padding: 2% 0;background-color: var(--secondary);color: rgb(25, 25, 25);}
        .footer-container {width: 75%;margin: auto;}
        .footer-container p {padding: 0;margin: 0;font-size: 1.2rem;font-weight: bold;}
        .footer-container ul {list-style: none;display: flex;flex-wrap: wrap;padding: 0;margin: .5% 0;}
        .footer-container ul li {margin: 0;padding: 0 2%;border-right: 1px solid rgb(28, 28, 28);}
        .footer-container ul li:last-child {border: 0;}
        .slide-to-top {width: 50px;height: 50px;border-radius: 50%;background-color: var(--primary);color: white;display: none;place-items: center;position: fixed;bottom: 5%;right: 2%;cursor: pointer;box-shadow: 0 0 2px 1px white;}
        .slide-to-top2 {display: grid;}
        .confirm-18 {width: 100%;height: 100%;background-color: rgba(0, 0, 0, .5);display: block;position: fixed;top: 0;left: 0;z-index: 5;}
        .confirm-18 p {font-size: 1rem;margin: 0;padding: 0;}
        .confirm-18-body {width: 50%;/* height: 50%; */transform: translate(50%, 10%);background-color: white;padding: 2%;border-radius: 10px;}
        .btn1 {width: 100px;height: 40px;border: 0;font-weight: bold;cursor: pointer;background-color: var(--primary);border-radius: 2px;color: white;}
        .btn2 {width: 100px;height: 40px;border: 1px solid black;font-weight: bold;cursor: pointer;background-color: transparent;border-radius: 2px;color: black;}
        .all-list-of-cities {width: 100%;height: auto;overflow: auto;position: absolute;display: none;left: 0;z-index: 1;background-color: lightgray;}
        table {width: 100%;padding: 2% 10%;}
        table td {padding: 3%;border-bottom: 1px solid black;}
        #search-for-cities-in-row {margin: 1% 0;}
        .just-two-line {overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 2;font-weight: 500;}
        .long-profile {width: 100%;height: 190px;border: 2px solid var(--primary);display: flex;flex-wrap: wrap;margin: 1% 0;border-radius: 10px;padding: 1%;position: relative;}
        .premium-tag {position: absolute;top: 2px;right: 5px;padding: 2.5px 10px;border: 1px solid var(--primary);background-color: var(--primary);color: white;font-size: small;border-radius: 15px;}
        .long-profile-image {width: 160px;height: 100%;border-radius: 50%;/* overflow: hidden; */background-color: rgb(233, 233, 233);position: relative;border: 1.5px solid var(--primary);}
        .long-profile-image img {width: 100%;height: 100%;object-fit: cover;object-position: top;border-radius: 50%;}
        .image-count {width: 30px;color: white;position: absolute;display: flex;align-items: center;border-radius: 2px;bottom: 1%;left: 1%;padding: 1%;            background-color: rgba(0, 0, 0, 0.628);}
        .favourite {width: 30px;color: white;position: absolute;top: 1%;right: 1%;}
        .long-profile-detail {width: calc(100% - 160px);height: 100%;padding: 1%;display: flex;flex-direction: column;justify-content: space-between;}
        .long-profile-detail h3 {font-size: 1.3rem;margin: 0;padding: 0;}
        .long-btn-action {width: 100%;display: flex;justify-content: end;gap: 2%;}
        .long-profile-detail p {padding: 0;margin: 1% 0;}
        .long-btn-action button {/* width: 100px; */height: 40px;border: 0;font-size: 1.05rem;border-radius: 100px;padding: 0 15px;cursor: pointer;}
        .last-step h4 {font-size: 1.4rem;text-align: center;}
        .top-cities-of-india {width: 100%;height: auto;display: flex;flex-wrap: wrap;justify-content: center;gap: 3%;}
        .top-cities-of-india button {width: 100px;height: 40px;border-radius: 3px;background-color: green;border: 0;margin: 5% 1%;cursor: pointer;color: white;}
        .top-cities-of-india a:nth-child(even) button {background-color: #0075da;color: white;}
        @media screen and (max-width: 850px) {}
        @media screen and (max-width: 770px) {
            .page-detail-and-information,.container,nav {width: 90%;}
            .nav-ul {width: 100%;}
        }
        @media screen and (max-width:700px) {
            .confirm-18-body {width: 100%;transform: translate(0%, 0%);background-color: white;padding: 2%;border-radius: 0px;}
        }
        @media screen and (max-width: 600px) {        
            nav {width: 95%;}
            .container {width: 100%;}
            .main-ul {width: 70%;}
            .ad-post2 {display: none !important;}
            .post-btn {width: 30%;display: flex;justify-content: space-evenly;align-items: center;font-size: 1.5rem;cursor: pointer;gap: 10%;}
            .ad-post-btn,.search-girl {display: block;}
            .nav-ul {position: absolute !important;width: 100% !important;top: 50px !important;left: 0;background-color: var(--primary);}
            .nav-ul li {margin: 3% 0;padding: 1% 3%;}
            .search-bar {width: 95%;margin-top: 20px;overflow: hidden;height: 0;transition: .25s;}
            .form-container {grid-template-columns: repeat(2, minmax(50%, 1fr));}
            .search-bar-show {margin-top: 55px;height: 100%;transform: .25s;}
        }
        @media screen and (max-width: 580px) {
            .long-profile {height: auto;justify-content: center;}
            .long-profile-detail h3 {font-size: 1.2rem;margin: 0;padding: 0;}
            .long-profile-image {width: 50%;aspect-ratio: 1/1;}
            .just-two-line {font-size: small;line-height: 20px;-webkit-line-clamp: 4;margin-top: 3px;}
        }
        @media screen and (max-width: 530px) {
            .just-two-line {display: none;}
        }
        @media screen and (max-width: 500px) {
            .form-container {grid-template-columns: repeat(1, minmax(100%, 1fr));}
        }
        @media screen and (max-width: 430px) {
            .long-profile-detail {width: 100%;}
        }

        /*==========================================*/


        /* @media screen and (max-width: 500px) {
.form-container{
    grid-template-columns: repeat(1, minmax(100%, 1fr));
}
    }

@media screen and (max-width: 430px) {
/* .long-profile-image{width: 90px;} 
.long-profile-detail {width: 100%;}
} */

        /* City CSS */
    </style>

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