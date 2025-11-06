<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-8f537c84-17f9-4fd1-a3d6-3d4008d6c6ec.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-8f537c84-17f9-4fd1-a3d6-3d4008d6c6ec.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-8f537c84-17f9-4fd1-a3d6-3d4008d6c6ec.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-8f537c84-17f9-4fd1-a3d6-3d4008d6c6ec.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-8f537c84-17f9-4fd1-a3d6-3d4008d6c6ec.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-8f537c84-17f9-4fd1-a3d6-3d4008d6c6ec.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-8f537c84-17f9-4fd1-a3d6-3d4008d6c6ec.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
