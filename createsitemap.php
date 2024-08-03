<?php
// Connect to your MySQL database
header("Content-type: text/xml");
date_default_timezone_set('Asia/Kolkata');
include './connection.php';


// Check if the connection was successful
if (!$con) {
    echo "Failed to connect to MySQL: ";
    exit();
}

// Retrieve the list of pages from the database

$type = array(
    'call-girls'
);

$pagess = array(
    'city',
    'area'
);
$xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;
$url = htmlspecialchars('https://ctchicks.net');
$xml .= "\t<url>\n";
$xml .= "\t\t<loc>$url</loc>\n";
$xml .= "\t\t<lastmod>"."2024-03-01T13:23:31+05:30"."</lastmod>\n";
$xml .= "\t\t<changefreq>weekly</changefreq>\n";
$xml .= "\t\t<priority>1.00</priority>\n";
$xml .= "\t</url>\n";

foreach($type as $t){
    foreach($pagess as $page){
    
        $query = "SELECT * FROM  $page";
    
        $result =  mysqli_query($con,$query);
        // Create the sitemap XML
        if(mysqli_num_rows($result)>0){
            while ($row = mysqli_fetch_assoc($result)) {
                if($page == 'city'){
                    $url = htmlspecialchars('https://ctchicks.net/'.$t.'/'.strtolower($row['city_name']).'/');
                    $xml .= "\t<url>\n";
                    $xml .= "\t\t<loc>$url</loc>\n";
                    $xml .= "\t\t<lastmod>2024-03-01T13:23:31+05:30</lastmod>\n";
                    $xml .= "\t\t<changefreq>weekly</changefreq>\n";
                    $xml .= "\t\t<priority>0.9</priority>\n";
                    $xml .= "\t</url>\n";
                }elseif($page == 'area'){
                    $url = htmlspecialchars('https://ctchicks.net/'.$t.'/'.strtolower($row['area_city_name']).'/'.strtolower($row['area_name']).'/');
                    $xml .= "\t<url>\n";
                    $xml .= "\t\t<loc>$url</loc>\n";
                    $xml .= "\t\t<lastmod>2024-03-01T06:13:31+05:30</lastmod>\n";
                    $xml .= "\t\t<changefreq>weekly</changefreq>\n";
                    $xml .= "\t\t<priority>0.8</priority>\n";
                    $xml .= "\t</url>\n";
                }
            }
        }else{echo 'Not Found';}
    
       
    }
}

$query = "SELECT * FROM  profiles";
    
$result =  mysqli_query($con,$query);
// Create the sitemap XML

// if(mysqli_num_rows($result)>0){
//     while ($row = mysqli_fetch_assoc($result)) {
//         $url = htmlspecialchars('https://ctchicks.com/'.$row['callgirl_escort'].'/'.strtolower($row['cities']).'/'.strtolower($row['areas']).'/'.$row['identity_cat'].'/');
//         $xml .= "\t<url>\n";
//         $xml .= "\t\t<loc>$url</loc>\n";
//         $xml .= "\t\t<lastmod>2024-03-01T06:13:31+05:30</lastmod>\n";
//         $xml .= "\t\t<changefreq>weekly</changefreq>\n";
//         $xml .= "\t\t<priority>0.7</priority>\n";
//         $xml .= "\t</url>\n";
//     }}



$xml .= '</urlset>';

// Set the file path for the sitemap XML
$sitemapPath = './sitemap.xml';

// Write the XML content to the sitemap file
file_put_contents($sitemapPath, $xml);
// Close the database connection
$con->close();

// Output a success message
echo "Sitemap generated successfully!";
?>
