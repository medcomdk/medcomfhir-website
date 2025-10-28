<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/2.0.1/CodeSystem-medcom-messaging-cancellation-reason.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/2.0.1/CodeSystem-medcom-messaging-cancellation-reason.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/2.0.1/CodeSystem-medcom-messaging-cancellation-reason.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/2.0.1/CodeSystem-medcom-messaging-cancellation-reason.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/2.0.1/CodeSystem-medcom-messaging-cancellation-reason.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/2.0.1/CodeSystem-medcom-messaging-cancellation-reason.html');
else 
  Redirect('http://medcomfhir.dk/ig/terminology/2.0.1/CodeSystem-medcom-messaging-cancellation-reason.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
