<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/DiagnosticReport-4f013d3a-575c-447d-83e1-7a5fb7f7b0de.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/DiagnosticReport-4f013d3a-575c-447d-83e1-7a5fb7f7b0de.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/DiagnosticReport-4f013d3a-575c-447d-83e1-7a5fb7f7b0de.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/DiagnosticReport-4f013d3a-575c-447d-83e1-7a5fb7f7b0de.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/DiagnosticReport-4f013d3a-575c-447d-83e1-7a5fb7f7b0de.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/DiagnosticReport-4f013d3a-575c-447d-83e1-7a5fb7f7b0de.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/DiagnosticReport-4f013d3a-575c-447d-83e1-7a5fb7f7b0de.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
