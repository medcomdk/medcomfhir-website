<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/core/2.4.0/StructureDefinition-medcom-core-diagnosticreport.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/core/2.4.0/StructureDefinition-medcom-core-diagnosticreport.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/core/2.4.0/StructureDefinition-medcom-core-diagnosticreport.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/core/2.4.0/StructureDefinition-medcom-core-diagnosticreport.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/core/2.4.0/StructureDefinition-medcom-core-diagnosticreport.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/core/2.4.0/StructureDefinition-medcom-core-diagnosticreport.html');
else 
  Redirect('http://medcomfhir.dk/ig/core/2.4.0/StructureDefinition-medcom-core-diagnosticreport.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
