<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Practitioner-b19a6a37-ec37-4dbb-95ca-1e0c92378c7e.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Practitioner-b19a6a37-ec37-4dbb-95ca-1e0c92378c7e.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Practitioner-b19a6a37-ec37-4dbb-95ca-1e0c92378c7e.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Practitioner-b19a6a37-ec37-4dbb-95ca-1e0c92378c7e.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Practitioner-b19a6a37-ec37-4dbb-95ca-1e0c92378c7e.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Practitioner-b19a6a37-ec37-4dbb-95ca-1e0c92378c7e.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Practitioner-b19a6a37-ec37-4dbb-95ca-1e0c92378c7e.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
