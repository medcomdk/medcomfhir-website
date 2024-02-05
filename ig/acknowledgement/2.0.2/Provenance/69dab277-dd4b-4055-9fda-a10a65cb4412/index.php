<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.2/Provenance-69dab277-dd4b-4055-9fda-a10a65cb4412.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.2/Provenance-69dab277-dd4b-4055-9fda-a10a65cb4412.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.2/Provenance-69dab277-dd4b-4055-9fda-a10a65cb4412.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.2/Provenance-69dab277-dd4b-4055-9fda-a10a65cb4412.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.2/Provenance-69dab277-dd4b-4055-9fda-a10a65cb4412.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.2/Provenance-69dab277-dd4b-4055-9fda-a10a65cb4412.html');
else 
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.2/Provenance-69dab277-dd4b-4055-9fda-a10a65cb4412.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
