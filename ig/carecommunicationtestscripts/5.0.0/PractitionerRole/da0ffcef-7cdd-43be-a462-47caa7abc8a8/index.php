<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-da0ffcef-7cdd-43be-a462-47caa7abc8a8.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-da0ffcef-7cdd-43be-a462-47caa7abc8a8.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-da0ffcef-7cdd-43be-a462-47caa7abc8a8.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-da0ffcef-7cdd-43be-a462-47caa7abc8a8.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-da0ffcef-7cdd-43be-a462-47caa7abc8a8.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-da0ffcef-7cdd-43be-a462-47caa7abc8a8.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-da0ffcef-7cdd-43be-a462-47caa7abc8a8.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
