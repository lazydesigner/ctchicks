<?php include './inc.php' ?>
<?php
$uri = explode('/', $_SERVER['REQUEST_URI']);

$cat = $uri[1];
$city = '';
$area = '';
$id = $_GET['id'];

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


$profile_query = "SELECT * FROM profiles WHERE identity_cat = '$id' AND cities = '{$_GET['city']}' AND areas = '{$_GET['area']}'";

$result = mysqli_query($con, $profile_query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
} else {
    header("Location: https://ctchicks.com/404");
}






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $noindex ?>
    <title><?= $row['page_title'] ?></title>
    <meta name="description" content="<?= $row['meta_description'] ?>" />
    <link rel="canonical" href="https://ctchicks.com/<?= $cat . '/' . $_GET['city'] . '/' . $_GET['area'] . '/' . $id . '/' ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $row['page_title'] ?>" />
    <meta property="og:description" content="<?= $row['meta_description'] ?>" />
    <meta property="og:url" content="https://ctchicks.com/<?= $cat . '/' . $_GET['city'] . '/' . $_GET['area'] . '/' . $id . '/' ?>" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?= $row['page_title'] ?>" />
    <meta name="twitter:description" content="<?= $row['meta_description'] ?>" />
    <?= $page_css ?>

    <style>
        .just-two-line {
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            font-weight: 500;
        }

        .profile-section {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
            gap: 2.5%;
        }

        .profile-section-col {
            flex: 1;
            border-top: 3px solid var(--primary);
            background-color: var(--secondaryC);
            height: auto;
        }

        .about-profile-section,
        .profile-section-information {
            padding: 1%;
            height: auto;
            display: inline-block;
        }

        .about-profile-section h2 {
            font-size: 1.3rem;
            font-weight: 600;
        }

        .about-profile-section button {
            width: 200px;
            height: 40px;
            border: 0;
            border-radius: 5px;
            font-weight: 600;
            font-size: 1.1rem;
            background-color: var(--primary);
            color: white;
        }

        .profile-image-grid {
            width: 100%;
            margin-top: 4%;
            height: auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            grid-template-rows: auto;
            /* grid-template-columns: 220px 220px; */
        }

        .profile-image-grid-col {
            padding: 1%;
        }

        .profile-image-grid-col img {
            object-fit: cover;
            object-position: top;
        }

        /* Switching Tab */
        /* Style the tab */
        .tab {
            overflow: hidden;
            border-bottom: 1px solid var(--primary);
            /* background-color: #f1f1f1; */
        }

        /* Style the buttons that are used to open the tab content */
        .tab button {
            background-color: var(--secondary);
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            margin: 0 .5%;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            color: white;
        }

        .tab button:first-child {
            margin: 0 .5% 0 0;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: var(--primary);
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: var(--primary);
            ;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            /* border: 1px solid #ccc; */
            border-top: none;
        }

        #General table tr td {
            border-top: 1px solid var(--primary);
        }

        #Contact button {
            width: 150px;
            height: 40px;
            border: 0;
            background-color: var(--primary);
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }

        /* Switching Tab */
        .sub-profile {
            width: 190px;
            height: 300px;
            background-color: var(--primary);
            position: relative;
        }

        .sub-profile-image {
            width: 100%;
            height: 150px;
            background-color: lightgrey;
        }

        .sub-profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top;
        }

        .sub-profile-detail {
            padding: .1% 4%;
            color: white;
        }

        .sub-profile-information {
            width: 100%;
            height: 40px;
            display: flex;
            justify-content: center;
            position: absolute;
            bottom: 3%;
            gap: 5%;
        }

        .sub-profile-information span {
            width: auto;
            line-height: 40px;
            height: auto;
            padding: 1% 4%;
            background-color: white;
            color: var(--primary);
            text-align: center;
        }

        .image-preview {
            width: 100%;
            height: 100%;
            position: fixed;
            inset: 0;
            background-color: rgba(0, 0, 0, .7);
            z-index: 99;
            display: none;
            transition: .5s;
            place-items: center;

        }

        .image-preview-box {
            overflow: hidden;
            box-shadow: 0 0 20px #000;
            border: 1px solid white;
        }

        @media screen and (max-width:1000px) {
            .profile-section-col {
                flex: 100%;
            }

            .profile-section {
                flex-wrap: wrap;
            }
        }

        @media screen and (max-width:380px) {
            .sub-profile{
                width: 155px;
                margin: auto;
                
            }
            .container{width: 100%;}
        }
    </style>
