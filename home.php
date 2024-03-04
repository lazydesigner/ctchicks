<?php include './inc.php' ?>

<?php

$city_query = "SELECT * FROM city";
$city_result = mysqli_query($con, $city_query);
$city_result2 = mysqli_query($con, $city_query);

$cat = 'call-girls';

if (!$city_result) {
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $noindex ?>
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

        .city-grid {
            width: 100%;
            height: 100%;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(30%, 1fr));
            grid-template-rows: auto;

        }

        .grid-items {
            width: 90%;
            min-height: 300px;
            box-shadow: 0 0 12px 1px rgba(0, 0, 0, 0.7);
            margin: 6% 4%;
            border-radius: 5%;
            background-color: white;
        }

        .grid-items h3 {
            text-align: center;
            font-size: 1.3rem;
        }

        .grid-items h3 span {
            color: tomato;
            position: relative;
        }

        .item-city-name {
            margin: 15px auto;
            display: flex;
            gap: 10px;
            width: 90%;
        }

        .item-city-name p {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .location-logo {
            width: 20px;
            height: 20px;
            align-self: center;
        }

        .grid-items h3 span::after {
            contain: '';
            width: 20px;
            height: 5px;
            background-color: tomato;
            position: absolute;
            left: 0;
            bottom: 0;
        }

        @media (max-width:800px) {
            .city-grid {
                width: 100%;
                height: 100%;
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(45%, 1fr));
                grid-template-rows: auto;
            }
        }

        @media (max-width:600px) {
            .city-grid {
                width: 100%;
                height: 100%;
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(100%, 1fr));
                grid-template-rows: auto;
            }
        }

        @media screen and (max-width:500px) {
            .list-of-cities {
                grid-template-columns: repeat(auto-fit, minmax(50%, 1fr));
            }
        }
    </style>
</head>

<body onload="checkCookie()">

    <?php include './navbar.php' ?>

    <!-- <div class="container">
        <input type="text" name="" id="search-for-cities-in-row" placeholder="Search For Cities...">
    </div> -->

    <div class="container">
        <strong>Indian Call Girls(<?php $sql = "SELECT COUNT(profile_id) as a FROM `profiles` WHERE `callgirl_escort` = 'call-girls'";
                                    $res = mysqli_query($con, $sql);
                                    $row = mysqli_fetch_array($res);
                                    echo $row['a'] ?>)</strong>

        <div class="city-grid">
            <div class="grid-items">
                <h3>Best Call girl in City <span>"A"</span></h3>
                <a href="https://ctchicks.com/call-girls/agra/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Agra</p>
                        </div>
                    </div>
                </a>
                <a href="https://ctchicks.com/call-girls/ahmedabad/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Ahmedabad</p>
                        </div>
                    </div>
                </a>
                <a href="https://ctchicks.com/call-girls/ajmer/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Ajmer</p>
                        </div>
                    </div>
                </a>
                <a href="https://ctchicks.com/call-girls/allahabad/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Allahabad</p>
                        </div>
                    </div>
                </a>
                <a href="https://ctchicks.com/call-girls/ambala/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Ambala</p>
                        </div>
                    </div>
                </a>
                <a href="https://ctchicks.com/call-girls/amritsar/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>
                                Amritsar</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">
                <h3>Best Call girl in City <span>"B"</span></h3>
                <a href="https://ctchicks.com/call-girls/bangalore/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Bangalore</p>
                        </div>
                    </div>
                </a>
                <a href="https://ctchicks.com/call-girls/bhopal/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Bhopal</p>
                        </div>
                    </div>
                </a>
                <a href="https://ctchicks.com/call-girls/bhubaneswar/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Bhubaneswar</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">

                <h3>Best Call girl in City <span>"C"</span></h3>
                <a href="https://ctchicks.com/call-girls/chennai/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Chennai</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">
                <h3>Best Call girl in City <span>"D"</span></h3>
                <a href="https://ctchicks.com/call-girls/dehradun/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Dehradun</p>
                        </div>
                    </div>
                </a>
                <a href="https://ctchicks.com/call-girls/delhi/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Delhi</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">
                <h3>Best Call girl in City <span>"F"</span></h3>
                <a href="https://ctchicks.com/call-girls/faridabad/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Faridabad</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">
                <h3>Best Call girl in City <span>"G"</span></h3>
                <a href="https://ctchicks.com/call-girls/goa/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Goa</p>
                        </div>
                    </div>
                </a>
                <a href="https://ctchicks.com/call-girls/gurgaon/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Gurgaon</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">
                <h3>Best Call girl in City <span>"L"</span></h3>
                <a href="https://ctchicks.com/call-girls/lucknow/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Lucknow</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>



    </div>
    <div class="container">
        <strong>Indian Escorts(<?php $sql2 = "SELECT COUNT(profile_id) as aa FROM `profiles` WHERE `callgirl_escort` = 'escorts'";
                                $res2 = mysqli_query($con, $sql2);
                                $row2 = mysqli_fetch_array($res2);
                                echo $row2['aa'] ?>)</strong>

