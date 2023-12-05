<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-f628d121-52f5-401b-a195-3492b3fec614.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-f628d121-52f5-401b-a195-3492b3fec614.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-f628d121-52f5-401b-a195-3492b3fec614.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-f628d121-52f5-401b-a195-3492b3fec614.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-f628d121-52f5-401b-a195-3492b3fec614.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-f628d121-52f5-401b-a195-3492b3fec614.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-f628d121-52f5-401b-a195-3492b3fec614.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
