<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Practitioner-9583c018-8e84-4729-9ac0-8c887b4e6c5e.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Practitioner-9583c018-8e84-4729-9ac0-8c887b4e6c5e.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Practitioner-9583c018-8e84-4729-9ac0-8c887b4e6c5e.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Practitioner-9583c018-8e84-4729-9ac0-8c887b4e6c5e.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Practitioner-9583c018-8e84-4729-9ac0-8c887b4e6c5e.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Practitioner-9583c018-8e84-4729-9ac0-8c887b4e6c5e.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Practitioner-9583c018-8e84-4729-9ac0-8c887b4e6c5e.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
