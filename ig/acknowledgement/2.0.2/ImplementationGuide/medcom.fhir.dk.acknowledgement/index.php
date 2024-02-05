<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.2/ImplementationGuide-medcom.fhir.dk.acknowledgement.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.2/ImplementationGuide-medcom.fhir.dk.acknowledgement.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.2/ImplementationGuide-medcom.fhir.dk.acknowledgement.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.2/ImplementationGuide-medcom.fhir.dk.acknowledgement.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.2/ImplementationGuide-medcom.fhir.dk.acknowledgement.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.2/ImplementationGuide-medcom.fhir.dk.acknowledgement.html');
else 
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.2/ImplementationGuide-medcom.fhir.dk.acknowledgement.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
