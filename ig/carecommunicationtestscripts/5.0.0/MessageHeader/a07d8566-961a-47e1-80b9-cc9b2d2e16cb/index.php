<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-a07d8566-961a-47e1-80b9-cc9b2d2e16cb.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-a07d8566-961a-47e1-80b9-cc9b2d2e16cb.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-a07d8566-961a-47e1-80b9-cc9b2d2e16cb.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-a07d8566-961a-47e1-80b9-cc9b2d2e16cb.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-a07d8566-961a-47e1-80b9-cc9b2d2e16cb.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-a07d8566-961a-47e1-80b9-cc9b2d2e16cb.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-a07d8566-961a-47e1-80b9-cc9b2d2e16cb.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
