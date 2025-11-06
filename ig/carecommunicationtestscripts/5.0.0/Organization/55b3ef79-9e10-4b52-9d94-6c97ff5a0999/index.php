<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-55b3ef79-9e10-4b52-9d94-6c97ff5a0999.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-55b3ef79-9e10-4b52-9d94-6c97ff5a0999.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-55b3ef79-9e10-4b52-9d94-6c97ff5a0999.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-55b3ef79-9e10-4b52-9d94-6c97ff5a0999.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-55b3ef79-9e10-4b52-9d94-6c97ff5a0999.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-55b3ef79-9e10-4b52-9d94-6c97ff5a0999.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-55b3ef79-9e10-4b52-9d94-6c97ff5a0999.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
