<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/StructureDefinition-medcom-conditionlist-documentreference.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/StructureDefinition-medcom-conditionlist-documentreference.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/StructureDefinition-medcom-conditionlist-documentreference.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/StructureDefinition-medcom-conditionlist-documentreference.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/StructureDefinition-medcom-conditionlist-documentreference.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/StructureDefinition-medcom-conditionlist-documentreference.html');
else 
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/StructureDefinition-medcom-conditionlist-documentreference.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
