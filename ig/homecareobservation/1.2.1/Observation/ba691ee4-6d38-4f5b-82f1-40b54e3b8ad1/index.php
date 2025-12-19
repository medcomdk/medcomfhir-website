<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-ba691ee4-6d38-4f5b-82f1-40b54e3b8ad1.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-ba691ee4-6d38-4f5b-82f1-40b54e3b8ad1.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-ba691ee4-6d38-4f5b-82f1-40b54e3b8ad1.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-ba691ee4-6d38-4f5b-82f1-40b54e3b8ad1.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-ba691ee4-6d38-4f5b-82f1-40b54e3b8ad1.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-ba691ee4-6d38-4f5b-82f1-40b54e3b8ad1.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-ba691ee4-6d38-4f5b-82f1-40b54e3b8ad1.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
