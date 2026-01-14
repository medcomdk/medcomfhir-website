<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/document/2.0.0/Observation-ef810168-ee8c-4f14-9012-6aff6c1d86e7.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/document/2.0.0/Observation-ef810168-ee8c-4f14-9012-6aff6c1d86e7.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/document/2.0.0/Observation-ef810168-ee8c-4f14-9012-6aff6c1d86e7.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/document/2.0.0/Observation-ef810168-ee8c-4f14-9012-6aff6c1d86e7.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/document/2.0.0/Observation-ef810168-ee8c-4f14-9012-6aff6c1d86e7.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/document/2.0.0/Observation-ef810168-ee8c-4f14-9012-6aff6c1d86e7.html');
else 
  Redirect('http://medcomfhir.dk/ig/document/2.0.0/Observation-ef810168-ee8c-4f14-9012-6aff6c1d86e7.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
