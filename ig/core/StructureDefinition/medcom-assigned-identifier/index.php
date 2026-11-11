<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/core/4.0.0/StructureDefinition-medcom-assigned-identifier.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/core/4.0.0/StructureDefinition-medcom-assigned-identifier.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/core/4.0.0/StructureDefinition-medcom-assigned-identifier.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/core/4.0.0/StructureDefinition-medcom-assigned-identifier.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/core/4.0.0/StructureDefinition-medcom-assigned-identifier.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/core/4.0.0/StructureDefinition-medcom-assigned-identifier.html');
else 
  Redirect('http://medcomfhir.dk/ig/core/4.0.0/StructureDefinition-medcom-assigned-identifier.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
