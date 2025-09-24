<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/core/3.0.0/StructureDefinition-medcom-messaging-contactpoint.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/core/3.0.0/StructureDefinition-medcom-messaging-contactpoint.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/core/3.0.0/StructureDefinition-medcom-messaging-contactpoint.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/core/3.0.0/StructureDefinition-medcom-messaging-contactpoint.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/core/3.0.0/StructureDefinition-medcom-messaging-contactpoint.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/core/3.0.0/StructureDefinition-medcom-messaging-contactpoint.html');
else 
  Redirect('http://medcomfhir.dk/ig/core/3.0.0/StructureDefinition-medcom-messaging-contactpoint.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
