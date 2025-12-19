<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/DiagnosticReport-6d08f000-33cc-41f3-a7c2-c086d53d31a7.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/DiagnosticReport-6d08f000-33cc-41f3-a7c2-c086d53d31a7.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/DiagnosticReport-6d08f000-33cc-41f3-a7c2-c086d53d31a7.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/DiagnosticReport-6d08f000-33cc-41f3-a7c2-c086d53d31a7.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/DiagnosticReport-6d08f000-33cc-41f3-a7c2-c086d53d31a7.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/DiagnosticReport-6d08f000-33cc-41f3-a7c2-c086d53d31a7.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/DiagnosticReport-6d08f000-33cc-41f3-a7c2-c086d53d31a7.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
