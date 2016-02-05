<?php
$url = "https://ressources.data.sncf.com/api/records/1.0/search?dataset=incidents-securite&sort=date";

// le proxy autorise le JS à envoyer des clés supplémentaires à l'API opendata SNCF
foreach ($_GET as $key => $value) {
	$url.= '&'.urlencode($key).'='.urlencode($value);
}

// chargement et affichage de la réponse brute de l'API sncf
$request = curl_init( $url );
curl_setopt($request, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec( $request );
curl_close( $request );

?>