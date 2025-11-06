<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Encounter-ede7ee60-4541-438c-922d-1898a14fa3b1.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Encounter-ede7ee60-4541-438c-922d-1898a14fa3b1.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Encounter-ede7ee60-4541-438c-922d-1898a14fa3b1.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Encounter-ede7ee60-4541-438c-922d-1898a14fa3b1.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Encounter-ede7ee60-4541-438c-922d-1898a14fa3b1.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Encounter-ede7ee60-4541-438c-922d-1898a14fa3b1.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Encounter-ede7ee60-4541-438c-922d-1898a14fa3b1.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
