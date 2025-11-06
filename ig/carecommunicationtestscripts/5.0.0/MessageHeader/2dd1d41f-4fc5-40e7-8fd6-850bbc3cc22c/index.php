<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-2dd1d41f-4fc5-40e7-8fd6-850bbc3cc22c.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-2dd1d41f-4fc5-40e7-8fd6-850bbc3cc22c.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-2dd1d41f-4fc5-40e7-8fd6-850bbc3cc22c.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-2dd1d41f-4fc5-40e7-8fd6-850bbc3cc22c.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-2dd1d41f-4fc5-40e7-8fd6-850bbc3cc22c.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-2dd1d41f-4fc5-40e7-8fd6-850bbc3cc22c.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-2dd1d41f-4fc5-40e7-8fd6-850bbc3cc22c.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
