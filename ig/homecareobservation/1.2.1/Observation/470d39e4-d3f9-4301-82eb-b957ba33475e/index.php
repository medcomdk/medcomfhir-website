<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-470d39e4-d3f9-4301-82eb-b957ba33475e.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-470d39e4-d3f9-4301-82eb-b957ba33475e.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-470d39e4-d3f9-4301-82eb-b957ba33475e.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-470d39e4-d3f9-4301-82eb-b957ba33475e.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-470d39e4-d3f9-4301-82eb-b957ba33475e.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-470d39e4-d3f9-4301-82eb-b957ba33475e.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-470d39e4-d3f9-4301-82eb-b957ba33475e.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
