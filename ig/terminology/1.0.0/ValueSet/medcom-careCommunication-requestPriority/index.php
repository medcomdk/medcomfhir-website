<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.0.0/ValueSet-medcom-careCommunication-requestPriority.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.0.0/ValueSet-medcom-careCommunication-requestPriority.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.0.0/ValueSet-medcom-careCommunication-requestPriority.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.0.0/ValueSet-medcom-careCommunication-requestPriority.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.0.0/ValueSet-medcom-careCommunication-requestPriority.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.0.0/ValueSet-medcom-careCommunication-requestPriority.html');
else 
  Redirect('http://medcomfhir.dk/ig/terminology/1.0.0/ValueSet-medcom-careCommunication-requestPriority.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
