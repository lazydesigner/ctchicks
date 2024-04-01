
<?php  

$h1 = '';
if(isset($city)){
    if($cat == 'escorts'){
        $h1 = 'Live your erotic vibes in the confluence of <?= ucwords($city) ?> escorts';
    }else{
        $h1 = 'Elite '.ucwords($city).' Escorts With Genuine Photo And Phone Numbers';
    }
}else{
    $h1 = "Find Elite Call girls In Your City";
}
if(isset($area)){
    $h1 = 'Call girls in '.ucwords($city).' '.ucwords($area).' with WhatsApp number'; 
}

if(isset($profile)){
    $h1 = 'Ready To Meet '.ucwords($city).' '.ucwords($area).' Call Girls With No Advance';
}

if(isset($error_cat)){
    $h1 = '404 - Page Not Found :(';
}

?>

<header>
        <nav>
            <div class="main-ul">
                <div class="brand"><a href="<?= get_url() ?>"><img src="<?=get_url() ?>home/assets/images/logo.webp" width="100%"
        height="100%" alt="ctckicks escort service  logo" loading="lazy"></a>
                </div>
                <ul class="nav-ul">
                    <li><a href="<?= get_url() ?>">Home</a></li>
                    <li><a href="<?= get_url() ?>contact-us/">Contact Us</a></li>
                    <li><a href="<?= get_url() ?>login/">Login</a></li>
                    <li><a href="<?= get_url() ?>sign-up/">Sign up</a></li>
                </ul>
            </div>
            <div class="post-btn">
            <!-- <i class="ri-menu-line"></i> -->
            <span class="search-girl" onclick="showSearch()"><i class="ri-search-2-line"></i></span>               
            </div>
        </nav>
    </header>

    <div class="container search-bar">
        <form action="<?=get_url() ?>search/" method="get">
            <div class="form-container">
                <div class="form-box">

                    <?php if($cat == 'call-girls' || $cat == 'call girls'){ ?>
                        <select name="category" id="category">
                        <option value="call-girls" selected>Call Girls</option>
                        <option value="escorts">Escorts</option>
                    </select>
                    <?php }else{ ?>
                        <select name="category" id="category">
                        <option value="call-girls">Call Girls</option>
                        <option value="escorts" selected>Escorts</option>
                    </select>
                    <?php } ?>

                    
                </div>
                <div class="form-box">
                    <input type="text" autocomplete="off" placeholder="Select City" value="<?php if(isset($_GET['city'])){echo ucwords(trim($city));} ?>" name="city" id="city">
                    <div id="all-list-of-cities" class="all-list-of-cities">
                        <table id="table"></table>
                    </div>
                
                </div>
                <div class="form-box">
                    <select name="locality" id="locality">
                        <option value="">All Location</option>
                    </select>
                </div>
                <div class="form-box">
                    <select name="gender" id="gender">
                        <option value="">All Gender</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="form-box">
                    <select name="age" id="age">
                        <option value="">Age Group (Any)</option>
                        <option value="18-22">18 - 22 Years</option>
                        <option value="27-30">27 - 30 Years</option>
                        <option value="35">35+ Years</option>
                    </select>
                </div>
                <div class="form-box">
                    <select name="short" id="short">
                        <option value="">Short By</option>
                        <option value="new-first">New First</option>
                        <option value="old-first">Old First</option>
                        <option value="most-viewed">Most Viewed</option>
                    </select>
                </div>
                <div class="form-box">
                    <button>Submit</button>
                </div>
            </div>
        </form>
    </div>
    <div class="page-detail-and-information">
        <div id="breadcrumbs">
            <ol style="display: flex;align-items:center;gap:.5%;list-style:none;padding:0" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" title="Genuine Call girls &amp; escorts Service: Photos, Phone number | Ctchicks" class="crumb" href="<?= get_url() ?>"><span itemprop="name">Home</span></a>
                    <meta itemprop="position" content="1">
                </li>

                <?php if(isset($city)){ ?>
                    <li class="crumb"><b><i class="ri-arrow-right-s-line"></i></b></li>
                <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" title="Genuine Call girls &amp; escorts Service: Photos, Phone number | Ctchicks" class="crumb" href="<?= get_url().$cat.'/'.$_GET['city'].'/' ?>"><span itemprop="name"><?=ucwords($city) ?></span></a>
                    <meta itemprop="position" content="2">
                </li>
                <?php } ?>
                <?php if(isset($area)){ if(!empty($area)){ ?>
                    <li class="crumb"><b><i class="ri-arrow-right-s-line"></i></b></li>
                <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" title="Genuine Call girls &amp; escorts Service: Photos, Phone number | Ctchicks" class="crumb" href="<?= get_url().$cat.'/'.$_GET['city'].'/'.$_GET['area'].'/' ?>"><span itemprop="name"><?=ucwords($area) ?></span></a>
                    <meta itemprop="position" content="3">
                </li>
                <?php } } ?>
                <?php if(isset($error_cat)){ ?>
                    <li class="crumb"><b><i class="ri-arrow-right-s-line"></i></b></li>
                <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" title="Genuine Call girls &amp; escorts Service: Photos, Phone number | Ctchicks" class="crumb" href="<?= get_url() ?>404/"><span itemprop="name">404</span></a>
                    <meta itemprop="position" content="3">
                </li>
                <?php } ?>
            </ol>
        </div>
        <h1 style="font-size: 1.2rem;font-weight: 500;margin:0"> <?php if(empty($row['page_h1'])){echo $h1 ;}else{echo $row['page_h1'] ;} ?></h1>
    </div>