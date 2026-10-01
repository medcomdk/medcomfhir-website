<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://medcomfhir.dk/ig/ekg/2.0.1/StructureDefinition-medcom-ekg-recording-composition.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://medcomfhir.dk/ig/ekg/2.0.1/StructureDefinition-medcom-ekg-recording-composition.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://medcomfhir.dk/ig/ekg/2.0.1/StructureDefinition-medcom-ekg-recording-composition.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://medcomfhir.dk/ig/ekg/2.0.1/StructureDefinition-medcom-ekg-recording-composition.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://medcomfhir.dk/ig/ekg/2.0.1/StructureDefinition-medcom-ekg-recording-composition.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://medcomfhir.dk/ig/ekg/2.0.1/StructureDefinition-medcom-ekg-recording-composition.html');
else 
  Redirect('https://medcomfhir.dk/ig/ekg/2.0.1/StructureDefinition-medcom-ekg-recording-composition.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
