<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/TestScript-carecommunication-send-new-attachment-bmp.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/TestScript-carecommunication-send-new-attachment-bmp.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/TestScript-carecommunication-send-new-attachment-bmp.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/TestScript-carecommunication-send-new-attachment-bmp.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/TestScript-carecommunication-send-new-attachment-bmp.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/TestScript-carecommunication-send-new-attachment-bmp.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/TestScript-carecommunication-send-new-attachment-bmp.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.