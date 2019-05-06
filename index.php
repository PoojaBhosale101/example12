<?php
$response = Unirest\Request::get("https://restcountries-v1.p.rapidapi.com/alpha/?codes=IN",
  array(
    "X-RapidAPI-Host" => "restcountries-v1.p.rapidapi.com",
    "X-RapidAPI-Key" => "722e4771a0mshe4f7a8cd62ff53dp1fbb66jsn6a39b939e27a"
  )
);
echo json_encode($response);
?>
