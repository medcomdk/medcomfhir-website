<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Patient-db2fd52e-9a7a-418f-90d1-b422e07c895d.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Patient-db2fd52e-9a7a-418f-90d1-b422e07c895d.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Patient-db2fd52e-9a7a-418f-90d1-b422e07c895d.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Patient-db2fd52e-9a7a-418f-90d1-b422e07c895d.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Patient-db2fd52e-9a7a-418f-90d1-b422e07c895d.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Patient-db2fd52e-9a7a-418f-90d1-b422e07c895d.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Patient-db2fd52e-9a7a-418f-90d1-b422e07c895d.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
