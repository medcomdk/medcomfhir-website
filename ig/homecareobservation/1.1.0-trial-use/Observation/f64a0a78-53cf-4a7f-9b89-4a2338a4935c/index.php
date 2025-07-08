<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Observation-f64a0a78-53cf-4a7f-9b89-4a2338a4935c.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Observation-f64a0a78-53cf-4a7f-9b89-4a2338a4935c.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Observation-f64a0a78-53cf-4a7f-9b89-4a2338a4935c.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Observation-f64a0a78-53cf-4a7f-9b89-4a2338a4935c.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Observation-f64a0a78-53cf-4a7f-9b89-4a2338a4935c.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Observation-f64a0a78-53cf-4a7f-9b89-4a2338a4935c.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Observation-f64a0a78-53cf-4a7f-9b89-4a2338a4935c.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
