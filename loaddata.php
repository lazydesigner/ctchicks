<?php include './inc.php' ?>
<?php

$profile_query = "
        SELECT * 
        FROM profiles 
        WHERE cities = '{$_GET['city']}' AND callgirl_escort = '$cat' 
        ORDER BY RAND() LIMIT 60 OFFSET 11 ";
        $profile_query_result = mysqli_query($con, $profile_query);
        if (mysqli_num_rows($profile_query_result) < 1) {
        }

?>

<?php
        // $count_pro =  count(mysqli_fetch_assoc($profile_query_result));
        $count_pro = 1;
        $output = '';
        while ($row = mysqli_fetch_assoc($profile_query_result)) {

            if (isset($pre)) {
                $key = '';
                $value = '';
                foreach ($row as $r => $v) {
                    $key .= "$r,";
                    $vv = addslashes($v);
                    $value .= "'{$vv}',";
                }
                $key .= 'till_date';
                $value .= "'{$formattedDateTime}'";
                // $in = "INSERT INTO new_profiles($key) VALUES ($value)";
                // $r = mysqli_query($con, $in);
                if ($r) {
                    echo '';
                }
            }

            if (!empty($row['image_']) && $row['image_'] != null) {
                $image_count = json_decode($row['image_'], true);
                $image_count_alt = json_decode($row['image_alt_'], true);
            }


            $create_url = '<?=get_url() ?>' . $row['callgirl_escort'] . '/' . $row['cities'] . '/';
            if (strtolower($row['areas']) == 'all') {
                $create_url .= $row['identity_cat'] . '/';
            } else {
                $create_url .= $row['areas'] . '/' . $row['identity_cat'] . '/';
            }



        ?>

            <div class="long-profile" style="<?php if ($count_pro % 4 == 0 || $count_pro == 1 || $count_pro == 2) {
                                                    echo 'border: 2px solid pink;background-color:pink';
                                                } ?>">
                <?php

                if ($count_pro % 3 == 0) {
                    echo '<div class="premium-tag">PRO</div>';
                } elseif ($count_pro % 4 == 0) {
                    echo '<div class="premium-tag">PRO MAX</div>';
                } elseif ($count_pro == 1) {
                    echo '<div class="premium-tag">PRO MAX</div>';
                } elseif ($count_pro == 2) {
                    echo '<div class="premium-tag">PRO MAX</div>';
                }
                $count_pro += 1;

                ?>

                <div class="long-profile-image">
                    <a href="<?= $create_url ?>">
                        <?php if (isset($image_count)) { ?>
                            <img src="<?= $cdn_url ?>profiles/<?= $image_count[0] ?>" alt="<?= $image_count_alt[0] ?>" width="100%" loading="lazy" height="100%" />
                        <?php } ?>
                    </a>
                    <!-- <span class="favourite" id="favourite"><?= $heart ?></span> -->
                    <!-- <span class="image-count"><?= $camera ?><?php if (isset($image_count)) {
                                                                        echo count($image_count);
                                                                    } ?></span> -->
                </div>
                <div class="long-profile-detail">
                    <a href="<?= $create_url ?>">
                        <h3 style=" line-height: 18px;"><?= $row['page_h1'] ?></h3>
                    </a>
                    <div class="just-two-line">
                        <p><?= trim($row['content']) ?></p>
                    </div>
                    <div class="long-btn-action">
                        <a href="https://api.whatsapp.com/send?phone=91<?php if (!empty($row['phone'])) {
                                                                            echo $row['phone'];
                                                                        } else {
                                                                            echo "0000000000";
                                                                        } ?>&text=Hi%20Kiara,%20I%20want%20a%20service%20in%20Goa%20found%20you%20on%20Ctchicks"><button style="background-color: green;color:white"><i class="ri-whatsapp-line"></i> <?php if (!empty($row['phone'])) {
                                                                                                                                                                                                                                                                                                                                        echo $row['phone'];
                                                                                                                                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                                                                                                                                        echo '0000000000';
                                                                                                                                                                                                                                                                                                                                    } ?></button></a>
                        <!-- <a href="tel:+910000000000"><button style="background-color:#0075DA;color:white">Contact</button></a> -->
                    </div>
                </div>
            </div>

        <?php } ?>