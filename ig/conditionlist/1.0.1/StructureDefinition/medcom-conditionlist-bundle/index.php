<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/StructureDefinition-medcom-conditionlist-bundle.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/StructureDefinition-medcom-conditionlist-bundle.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/StructureDefinition-medcom-conditionlist-bundle.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/StructureDefinition-medcom-conditionlist-bundle.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/StructureDefinition-medcom-conditionlist-bundle.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/StructureDefinition-medcom-conditionlist-bundle.html');
else 
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/StructureDefinition-medcom-conditionlist-bundle.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
