<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Encounter-303b2782-e2bf-4780-a8a5-c4b02b0e1c66.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Encounter-303b2782-e2bf-4780-a8a5-c4b02b0e1c66.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Encounter-303b2782-e2bf-4780-a8a5-c4b02b0e1c66.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Encounter-303b2782-e2bf-4780-a8a5-c4b02b0e1c66.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Encounter-303b2782-e2bf-4780-a8a5-c4b02b0e1c66.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Encounter-303b2782-e2bf-4780-a8a5-c4b02b0e1c66.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Encounter-303b2782-e2bf-4780-a8a5-c4b02b0e1c66.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.