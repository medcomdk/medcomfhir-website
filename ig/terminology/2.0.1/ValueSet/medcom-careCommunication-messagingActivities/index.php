<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/2.0.1/ValueSet-medcom-careCommunication-messagingActivities.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/2.0.1/ValueSet-medcom-careCommunication-messagingActivities.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/2.0.1/ValueSet-medcom-careCommunication-messagingActivities.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/2.0.1/ValueSet-medcom-careCommunication-messagingActivities.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/2.0.1/ValueSet-medcom-careCommunication-messagingActivities.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/2.0.1/ValueSet-medcom-careCommunication-messagingActivities.html');
else 
  Redirect('http://medcomfhir.dk/ig/terminology/2.0.1/ValueSet-medcom-careCommunication-messagingActivities.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
