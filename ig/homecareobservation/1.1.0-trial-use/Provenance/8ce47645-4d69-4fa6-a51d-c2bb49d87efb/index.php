<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Provenance-8ce47645-4d69-4fa6-a51d-c2bb49d87efb.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Provenance-8ce47645-4d69-4fa6-a51d-c2bb49d87efb.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Provenance-8ce47645-4d69-4fa6-a51d-c2bb49d87efb.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Provenance-8ce47645-4d69-4fa6-a51d-c2bb49d87efb.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Provenance-8ce47645-4d69-4fa6-a51d-c2bb49d87efb.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Provenance-8ce47645-4d69-4fa6-a51d-c2bb49d87efb.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Provenance-8ce47645-4d69-4fa6-a51d-c2bb49d87efb.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
