<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Organization-d1c1fa90-2c7e-4dd7-b2e8-e40281635a98.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Organization-d1c1fa90-2c7e-4dd7-b2e8-e40281635a98.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Organization-d1c1fa90-2c7e-4dd7-b2e8-e40281635a98.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Organization-d1c1fa90-2c7e-4dd7-b2e8-e40281635a98.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Organization-d1c1fa90-2c7e-4dd7-b2e8-e40281635a98.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Organization-d1c1fa90-2c7e-4dd7-b2e8-e40281635a98.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Organization-d1c1fa90-2c7e-4dd7-b2e8-e40281635a98.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
