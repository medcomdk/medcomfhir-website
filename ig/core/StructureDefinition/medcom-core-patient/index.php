<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://medcomfhir.dk/ig/core/4.0.1/StructureDefinition-medcom-core-patient.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://medcomfhir.dk/ig/core/4.0.1/StructureDefinition-medcom-core-patient.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://medcomfhir.dk/ig/core/4.0.1/StructureDefinition-medcom-core-patient.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://medcomfhir.dk/ig/core/4.0.1/StructureDefinition-medcom-core-patient.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://medcomfhir.dk/ig/core/4.0.1/StructureDefinition-medcom-core-patient.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://medcomfhir.dk/ig/core/4.0.1/StructureDefinition-medcom-core-patient.html');
else 
  Redirect('https://medcomfhir.dk/ig/core/4.0.1/StructureDefinition-medcom-core-patient.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
