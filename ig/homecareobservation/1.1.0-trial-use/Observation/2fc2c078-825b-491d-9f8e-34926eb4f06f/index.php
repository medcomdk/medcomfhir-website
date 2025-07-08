<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Observation-2fc2c078-825b-491d-9f8e-34926eb4f06f.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Observation-2fc2c078-825b-491d-9f8e-34926eb4f06f.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Observation-2fc2c078-825b-491d-9f8e-34926eb4f06f.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Observation-2fc2c078-825b-491d-9f8e-34926eb4f06f.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Observation-2fc2c078-825b-491d-9f8e-34926eb4f06f.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Observation-2fc2c078-825b-491d-9f8e-34926eb4f06f.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Observation-2fc2c078-825b-491d-9f8e-34926eb4f06f.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
