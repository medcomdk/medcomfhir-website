<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/core/2.0.1/StructureDefinition-medcom-core-ecpr-identifier.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/core/2.0.1/StructureDefinition-medcom-core-ecpr-identifier.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/core/2.0.1/StructureDefinition-medcom-core-ecpr-identifier.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/core/2.0.1/StructureDefinition-medcom-core-ecpr-identifier.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/core/2.0.1/StructureDefinition-medcom-core-ecpr-identifier.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/core/2.0.1/StructureDefinition-medcom-core-ecpr-identifier.html');
else 
  Redirect('http://medcomfhir.dk/ig/core/2.0.1/StructureDefinition-medcom-core-ecpr-identifier.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
