<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Communication-e6907e11-f007-4e2c-a98d-a543229a10c2.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Communication-e6907e11-f007-4e2c-a98d-a543229a10c2.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Communication-e6907e11-f007-4e2c-a98d-a543229a10c2.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Communication-e6907e11-f007-4e2c-a98d-a543229a10c2.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Communication-e6907e11-f007-4e2c-a98d-a543229a10c2.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Communication-e6907e11-f007-4e2c-a98d-a543229a10c2.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Communication-e6907e11-f007-4e2c-a98d-a543229a10c2.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
