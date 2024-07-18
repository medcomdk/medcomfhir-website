<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Encounter-2a5b01e4-8c2c-481b-ab12-e383d8e00629.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Encounter-2a5b01e4-8c2c-481b-ab12-e383d8e00629.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Encounter-2a5b01e4-8c2c-481b-ab12-e383d8e00629.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Encounter-2a5b01e4-8c2c-481b-ab12-e383d8e00629.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Encounter-2a5b01e4-8c2c-481b-ab12-e383d8e00629.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Encounter-2a5b01e4-8c2c-481b-ab12-e383d8e00629.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Encounter-2a5b01e4-8c2c-481b-ab12-e383d8e00629.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
