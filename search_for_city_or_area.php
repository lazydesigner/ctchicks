<?php
include './inc.php';

if ($_POST['finding'] == 'cityName') {
    $city = strtolower($_POST['name']);
    $output = '';
    $query_city = "SELECT * FROM area2 WHERE area_city_name LIKE '%$city%'";
    $result = mysqli_query($con, $query_city);



    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $city2 = '';
            $c = explode('-', $row['area_city_name']);
            foreach ($c as $i => $ct) {
                if ($i == count($c)) {
                    $city2 .= strtolower(trim($ct));
                } else {
                    $city2 .= strtolower(trim($ct)) . ' ';
                }
            }
            $output .= "<tr><td><a href='" . get_url() . $_POST['cat'] . "/" . $row['area_city_name'] . "/'>" . ucwords($city2) . "</a></td></tr>";
        }
        echo json_encode(['status' => 200, 'city' => $output]);
    } else {
        $output = '<tr><td><small>Not City Found</small></td></tr>';
        echo json_encode(['status' => 500, 'city' => $output]);
    }
} elseif ($_POST['finding'] == 'areaName') {
    $city = strtolower($_POST['name']);
    $_area = '';
    if (!empty($_POST['area'])) {
        $_area = strtolower($_POST['area']);
    }

    $output = '';
    $areaX = '';

    $output = "<option value='" . strtolower('all') . "'><p style='text-transform: capitalize;'>" . ucwords(strtolower('all locations')) . "</p></option>";
    $area_list = "SELECT * FROM area2 WHERE area_city_name = '$city'";
    $res = mysqli_query($con, $area_list);
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        $areas = json_decode($row['area_name'], true);
        foreach ($areas as $area) {
            $a = '';
            foreach (explode('-', $area) as $c) {
                $a .= $c . ' ';
            }

            if ($_area == strtolower($area)) {
                $output .= "<option value='" . strtolower($area) . "' selected><a href='" . get_url() . $_POST['cat'] . "/" . $row['area_city_name'] . "/" . strtolower($area) . "/' >" . ucwords(strtolower($a)) . "</a></option>";
            } else {
                $output .= "<option value='" . strtolower($area) . "'><a href='" . get_url() . $_POST['cat'] . "/" . $row['area_city_name'] . "/" . strtolower($area) . "/'>" . ucwords(strtolower($a)) . "</a></option>";
            }



            $areaX .= "<a href='" . get_url() . $_POST['cat'] . "/" . $row['area_city_name'] . "/" . strtolower($area) . "/'><button>" . ucwords(strtolower($a)) . "</button></a>";
        }
    }
    echo json_encode(['area' => $output, 'arealist' => $areaX, 'status' => 200]);
}
