<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0/Observation-d2c9d517-3abd-450e-a3c2-18f18da6fd88.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0/Observation-d2c9d517-3abd-450e-a3c2-18f18da6fd88.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0/Observation-d2c9d517-3abd-450e-a3c2-18f18da6fd88.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0/Observation-d2c9d517-3abd-450e-a3c2-18f18da6fd88.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0/Observation-d2c9d517-3abd-450e-a3c2-18f18da6fd88.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0/Observation-d2c9d517-3abd-450e-a3c2-18f18da6fd88.html');
else 
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0/Observation-d2c9d517-3abd-450e-a3c2-18f18da6fd88.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
