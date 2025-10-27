<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0/Communication-d148fa55-3201-4a18-a7b0-bce67bf597a6.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0/Communication-d148fa55-3201-4a18-a7b0-bce67bf597a6.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0/Communication-d148fa55-3201-4a18-a7b0-bce67bf597a6.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0/Communication-d148fa55-3201-4a18-a7b0-bce67bf597a6.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0/Communication-d148fa55-3201-4a18-a7b0-bce67bf597a6.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0/Communication-d148fa55-3201-4a18-a7b0-bce67bf597a6.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0/Communication-d148fa55-3201-4a18-a7b0-bce67bf597a6.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
