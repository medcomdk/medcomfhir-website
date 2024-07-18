<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/StructureDefinition-medcom-careCommunication-provenance.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/StructureDefinition-medcom-careCommunication-provenance.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/StructureDefinition-medcom-careCommunication-provenance.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/StructureDefinition-medcom-careCommunication-provenance.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/StructureDefinition-medcom-careCommunication-provenance.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/StructureDefinition-medcom-careCommunication-provenance.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/StructureDefinition-medcom-careCommunication-provenance.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
