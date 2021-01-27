<?php
$homepage = file_get_contents('https://explore.berthongpol.com/api/number?search=&operator=&birthday=&total=&price=1000000&sort=number&numbers%5B%5D=0&numbers%5B%5D=&numbers%5B%5D=&numbers%5B%5D=7&numbers%5B%5D=8&numbers%5B%5D=9&numbers%5B%5D=&numbers%5B%5D=&numbers%5B%5D=&numbers%5B%5D=&whitelist=&blacklist=');
//$homepage = "{ 'data' : ".$homepage." } ";
echo $homepage;

