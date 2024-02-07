<?php include './inc.php' ?>
<?php
$uri = explode('/', $_SERVER['REQUEST_URI']);

$cat = $uri[2];
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


$profile_query = "SELECT * FROM profiles WHERE identity_cat = '$id'";

$result = mysqli_query($con, $profile_query);

if(mysqli_num_rows($result)>0){

    $row = mysqli_fetch_assoc($result);

}else{
    die('No Profile Found');    
}






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$row['page_title'] ?></title>
    <meta name="description" content="<?=$row['meta_description'] ?>" />
    <link rel="canonical" href="https://ctchicks.com/" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?=$row['page_title'] ?>" />
    <meta property="og:description" content="<?=$row['meta_description'] ?>" />
    <meta property="og:url" content="https://ctchicks.com/<?=$cat. '/'. $_GET['cities'].'/'.$_GET['areas']. '/'.$id.'/' ?>" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?=$row['page_title'] ?>" />
    <meta name="twitter:description" content="<?=$row['meta_description'] ?>" />
    <?= $page_css ?>

    <style>
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

        .image-preview{
            width: 100%;
            height: 100%;
            position: fixed;
            inset: 0;
            background-color: rgba(0,0,0,.7);
            z-index: 99;
            display: none;
            transition: .5s;
            place-items: center;

        }
        .image-preview-box{
            overflow: hidden;
            box-shadow: 0 0 20px #000;
            border: 1px solid white;
        }
    </style>
</head>

<body>

    <?php include './navbar.php' ?>

    <div class="container" style="border:0;padding:0;background:transparent">

        <!--  -->
        <div class="profile-section">
            <div class="profile-section-col about-profile-section">
                <h2>About <span style="text-transform:capitalize;"><?=$row['profile_name'] ?></span></h2>
                <p><?=$row['content'] ?></p>
                <p><i class="ri-radio-button-line"></i><span style="text-transform:capitalize;"><?=$row['cities'] ?></span>, India</p>
                <p>Contact <?=$row['profile_name'] ?> to given number for more information. </p>
                <button id="change-to-number">CONTACT</button>

                <div class="profile-image-grid">
                    
                    <?php $a = json_decode($row['image_'], true); $alt = json_decode($row['image_alt_'], true);
                            for ($j = 0; $j < count($a); $j++) { 
                            ?>
                        <div class="profile-image-grid-col"><img src="https://cdn.ctchicks.com/profiles/<?= $a[$j] ?>" alt="<?=$alt[$j] ?>" width="100%" height="100%"></div>
                    <?php  } 
                    ?>
                </div>
            </div>
            <div class="profile-section-col profile-section-information">
                <p>Information of <span style="text-transform:capitalize;"><?=$row['profile_name'] ?></span></p>
                <!-- Tab links -->
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'General')" id="defaultOpen">General</button>
                    <button class="tablinks" onclick="openCity(event, 'Services')">Services</button>
                    <!-- <button class="tablinks" onclick="openCity(event, 'Contact')">Contact</button> -->
                </div>

                <!-- Tab content -->
                <div id="General" class="tabcontent">
                    <table style="width: 100%; border-collapse: collapse;margin-top:2%">
                        <tr>
                            <td> Name:</td>
                            <td><span style="text-transform:capitalize;"><?=$row['profile_name'] ?></span></td>
                        </tr>
                        <tr>
                            <td> Age:</td>
                            <td><?=$row['profile_age'] ?></td>
                        </tr>
                        <tr>
                            <td>Height:</td>
                            <td><?=$row['profile_height'] ?></td>
                        </tr>
                        <tr>
                            <td> Location:</td>
                            <td><?=$area .', '.$city .', India' ?></td>
                        </tr>
                        <tr>
                            <td> Language:</td>
                            <td><?=$row['profile_language'] ?></td>
                        </tr>
                        <tr>
                            <td> Nationality:</td>
                            <td><?=$row['profile_nationality'] ?></td>
                        </tr>
                        <tr>
                            <td> Profile Type:</td>
                            <td style="text-transform:capitalize;"><?=$row['cat_'] ?></td>
                        </tr>
                        <tr>
                            <td> Bust-Waist-Hip:</td>
                            <td><?=$row['profile_body_shape'] ?></td>
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
                    <div class="swiper-slide">
                        <div class="sub-profile">
                            <div class="sub-profile-image">
                                <img src="" width="100%" height="100%" style="object-fit: cover;object-position:top" alt="">
                            </div>
                            <div class="sub-profile-detail">
                                <a href="<?= get_url() ?>" style="color:white">
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </a>
                            </div>
                            <div class="sub-profile-information">
                                <span>Kanpur</span>
                                <span>22 Years</span>
                            </div>
                        </div>
                    </div>
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
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                // when window width is >= 480px
                420: {
                    slidesPerView: 2
                },
                // when window width is >= 640px
                640: {
                    slidesPerView: 3
                },
                780: {
                    slidesPerView: 5,
                    spaceBetween: 60,
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
            document.getElementById('change-to-number').innerText = "+91 8800925952"
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
    </script>
</body>

</html>