<?php include './inc.php' ?>
<?php
$uri = explode('/', $_SERVER['REQUEST_URI']);

$cat = $uri[2];
$city = '';
$area = '';

$c = explode('-',$_GET['city']);
$a = explode('-',$_GET['area']);
foreach($c as $i=>$ct){
    if($i == count($c)){
        $city .= strtolower(trim($ct));
    }else{
        $city .= strtolower(trim($ct)).' ';
    }
}
foreach($a as $j=>$ar){
    if($j == count($a)){
        $area .= strtolower(trim($ar));
    }else{
        $area .= strtolower(trim($ar)).' ';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    </div>

    <div class="container">

    </div>

    <?php include './footer2.php' ?>

</body>

</html>