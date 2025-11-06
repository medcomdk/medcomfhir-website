<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-aa97d8ad-4fdf-47ac-9a63-c50446c46bdf.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-aa97d8ad-4fdf-47ac-9a63-c50446c46bdf.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-aa97d8ad-4fdf-47ac-9a63-c50446c46bdf.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-aa97d8ad-4fdf-47ac-9a63-c50446c46bdf.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-aa97d8ad-4fdf-47ac-9a63-c50446c46bdf.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-aa97d8ad-4fdf-47ac-9a63-c50446c46bdf.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-aa97d8ad-4fdf-47ac-9a63-c50446c46bdf.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
