<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-R-Tek-C-5d29cc7d-dcf7-4b50-81b1-a8d971973ff6.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-R-Tek-C-5d29cc7d-dcf7-4b50-81b1-a8d971973ff6.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-R-Tek-C-5d29cc7d-dcf7-4b50-81b1-a8d971973ff6.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-R-Tek-C-5d29cc7d-dcf7-4b50-81b1-a8d971973ff6.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-R-Tek-C-5d29cc7d-dcf7-4b50-81b1-a8d971973ff6.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-R-Tek-C-5d29cc7d-dcf7-4b50-81b1-a8d971973ff6.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-R-Tek-C-5d29cc7d-dcf7-4b50-81b1-a8d971973ff6.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
