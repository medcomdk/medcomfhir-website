<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/MessageHeader-07eb074b-be00-47e5-8bcb-484990a1a97e.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/MessageHeader-07eb074b-be00-47e5-8bcb-484990a1a97e.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/MessageHeader-07eb074b-be00-47e5-8bcb-484990a1a97e.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/MessageHeader-07eb074b-be00-47e5-8bcb-484990a1a97e.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/MessageHeader-07eb074b-be00-47e5-8bcb-484990a1a97e.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/MessageHeader-07eb074b-be00-47e5-8bcb-484990a1a97e.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/MessageHeader-07eb074b-be00-47e5-8bcb-484990a1a97e.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
