<?php include './inc.php' ?>

<?php




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?=$noindex ?>
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
    <?=$page_css ?>
</head>

<body>

    <?php include './navbar.php' ?>

    <div class="container">
        <input type="text" name="" id="search-for-cities-in-row" placeholder="Search For Cities...">
    </div>

    <div class="container">
    <strong>Indian Call Girls(<?php $sql = "SELECT COUNT(*) as a FROM `profiles` WHERE `callgirl_escort` = 'call-girls';
";
                                    $res = mysqli_query($con, $sql);
                                    $row = mysqli_fetch_array($res);
                                    echo $row['a'] ?>)</strong>



    </div>
    <div class="container">
    <strong>Indian Escorts(<?php $sql = "SELECT COUNT(*) as a FROM `profiles` WHERE `callgirl_escort` = 'escort';
";
                                    $res = mysqli_query($con, $sql);
                                    $row = mysqli_fetch_array($res);
                                    echo $row['a'] ?>)</strong>



    </div>
    <?php include './footer2.php' ?>

</body>

</html>