<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.0.0/Patient-bbcd4817-1c4b-4089-a712-346f65ec16f9.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.0.0/Patient-bbcd4817-1c4b-4089-a712-346f65ec16f9.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.0.0/Patient-bbcd4817-1c4b-4089-a712-346f65ec16f9.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.0.0/Patient-bbcd4817-1c4b-4089-a712-346f65ec16f9.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.0.0/Patient-bbcd4817-1c4b-4089-a712-346f65ec16f9.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.0.0/Patient-bbcd4817-1c4b-4089-a712-346f65ec16f9.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.0.0/Patient-bbcd4817-1c4b-4089-a712-346f65ec16f9.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.