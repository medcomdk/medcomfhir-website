<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-e640191b-a64c-4d05-ab28-285b4e91a816.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-e640191b-a64c-4d05-ab28-285b4e91a816.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-e640191b-a64c-4d05-ab28-285b4e91a816.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-e640191b-a64c-4d05-ab28-285b4e91a816.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-e640191b-a64c-4d05-ab28-285b4e91a816.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-e640191b-a64c-4d05-ab28-285b4e91a816.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-e640191b-a64c-4d05-ab28-285b4e91a816.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
