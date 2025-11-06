<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-e2eb406c-3a28-4509-baba-2d0a0f6db759.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-e2eb406c-3a28-4509-baba-2d0a0f6db759.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-e2eb406c-3a28-4509-baba-2d0a0f6db759.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-e2eb406c-3a28-4509-baba-2d0a0f6db759.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-e2eb406c-3a28-4509-baba-2d0a0f6db759.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-e2eb406c-3a28-4509-baba-2d0a0f6db759.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-e2eb406c-3a28-4509-baba-2d0a0f6db759.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
