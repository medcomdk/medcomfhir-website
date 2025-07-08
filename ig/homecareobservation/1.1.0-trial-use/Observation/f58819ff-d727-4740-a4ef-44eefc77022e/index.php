<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Observation-f58819ff-d727-4740-a4ef-44eefc77022e.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Observation-f58819ff-d727-4740-a4ef-44eefc77022e.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Observation-f58819ff-d727-4740-a4ef-44eefc77022e.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Observation-f58819ff-d727-4740-a4ef-44eefc77022e.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Observation-f58819ff-d727-4740-a4ef-44eefc77022e.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Observation-f58819ff-d727-4740-a4ef-44eefc77022e.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Observation-f58819ff-d727-4740-a4ef-44eefc77022e.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
