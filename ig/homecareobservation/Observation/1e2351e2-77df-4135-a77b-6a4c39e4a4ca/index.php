<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.0.0/Observation-1e2351e2-77df-4135-a77b-6a4c39e4a4ca.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.0.0/Observation-1e2351e2-77df-4135-a77b-6a4c39e4a4ca.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.0.0/Observation-1e2351e2-77df-4135-a77b-6a4c39e4a4ca.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.0.0/Observation-1e2351e2-77df-4135-a77b-6a4c39e4a4ca.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.0.0/Observation-1e2351e2-77df-4135-a77b-6a4c39e4a4ca.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.0.0/Observation-1e2351e2-77df-4135-a77b-6a4c39e4a4ca.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.0.0/Observation-1e2351e2-77df-4135-a77b-6a4c39e4a4ca.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
