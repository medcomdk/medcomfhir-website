<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Practitioner-d0d09ee7-ac4c-4beb-839c-85763d50c7a4.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Practitioner-d0d09ee7-ac4c-4beb-839c-85763d50c7a4.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Practitioner-d0d09ee7-ac4c-4beb-839c-85763d50c7a4.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Practitioner-d0d09ee7-ac4c-4beb-839c-85763d50c7a4.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Practitioner-d0d09ee7-ac4c-4beb-839c-85763d50c7a4.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Practitioner-d0d09ee7-ac4c-4beb-839c-85763d50c7a4.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Practitioner-d0d09ee7-ac4c-4beb-839c-85763d50c7a4.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
