<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Practitioner-dd46a69e-b2e5-4e0d-9cc4-95259c9722e2.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Practitioner-dd46a69e-b2e5-4e0d-9cc4-95259c9722e2.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Practitioner-dd46a69e-b2e5-4e0d-9cc4-95259c9722e2.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Practitioner-dd46a69e-b2e5-4e0d-9cc4-95259c9722e2.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Practitioner-dd46a69e-b2e5-4e0d-9cc4-95259c9722e2.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Practitioner-dd46a69e-b2e5-4e0d-9cc4-95259c9722e2.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Practitioner-dd46a69e-b2e5-4e0d-9cc4-95259c9722e2.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
