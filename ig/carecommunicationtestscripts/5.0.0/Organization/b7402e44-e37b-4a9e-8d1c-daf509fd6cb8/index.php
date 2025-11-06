<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-b7402e44-e37b-4a9e-8d1c-daf509fd6cb8.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-b7402e44-e37b-4a9e-8d1c-daf509fd6cb8.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-b7402e44-e37b-4a9e-8d1c-daf509fd6cb8.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-b7402e44-e37b-4a9e-8d1c-daf509fd6cb8.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-b7402e44-e37b-4a9e-8d1c-daf509fd6cb8.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-b7402e44-e37b-4a9e-8d1c-daf509fd6cb8.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-b7402e44-e37b-4a9e-8d1c-daf509fd6cb8.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
