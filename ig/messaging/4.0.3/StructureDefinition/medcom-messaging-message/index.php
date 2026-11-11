<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://medcomfhir.dk/ig/messaging/4.0.3/StructureDefinition-medcom-messaging-message.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://medcomfhir.dk/ig/messaging/4.0.3/StructureDefinition-medcom-messaging-message.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://medcomfhir.dk/ig/messaging/4.0.3/StructureDefinition-medcom-messaging-message.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://medcomfhir.dk/ig/messaging/4.0.3/StructureDefinition-medcom-messaging-message.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://medcomfhir.dk/ig/messaging/4.0.3/StructureDefinition-medcom-messaging-message.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://medcomfhir.dk/ig/messaging/4.0.3/StructureDefinition-medcom-messaging-message.html');
else 
  Redirect('https://medcomfhir.dk/ig/messaging/4.0.3/StructureDefinition-medcom-messaging-message.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
