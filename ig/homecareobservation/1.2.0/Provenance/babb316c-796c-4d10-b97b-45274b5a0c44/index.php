<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/Provenance-babb316c-796c-4d10-b97b-45274b5a0c44.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/Provenance-babb316c-796c-4d10-b97b-45274b5a0c44.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/Provenance-babb316c-796c-4d10-b97b-45274b5a0c44.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/Provenance-babb316c-796c-4d10-b97b-45274b5a0c44.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/Provenance-babb316c-796c-4d10-b97b-45274b5a0c44.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/Provenance-babb316c-796c-4d10-b97b-45274b5a0c44.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/Provenance-babb316c-796c-4d10-b97b-45274b5a0c44.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
