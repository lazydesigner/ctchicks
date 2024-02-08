<?php include './inc.php' ?>
<?php
$uri = explode('/', $_SERVER['REQUEST_URI']);

$cat = trim($uri[1]);
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


$looking_for_city_area = "SELECT * FROM area WHERE area_city_name = '{$_GET['city']}' and area_name = '{$_GET['area']}'";
$looking_for_city_area_result = mysqli_query($con, $looking_for_city_area);
if (!mysqli_num_rows($looking_for_city_area_result)) {
    header("Location: https://ctchicks.com/404");
} else {
    $profile_query = "SELECT * FROM profiles WHERE  cities = '{$_GET['city']}' AND areas = '{$_GET['area']}' AND callgirl_escort = '$cat' ";
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

    </div>


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
            <div class="just-two-line">
                <p><?= $row['content'] ?></p>
            </div>
            <div class="long-btn-action">
                <a href="https://api.whatsapp.com/send?phone=910000000000&text=Hi%20Kiara,%20I%20want%20a%20service%20in%20Goa%20found%20you%20on%20Ctchicks"><button style="background-color: green;color:white">WhatsApp</button></a>
                <a href="tel:+910000000000"><button style="background-color:#0075DA;color:white">Contact</button></a>
            </div>
        </div>
    </div>

<?php } ?>




</div>

    <div class="container">

    </div>

    <?php include './footer2.php' ?>

</body>

</html>