<?php
header('Content-type: application/json');

$url = 'http://coinmarketcap.northpole.ro/api/doge.json';
$data = json_decode(file_get_contents($url));
$price = $data->{'price'};

return $price;
	
});
?>
