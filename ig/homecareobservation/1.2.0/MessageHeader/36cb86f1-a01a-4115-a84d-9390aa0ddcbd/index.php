<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/MessageHeader-36cb86f1-a01a-4115-a84d-9390aa0ddcbd.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/MessageHeader-36cb86f1-a01a-4115-a84d-9390aa0ddcbd.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/MessageHeader-36cb86f1-a01a-4115-a84d-9390aa0ddcbd.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/MessageHeader-36cb86f1-a01a-4115-a84d-9390aa0ddcbd.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/MessageHeader-36cb86f1-a01a-4115-a84d-9390aa0ddcbd.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/MessageHeader-36cb86f1-a01a-4115-a84d-9390aa0ddcbd.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/MessageHeader-36cb86f1-a01a-4115-a84d-9390aa0ddcbd.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
