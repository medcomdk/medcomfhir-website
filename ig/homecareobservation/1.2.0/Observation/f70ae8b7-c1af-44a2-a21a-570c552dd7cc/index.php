<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/Observation-f70ae8b7-c1af-44a2-a21a-570c552dd7cc.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/Observation-f70ae8b7-c1af-44a2-a21a-570c552dd7cc.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/Observation-f70ae8b7-c1af-44a2-a21a-570c552dd7cc.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/Observation-f70ae8b7-c1af-44a2-a21a-570c552dd7cc.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/Observation-f70ae8b7-c1af-44a2-a21a-570c552dd7cc.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/Observation-f70ae8b7-c1af-44a2-a21a-570c552dd7cc.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/Observation-f70ae8b7-c1af-44a2-a21a-570c552dd7cc.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
