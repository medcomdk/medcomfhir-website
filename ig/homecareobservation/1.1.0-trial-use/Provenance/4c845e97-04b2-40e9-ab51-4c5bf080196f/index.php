<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Provenance-4c845e97-04b2-40e9-ab51-4c5bf080196f.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Provenance-4c845e97-04b2-40e9-ab51-4c5bf080196f.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Provenance-4c845e97-04b2-40e9-ab51-4c5bf080196f.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Provenance-4c845e97-04b2-40e9-ab51-4c5bf080196f.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Provenance-4c845e97-04b2-40e9-ab51-4c5bf080196f.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Provenance-4c845e97-04b2-40e9-ab51-4c5bf080196f.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Provenance-4c845e97-04b2-40e9-ab51-4c5bf080196f.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
