<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-8917f29d-269c-4bb3-8ce9-d255c351d52b.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-8917f29d-269c-4bb3-8ce9-d255c351d52b.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-8917f29d-269c-4bb3-8ce9-d255c351d52b.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-8917f29d-269c-4bb3-8ce9-d255c351d52b.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-8917f29d-269c-4bb3-8ce9-d255c351d52b.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-8917f29d-269c-4bb3-8ce9-d255c351d52b.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Observation-8917f29d-269c-4bb3-8ce9-d255c351d52b.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
