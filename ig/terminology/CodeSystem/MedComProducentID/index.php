<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.5.0/CodeSystem-MedComProducentID.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.5.0/CodeSystem-MedComProducentID.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.5.0/CodeSystem-MedComProducentID.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.5.0/CodeSystem-MedComProducentID.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.5.0/CodeSystem-MedComProducentID.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.5.0/CodeSystem-MedComProducentID.html');
else 
  Redirect('http://medcomfhir.dk/ig/terminology/1.5.0/CodeSystem-MedComProducentID.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
