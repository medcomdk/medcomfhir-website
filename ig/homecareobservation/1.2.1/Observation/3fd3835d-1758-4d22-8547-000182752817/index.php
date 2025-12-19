<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-3fd3835d-1758-4d22-8547-000182752817.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-3fd3835d-1758-4d22-8547-000182752817.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-3fd3835d-1758-4d22-8547-000182752817.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-3fd3835d-1758-4d22-8547-000182752817.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-3fd3835d-1758-4d22-8547-000182752817.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-3fd3835d-1758-4d22-8547-000182752817.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-3fd3835d-1758-4d22-8547-000182752817.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