<div class="city-grid">
            <div class="grid-items">
                <h3>Best Escorts in City <span>"A"</span></h3>
                <a href="https://ctchicks.com/escorts/ahmedabad/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Ahmedabad</p>
                        </div>
                    </div>
                </a>
                <a href="https://ctchicks.com/escorts/ajmer/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Ajmer</p>
                        </div>
                    </div>
                </a>
                <a href="https://ctchicks.com/escorts/allahabad/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Allahabad</p>
                        </div>
                    </div>
                </a>
                <a href="https://ctchicks.com/escorts/ambala/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Ambala</p>
                        </div>
                    </div>
                </a>
                <a href="https://ctchicks.com/escorts/amritsar/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>
                                Amritsar</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">
                <h3>Best Escorts in City <span>"B"</span></h3>
                <a href="https://ctchicks.com/escorts/bangalore/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Bangalore</p>
                        </div>
                    </div>
                </a>
                <a href="https://ctchicks.com/escorts/bhubaneswar/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Bhubaneswar</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">

                <h3>Best Escorts in City <span>"C"</span></h3>
                <a href="https://ctchicks.com/escorts/chennai/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Chennai</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">
                <h3>Best Escorts in City <span>"D"</span></h3>
                <a href="https://ctchicks.com/escorts/dehradun/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Dehradun</p>
                        </div>
                    </div>
                </a>
                <a href="https://ctchicks.com/escorts/delhi/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Delhi</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="grid-items">
                <h3>Best Escorts in City <span>"F"</span></h3>
                <a href="https://ctchicks.com/escorts/faridabad/">
                    <div class="item-city-name">
                        <div class="location-logo"><img src="<?=get_url() ?>home/assets/loca.png" width="100%" height="100%" alt=""></div>
                        <div class="name_city">
                            <p>Faridabad</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>



    </div>

    <div class="container">
        <p><a href="https://ctchicks.com/">Ctchicks</a> is a destination for the top-rated call girls in India. It is the most recommended Indian escort directory. Thousands of independent call girls post advertisements about their services, interests, photos, etc. Our platform caters to VIP escorts, divorced females, newly married ladies, college call girls, Russian escorts, etc. Our Ctchicks web portal caters to the most genuine and trusted escort service providers or independent call girls with their phone numbers.</p>

        <h1>Girls for friendship or dating near me</h1>

        </p>You can easily find girls near you on <a href="https://ctchicks.com/">Ctchicks.com</a>. You can easily find not only straight girls but also male escorts, shemales, lesbians, and other LGBTQA+ communities. Recently, we have collaborated with the most trusted and famous escort agencies in India and published almost 1200+ new profiles to cater to genuine service. Nowadays, it's quite difficult to find genuine girls for dating as most of the dating apps are fake to earn money on the name of subscriptions. We don’t charge any subscription fees to our visitors. Yes, girls may ask for money, but we are not responsible for any transactions between clients and girls. So please make sure that you contact only verified profiles or numbers on our platform. Otherwise, avoid any advance payment.</p>

        <h2>Why trust only Ctchicks.com for adult entertainment?</h2>

        <p>As this industry gets more vulnerable day by day. As we used to get news regarding frauds by pimps, brokers, or sometimes independent models, They used to take advance money and never provide any service. Girls used to leave a room or place immediately after taking payment, and clients left with disappointment and loss. To tackle such trust issues in major cities like Jaipur, Lucknow, Goa, etc., we introduce safety features on our website.</p>

        <p>Our platform used to put the mobile numbers of our trusted and genuine brokers from any specific city apart from their profiles. Get in touch with a trusted person for your private needs and desires. We don’t have any connection with any illegal businesses, as we are just an advertising platform. But we used to serve our visitors with some genuine links. So we request that our visitors connect with brokers or independent models whose numbers are specifically listed on our website. So we make sure that any cutting or monetary fraud will not happen to you. If you have any payment or fraud-related issues, you can contact us at our email address with payment history proof. We make sure that we get a 100% refund in such cases. But we also suggest that our online visitors avoid any advance payment before any physical meeting. Otherwise, you can contact our verified profiles or numbers with full trust.</p>

        <h3>Seeking Genuine Call girls in your room despite visiting any red light area.</h3>

        <p>We all know that visiting any red light area or brothel may be risky. Despite putting yourself in any kind of danger, You can take erotic genuine service from the Ctchicks classified platform. On the other hand, if any independent model needs to post any classified ad without any hassle to get genuine clients, then Ctchicks will be your first choice. Girls can post ads as per their city with all the details without any fees. We don’t charge a single penny to post an ad. But we recommend using genuine photos and other details. We are here to provide a trustworthy intimate partner in any corner of India and other serving countries. So get ready to get a real bang with naughty models in your city within your budget.</p>
    </div>


    <?php include './footer2.php' ?>

    <script>
        document.getElementById('search-for-cities-in-row').addEventListener('keyup', (e) => {
            text_ = e.target.value.toLowerCase();
            search_para = document.querySelectorAll('.list-of-cities')
            for (i = 0; i < search_para.length; i++) {
                for (j = 0; j < search_para[i].children.length; j++) {
                    if (search_para[i].children[j].children[0].textContent.toLowerCase().includes(text_)) {
                        search_para[i].children[j].style.display = 'block'
                    } else {
                        search_para[i].children[j].style.display = 'none'
                    }
                }

            }
        })
    </script>

</body>

</html>