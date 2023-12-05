<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.0.0/DiagnosticReport-cfa9e95b-b5ac-4cfe-abe7-ea29e6b67919.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.0.0/DiagnosticReport-cfa9e95b-b5ac-4cfe-abe7-ea29e6b67919.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.0.0/DiagnosticReport-cfa9e95b-b5ac-4cfe-abe7-ea29e6b67919.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.0.0/DiagnosticReport-cfa9e95b-b5ac-4cfe-abe7-ea29e6b67919.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.0.0/DiagnosticReport-cfa9e95b-b5ac-4cfe-abe7-ea29e6b67919.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.0.0/DiagnosticReport-cfa9e95b-b5ac-4cfe-abe7-ea29e6b67919.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.0.0/DiagnosticReport-cfa9e95b-b5ac-4cfe-abe7-ea29e6b67919.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
