<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/2.0.0-draft/CodeSystem-medcom-messaging-destinationUse.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/2.0.0-draft/CodeSystem-medcom-messaging-destinationUse.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/2.0.0-draft/CodeSystem-medcom-messaging-destinationUse.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/2.0.0-draft/CodeSystem-medcom-messaging-destinationUse.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/2.0.0-draft/CodeSystem-medcom-messaging-destinationUse.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/2.0.0-draft/CodeSystem-medcom-messaging-destinationUse.html');
else 
  Redirect('http://medcomfhir.dk/ig/terminology/2.0.0-draft/CodeSystem-medcom-messaging-destinationUse.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
