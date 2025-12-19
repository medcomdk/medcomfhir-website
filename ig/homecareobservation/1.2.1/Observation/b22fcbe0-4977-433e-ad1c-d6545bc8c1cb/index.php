<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-b22fcbe0-4977-433e-ad1c-d6545bc8c1cb.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-b22fcbe0-4977-433e-ad1c-d6545bc8c1cb.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-b22fcbe0-4977-433e-ad1c-d6545bc8c1cb.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-b22fcbe0-4977-433e-ad1c-d6545bc8c1cb.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-b22fcbe0-4977-433e-ad1c-d6545bc8c1cb.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-b22fcbe0-4977-433e-ad1c-d6545bc8c1cb.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-b22fcbe0-4977-433e-ad1c-d6545bc8c1cb.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
