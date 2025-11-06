<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-3480293d-1e3b-4132-ac19-ee3b9a0bd19b.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-3480293d-1e3b-4132-ac19-ee3b9a0bd19b.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-3480293d-1e3b-4132-ac19-ee3b9a0bd19b.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-3480293d-1e3b-4132-ac19-ee3b9a0bd19b.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-3480293d-1e3b-4132-ac19-ee3b9a0bd19b.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-3480293d-1e3b-4132-ac19-ee3b9a0bd19b.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-3480293d-1e3b-4132-ac19-ee3b9a0bd19b.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
