<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Encounter-ca0f5d0c-cb2a-4ad5-a08a-e7dbd2092b13.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Encounter-ca0f5d0c-cb2a-4ad5-a08a-e7dbd2092b13.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Encounter-ca0f5d0c-cb2a-4ad5-a08a-e7dbd2092b13.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Encounter-ca0f5d0c-cb2a-4ad5-a08a-e7dbd2092b13.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Encounter-ca0f5d0c-cb2a-4ad5-a08a-e7dbd2092b13.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Encounter-ca0f5d0c-cb2a-4ad5-a08a-e7dbd2092b13.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Encounter-ca0f5d0c-cb2a-4ad5-a08a-e7dbd2092b13.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
