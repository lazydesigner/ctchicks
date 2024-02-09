<?php include './inc.php' ?>

<?php

$city_query = "SELECT * FROM city";
$city_result = mysqli_query($con, $city_query);
$city_result2 = mysqli_query($con, $city_query);
if (!$city_result) {
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
    <link rel="shortcut icon" type="image/x-icon" href="'.$cdn_url.'icon/favicon.png" />
    <title>Independent call girls with their phone numbers</title>
    <meta name="description" content="Browse our call girl directory for escorts service, independent Call Girls, and divorce escort girls with photos, WhatsApp and phone numbers. Get erotic service in India." />
    <link rel="canonical" href="https://ctchicks.com/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Independent call girls with their phone numbers" />
    <meta property="og:description" content="Browse our call girl directory for escorts service, independent Call Girls, and divorce escort girls with photos, WhatsApp and phone numbers. Get erotic service in India." />
    <meta property="og:url" content="https://ctchicks.com/" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Independent call girls with their phone numbers" />
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
            .list-of-cities{
                grid-template-columns: repeat(auto-fit, minmax(50%, 1fr));
            }
        }
    </style>
    <style>
        .contact-form-row {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
            gap: 2%;
        }

        .contact-form-group {
            width: 100%;
            height: auto;
            padding: 1%;
            /* margin: .5% 0; */
        }

        .contact-form-group label {
            font-weight: bold;
        }

        .contact-form-group input {
            width: 100%;
            height: 40px;
            outline: 0;
            padding: 1%;
        }

        .contact-form-group textarea {
            width: 100%;
            padding: 1%;
            outline: 0;
            resize: none;
        }

        .contact-form-group input:focus {
            border: 1px solid dodgerblue
        }

        .contact-form-group textarea:focus {
            border: 1px solid dodgerblue
        }

        .contact-form-group button {
            width: 150px;
            height: 40px;
            background-color: var(--primary);
            color: white;
            border: 0;
            cursor: pointer;
            border-radius: 1px;
        }
    </style>
</head>

<body>

<header>
        <nav>
            <div class="main-ul">
                <div class="brand"><a href="<?= get_url() ?>">CtChicks</a>
                </div>
                <ul class="nav-ul">
                    <li><a href="<?= get_url() ?>">Home</a></li>
                    <li><a href="<?= get_url() ?>">Contact Us</a></li>
                    <li><a href="<?= get_url() ?>">Login</a></li>
                    <li><a href="<?= get_url() ?>">Sign up</a></li>
                </ul>
            </div>
            <div class="post-btn">
            <!-- <i class="ri-menu-line"></i> -->
            <span class="search-girl" onclick="showSearch()"><i class="ri-search-2-line"></i></span>               
            </div>
        </nav>
    </header>
    <div class="page-detail-and-information">
            <div id="breadcrumbs">
                <ol style="display: flex;align-items:center;gap:.5%;list-style:none;padding:0" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" title="Genuine Call girls &amp; escorts Service: Photos, Phone number | dreamgal" class="crumb" href="<?= get_url() ?>"><span itemprop="name">Home</span></a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li><b><i class="ri-arrow-right-s-line"></i></b></li>
                    <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" class="crumb" href="<?= get_url() ?>contact-us" title="Contact Poojamahajan For Any Query"><span itemprop="name">Contact Us</span></a>
                        <meta itemprop="position" content="2">
                    </li>
                </ol>
            </div>
            <h1>Ctchicks - Contact Us</h1>
        </div>
        <div class="container">
            <form action="">
                <div class="contact-form-row">
                    <div class="contact-form-group">
                        <label for="">First Name</label>
                        <input type="text" placeholder="First Name" name="f_name" id="f_name">
                    </div>
                    <div class="contact-form-group">
                        <label for="">Last Name</label>
                        <input type="text" placeholder="Last Name" name="l_name" id="l_name">
                    </div>
                </div>
                <div class="contact-form-row">
                    <div class="contact-form-group">
                        <label for="">Email</label>
                        <input type="email" placeholder="Email" name="email" id="email">
                    </div>
                    <div class="contact-form-group">
                        <label for="">Phone</label>
                        <input type="text" placeholder="Phone" name="phone" id="phone">
                    </div>
                </div>
                <div class="contact-form-group">
                    <label for="">Message</label>
                    <textarea name="message" placeholder="Message" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="contact-form-group">
                    <button>Send</button>
                </div>
            </form>

        </div>

    <?php include './footer2.php' ?>

</body>

</html>