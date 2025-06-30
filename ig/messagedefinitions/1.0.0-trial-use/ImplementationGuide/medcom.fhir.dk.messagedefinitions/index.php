<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/messagedefinitions/1.0.0-trial-use/ImplementationGuide-medcom.fhir.dk.messagedefinitions.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/messagedefinitions/1.0.0-trial-use/ImplementationGuide-medcom.fhir.dk.messagedefinitions.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/messagedefinitions/1.0.0-trial-use/ImplementationGuide-medcom.fhir.dk.messagedefinitions.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/messagedefinitions/1.0.0-trial-use/ImplementationGuide-medcom.fhir.dk.messagedefinitions.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/messagedefinitions/1.0.0-trial-use/ImplementationGuide-medcom.fhir.dk.messagedefinitions.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/messagedefinitions/1.0.0-trial-use/index.html');
else 
  Redirect('http://medcomfhir.dk/ig/messagedefinitions/1.0.0-trial-use/ImplementationGuide-medcom.fhir.dk.messagedefinitions.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
