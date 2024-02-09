<?php include './inc.php' ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
    <link rel="shortcut icon" type="image/x-icon" href="'.$cdn_url.'icon/favicon.png" />
    <title>Login - Ctchicks</title>
    <meta name="description" content="Browse our call girl directory for escorts service, independent Call Girls, and divorce escort girls with photos, WhatsApp and phone numbers. Get erotic service in India." />
    <link rel="canonical" href="https://ctchicks.com/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Login - Ctchicks" />
    <meta property="og:description" content="Browse our call girl directory for escorts service, independent Call Girls, and divorce escort girls with photos, WhatsApp and phone numbers. Get erotic service in India." />
    <meta property="og:url" content="https://ctchicks.com/" />
    <meta property="og:site_name" content="Escort" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Login - Ctchicks" />
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
    </style>
    <style>
        .contact-form-row {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: space-between;
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
                    <li><a href="<?= get_url() ?>contact-us/">Contact Us</a></li>
                    <li><a href="<?= get_url() ?>login/">Login</a></li>
                    <li><a href="<?= get_url() ?>sign-up">Sign up</a></li>
                </ul>
            </div>
            <div class="post-btn">
                <!-- <i class="ri-menu-line"></i> -->
                <span class="search-girl" onclick="showSearch()"><i class="ri-search-2-line"></i></span>
            </div>
        </nav>
    </header>
    <div class="page-detail-and-information">
        <h1>Sign Up For Ctchicks</h1>
    </div>
    <div class="container">
        <form action="">
            <div class="contact-form-row">
                <div class="contact-form-group">
                    <label for="">First Name</label>
                    <input type="text" placeholder="First Name" name="f_name" id="f_name">
                </div>
            </div>
            <div class="contact-form-row">
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
            </div>
            <div class="contact-form-row">
                <div class="contact-form-group">
                    <label for="">Password</label>
                    <input type="password" placeholder="Password" name="password1" id="password1">
                </div>
            </div>
            <div class="contact-form-row">
                <div class="contact-form-group">
                    <label for="">Confirm Password</label>
                    <input type="text" placeholder="Password" name="password2" id="password2">
                </div>
            </div>
            <div class="contact-form-group" style="padding:0 1%;display:flex;align-items:center;justify-content:start;">
                <div style="padding:0 1%;display:flex;align-items:center;justify-content:start;background:whitesmoke;">
                    <input type="checkbox" style="width: 20px; " name="ok" id="ok"> I agree to the terms and conditions.
                </div>
            </div>
            <div class="contact-form-group" style="padding: 2% 1% 0 1%;">
                <a href="<?= get_url() ?>login/">already have an account</a>
            </div>
            <div class="contact-form-group" style="padding: 1% 1%;">
                <button onclick="alert('Something Went Wrong! Please Try Later :(')">Signup</button>
            </div>
        </form>

    </div>

    <?php include './footer2.php' ?>

    <script>
        document.getElementById('password2').addEventListener('keyup', (e) => {
            let pass1 = document.getElementById('password1').value
            let pass2 = e.target.value
            if (pass1 == pass2) {
                e.target.style.border = '1px solid green';
            } else {
                e.target.style.border = '1px solid tomato';
            }
            if (pass2 == '' || pass2 == null) {
                e.target.style.border = '0'
            }


        })
    </script>

</body>

</html>