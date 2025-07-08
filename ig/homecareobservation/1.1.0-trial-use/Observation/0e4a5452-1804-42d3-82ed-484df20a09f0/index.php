<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Observation-0e4a5452-1804-42d3-82ed-484df20a09f0.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Observation-0e4a5452-1804-42d3-82ed-484df20a09f0.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Observation-0e4a5452-1804-42d3-82ed-484df20a09f0.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Observation-0e4a5452-1804-42d3-82ed-484df20a09f0.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Observation-0e4a5452-1804-42d3-82ed-484df20a09f0.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Observation-0e4a5452-1804-42d3-82ed-484df20a09f0.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Observation-0e4a5452-1804-42d3-82ed-484df20a09f0.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
