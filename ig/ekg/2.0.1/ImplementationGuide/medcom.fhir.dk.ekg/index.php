<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://medcomfhir.dk/ig/ekg/2.0.1/ImplementationGuide-medcom.fhir.dk.ekg.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://medcomfhir.dk/ig/ekg/2.0.1/ImplementationGuide-medcom.fhir.dk.ekg.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://medcomfhir.dk/ig/ekg/2.0.1/ImplementationGuide-medcom.fhir.dk.ekg.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://medcomfhir.dk/ig/ekg/2.0.1/ImplementationGuide-medcom.fhir.dk.ekg.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://medcomfhir.dk/ig/ekg/2.0.1/ImplementationGuide-medcom.fhir.dk.ekg.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://medcomfhir.dk/ig/ekg/2.0.1/index.html');
else 
  Redirect('https://medcomfhir.dk/ig/ekg/2.0.1/ImplementationGuide-medcom.fhir.dk.ekg.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
