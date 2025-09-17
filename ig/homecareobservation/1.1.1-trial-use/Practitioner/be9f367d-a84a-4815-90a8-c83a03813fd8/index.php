<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Practitioner-be9f367d-a84a-4815-90a8-c83a03813fd8.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Practitioner-be9f367d-a84a-4815-90a8-c83a03813fd8.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Practitioner-be9f367d-a84a-4815-90a8-c83a03813fd8.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Practitioner-be9f367d-a84a-4815-90a8-c83a03813fd8.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Practitioner-be9f367d-a84a-4815-90a8-c83a03813fd8.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Practitioner-be9f367d-a84a-4815-90a8-c83a03813fd8.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Practitioner-be9f367d-a84a-4815-90a8-c83a03813fd8.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
