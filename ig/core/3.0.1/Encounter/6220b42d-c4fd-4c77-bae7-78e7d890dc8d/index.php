<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/core/3.0.1/Encounter-6220b42d-c4fd-4c77-bae7-78e7d890dc8d.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/core/3.0.1/Encounter-6220b42d-c4fd-4c77-bae7-78e7d890dc8d.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/core/3.0.1/Encounter-6220b42d-c4fd-4c77-bae7-78e7d890dc8d.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/core/3.0.1/Encounter-6220b42d-c4fd-4c77-bae7-78e7d890dc8d.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/core/3.0.1/Encounter-6220b42d-c4fd-4c77-bae7-78e7d890dc8d.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/core/3.0.1/Encounter-6220b42d-c4fd-4c77-bae7-78e7d890dc8d.html');
else 
  Redirect('http://medcomfhir.dk/ig/core/3.0.1/Encounter-6220b42d-c4fd-4c77-bae7-78e7d890dc8d.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
