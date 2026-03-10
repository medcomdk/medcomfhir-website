<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0-trial-use/ImplementationGuide-medcom.fhir.dk.notes.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0-trial-use/ImplementationGuide-medcom.fhir.dk.notes.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0-trial-use/ImplementationGuide-medcom.fhir.dk.notes.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0-trial-use/ImplementationGuide-medcom.fhir.dk.notes.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0-trial-use/ImplementationGuide-medcom.fhir.dk.notes.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0-trial-use/index.html');
else 
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0-trial-use/ImplementationGuide-medcom.fhir.dk.notes.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
