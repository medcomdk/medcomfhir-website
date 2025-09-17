<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/MessageHeader-8dbf63f4-b784-4d40-8802-c1bdb1ecfa63.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/MessageHeader-8dbf63f4-b784-4d40-8802-c1bdb1ecfa63.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/MessageHeader-8dbf63f4-b784-4d40-8802-c1bdb1ecfa63.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/MessageHeader-8dbf63f4-b784-4d40-8802-c1bdb1ecfa63.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/MessageHeader-8dbf63f4-b784-4d40-8802-c1bdb1ecfa63.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/MessageHeader-8dbf63f4-b784-4d40-8802-c1bdb1ecfa63.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/MessageHeader-8dbf63f4-b784-4d40-8802-c1bdb1ecfa63.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
