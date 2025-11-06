<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Communication-aa5c8b0e-cfb9-4eb6-b1f1-7e96195d4042.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Communication-aa5c8b0e-cfb9-4eb6-b1f1-7e96195d4042.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Communication-aa5c8b0e-cfb9-4eb6-b1f1-7e96195d4042.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Communication-aa5c8b0e-cfb9-4eb6-b1f1-7e96195d4042.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Communication-aa5c8b0e-cfb9-4eb6-b1f1-7e96195d4042.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Communication-aa5c8b0e-cfb9-4eb6-b1f1-7e96195d4042.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Communication-aa5c8b0e-cfb9-4eb6-b1f1-7e96195d4042.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
