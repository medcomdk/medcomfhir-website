<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Observation-4a94a70e-6957-47a8-bec7-3e27b3145668.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Observation-4a94a70e-6957-47a8-bec7-3e27b3145668.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Observation-4a94a70e-6957-47a8-bec7-3e27b3145668.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Observation-4a94a70e-6957-47a8-bec7-3e27b3145668.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Observation-4a94a70e-6957-47a8-bec7-3e27b3145668.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Observation-4a94a70e-6957-47a8-bec7-3e27b3145668.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Observation-4a94a70e-6957-47a8-bec7-3e27b3145668.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
