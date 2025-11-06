<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Provenance-4e64df0c-6452-4505-8189-b3ae0c0e3d8b.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Provenance-4e64df0c-6452-4505-8189-b3ae0c0e3d8b.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Provenance-4e64df0c-6452-4505-8189-b3ae0c0e3d8b.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Provenance-4e64df0c-6452-4505-8189-b3ae0c0e3d8b.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Provenance-4e64df0c-6452-4505-8189-b3ae0c0e3d8b.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Provenance-4e64df0c-6452-4505-8189-b3ae0c0e3d8b.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Provenance-4e64df0c-6452-4505-8189-b3ae0c0e3d8b.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
