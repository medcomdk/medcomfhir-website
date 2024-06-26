<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.7.0/ValueSet-medcom-hospitalNotification-messageActivities.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.7.0/ValueSet-medcom-hospitalNotification-messageActivities.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.7.0/ValueSet-medcom-hospitalNotification-messageActivities.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.7.0/ValueSet-medcom-hospitalNotification-messageActivities.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.7.0/ValueSet-medcom-hospitalNotification-messageActivities.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.7.0/ValueSet-medcom-hospitalNotification-messageActivities.html');
else 
  Redirect('http://medcomfhir.dk/ig/terminology/1.7.0/ValueSet-medcom-hospitalNotification-messageActivities.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
