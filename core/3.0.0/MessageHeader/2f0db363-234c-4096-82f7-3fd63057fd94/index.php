<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/MessageHeader-2f0db363-234c-4096-82f7-3fd63057fd94.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/MessageHeader-2f0db363-234c-4096-82f7-3fd63057fd94.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/MessageHeader-2f0db363-234c-4096-82f7-3fd63057fd94.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/MessageHeader-2f0db363-234c-4096-82f7-3fd63057fd94.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/MessageHeader-2f0db363-234c-4096-82f7-3fd63057fd94.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/MessageHeader-2f0db363-234c-4096-82f7-3fd63057fd94.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/MessageHeader-2f0db363-234c-4096-82f7-3fd63057fd94.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
