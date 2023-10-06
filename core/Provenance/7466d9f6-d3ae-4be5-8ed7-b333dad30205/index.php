<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Provenance-7466d9f6-d3ae-4be5-8ed7-b333dad30205.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Provenance-7466d9f6-d3ae-4be5-8ed7-b333dad30205.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Provenance-7466d9f6-d3ae-4be5-8ed7-b333dad30205.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Provenance-7466d9f6-d3ae-4be5-8ed7-b333dad30205.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Provenance-7466d9f6-d3ae-4be5-8ed7-b333dad30205.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Provenance-7466d9f6-d3ae-4be5-8ed7-b333dad30205.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Provenance-7466d9f6-d3ae-4be5-8ed7-b333dad30205.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
