<?php 
Header set X-Content-Type-Options: "nosniff"
Header set X-Frame-Options: "DENY"
Header set X-XSS-Protection: "1; mode=block"
Header set Content-Security-Policy "default-src 'self'"



include './routes.php';
include './common.php';
include './connection.php';

?>