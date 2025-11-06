<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Provenance-792ec529-aa61-44cc-97f9-b9a5b446b4fe.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Provenance-792ec529-aa61-44cc-97f9-b9a5b446b4fe.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Provenance-792ec529-aa61-44cc-97f9-b9a5b446b4fe.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Provenance-792ec529-aa61-44cc-97f9-b9a5b446b4fe.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Provenance-792ec529-aa61-44cc-97f9-b9a5b446b4fe.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Provenance-792ec529-aa61-44cc-97f9-b9a5b446b4fe.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Provenance-792ec529-aa61-44cc-97f9-b9a5b446b4fe.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