</head>

<body onload="checkCookie()">

    <?php include './navbar.php' ?>

    <div class="container" style="border:0;padding:0;background:transparent">

        <!--  -->
        <div class="profile-section">
            <div class="profile-section-col about-profile-section">
                <h2>About <span style="text-transform:capitalize;"><?= $row['profile_name'] ?></span></h2>
                <p style="user-select: none;"><?= $row['content'] ?></p>
                <p><i class="ri-radio-button-line"></i><span style="text-transform:capitalize;"><?= $row['cities'] ?></span>, India</p>
                <p>Contact <?= $row['profile_name'] ?> to given number for more information. </p>
                <button id="change-to-number">CONTACT</button>

                <div class="profile-image-grid">
                    <?php
                    if (!empty($row['image_']) && $row['image_'] != null) {

                        $a = json_decode($row['image_'], true);
                        $alt = json_decode($row['image_alt_'], true);
                        for ($j = 0; $j < count($a); $j++) {
                    ?>
                            <div class="profile-image-grid-col"><img src="https://cdn.ctchicks.com/profiles/<?= $a[$j] ?>" alt="<?= $alt[$j] ?>" width="100%" height="100%"></div>
                    <?php  }
                    } ?>
                </div>
            </div>
            <div class="profile-section-col profile-section-information">
                <p>Information of <span style="text-transform:capitalize;"><?= $row['profile_name'] ?></span></p>
                <!-- Tab links -->
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'General')" id="defaultOpen">General</button>
                    <button class="tablinks" onclick="openCity(event, 'Services')">Services</button>
                    <!-- <button class="tablinks" onclick="openCity(event, 'Contact')">Contact</button> -->
                </div>

                <!-- Tab content -->
                <div id="General" class="tabcontent">
                    <table style="width: 100%; border-collapse: collapse;margin-top:2%; user-select: none;">
                        <tr>
                            <td> Name:</td>
                            <td><span style="text-transform:capitalize;"><?= $row['profile_name'] ?></span></td>
                        </tr>
                        <tr>
                            <td> Gender:</td>
                            <td>Female</td>
                        </tr>
                        <tr>
                            <td> Age:</td>
                            <td><?= $row['profile_age'] ?></td>
                        </tr>
                        <tr>
                            <td>Height:</td>
                            <td><?= $row['profile_height'] ?>ft</td>
                        </tr>
                        <tr>
                            <td> Location:</td>
                            <td><?= ucwords($area) . ', ' . ucwords($city) . ', India' ?></td>
                        </tr>
                        <tr>
                            <td> Language:</td>
                            <td><?= $row['profile_language'] ?></td>
                        </tr>
                        <tr>
                            <td> Nationality:</td>
                            <td><?= $row['profile_nationality'] ?></td>
                        </tr>
                        <tr>
                            <td> Profile Type:</td>
                            <td style="text-transform:capitalize;">
                                <?php
                                $cat_2 = json_decode($row['cat_'], true);
                                $cat = '';
                                foreach ($cat_2 as $i1 => $cats) {
                                    if ($i1 == (count($cat_2) - 1)) {
                                        $cat .= $cats;
                                    } else {
                                        $cat .= $cats . ', ';
                                    }
                                }
                                echo ucwords($cat);

                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td> Bust-Waist-Hip:</td>
                            <td>

                                <?php
                                $body = json_decode($row['profile_body_shape'], true);
                                $fig = '';
                                foreach ($body as $i1 => $shape) {
                                    if ($i1 == (count($body) - 1)) {
                                        $fig .= $shape;
                                    } else {
                                        $fig .= $shape . '-';
                                    }
                                }
                                echo $fig;

                                ?></td>
                        </tr>
                    </table>
                </div>

                <div id="Services" class="tabcontent">
                    <table style="width: 100%; border-collapse: collapse;margin-top:2%">
                        <tr>
                            <td> Blowjob</td>
                            <td>Shower Together</td>
                        </tr>
                        <tr>
                            <td> Handjob</td>
                            <td>Cum On Body</td>
                        </tr>
                        <tr>
                            <td> Massage</td>
                            <td>Couple Threesome</td>
                        </tr>
                        <tr>
                            <td> Oral Sex</td>
                            <td>Ball Licking</td>
                        </tr>
                        <tr>
                            <td> 69</td>
                            <td>GFE</td>
                        </tr>
                        <tr>
                            <td> Cum On Face</td>
                            <td>Kissing</td>
                        </tr>
                        <tr>
                            <td>Titty Fuck</td>
                            <td>In Call</td>
                        </tr>
                        <tr>
                            <td>Anal</td>
                            <td>Out Call</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--  -->

    <div class="container" style="border:0;padding:0;background:transparent">
        <div style="padding: 2% 0;">
            <h2>Profiles from same Place</h2>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <!-- LOOP -->

                    <?php
                    $all_profile_query = "SELECT * FROM profiles WHERE cities = '{$_GET['city']}'";

                    $all_result = mysqli_query($con, $all_profile_query);

                    if (mysqli_num_rows($all_result) > 0) {

                        while ($all_row = mysqli_fetch_assoc($all_result)) {

                            if (!empty($all_row['image_']) && $all_row['image_'] != null) {

                                $all_img = json_decode($all_row['image_'], true);
                                $all_img_alt = json_decode($row['image_alt_'], true);
                            }

                            $create_url = 'https://ctchicks.com/' . $all_row['callgirl_escort'] . '/' . $all_row['cities'] . '/';
                            if (strtolower($all_row['areas']) == 'all') {
                                $create_url .= $all_row['identity_cat'] . '/';
                            } else {
                                $create_url .= $all_row['areas'] . '/' . $all_row['identity_cat'] . '/';
                            }

                    ?>

                            <div class="swiper-slide">
                                <div class="sub-profile">
                                    <a href="<?= $create_url ?>">
                                        <div class="sub-profile-image">
                                            <?php if (isset($all_img)) { ?>
                                                <img src="<?= $cdn_url ?>profiles/<?= $all_img[0] ?>" alt="<?= $all_img_alt[0] ?>" width="100%" loading="lazy" height="100%" />
                                            <?php } ?>
                                        </div>
                                    </a>
                                    <div class="sub-profile-detail">
                                        <a href="<?= $create_url ?>" style="color:white">
                                            <p class="just-two-line"><?= $all_row['page_h1'] ?></p>
                                        </a>
                                    </div>
                                    <div class="sub-profile-information">
                                        <span><?= $all_row['cities'] ?></span>
                                        <span><?= $all_row['profile_age'] ?> Years</span>
                                    </div>
                                </div>
                            </div>
                    <?php  }
                    } ?>
                    <!-- Loop -->

                </div>
                <div class="swiper-pagination" style="display: none;"></div>
            </div>
        </div>
    </div>

    <div id="image-preview" class="image-preview">
        <div class="image-preview-box">
            <img src="" alt="Call Girls Available 24X7 At Your Place" id="image-preview-box" width="100%" height="100%">
        </div>
    </div>
    <div id="areasOfCity" style="display: none;"></div>

    <?php include './footer2.php' ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 5,
            loop: true,
            spaceBetween: 60,
            freeMode: true,
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                // when window width is >= 480px
                420: {
                    slidesPerView: 2
                },
                // when window width is >= 640px
                600: {
                    slidesPerView: 3
                },
                780: {
                    slidesPerView: 5,
                    spaceBetween: 30,
                }
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 2000,
            },
            waitForTransition: true
        });
    </script>
    <script>
        document.getElementById('change-to-number').addEventListener('click', (e) => {
            document.getElementById('change-to-number').innerText = "+91 <?php if(!empty($row['phone'])){echo $row['phone']; }else{echo '0000000000';} ?>"
        })

        function openCity(evt, tabName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        document.getElementById("defaultOpen").click();

        let image_preview = document.querySelectorAll('.profile-image-grid-col');

        for (i = 0; i < image_preview.length; i++) {
            image_preview[i].addEventListener('click', (e) => {
                image_url = e.target.currentSrc;
                document.getElementById('image-preview').style.display = 'grid'
                document.getElementById('image-preview-box').src = image_url;
            })
        }

        document.getElementById('image-preview').addEventListener('click', () => {
            document.getElementById('image-preview').style.display = 'none'
            document.getElementById('image-preview-box').src = '';
        })
    </script>
</body>

</html>