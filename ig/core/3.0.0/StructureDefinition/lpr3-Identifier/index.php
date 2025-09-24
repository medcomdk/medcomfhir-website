<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/core/3.0.0/StructureDefinition-lpr3-Identifier.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/core/3.0.0/StructureDefinition-lpr3-Identifier.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/core/3.0.0/StructureDefinition-lpr3-Identifier.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/core/3.0.0/StructureDefinition-lpr3-Identifier.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/core/3.0.0/StructureDefinition-lpr3-Identifier.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/core/3.0.0/StructureDefinition-lpr3-Identifier.html');
else 
  Redirect('http://medcomfhir.dk/ig/core/3.0.0/StructureDefinition-lpr3-Identifier.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
