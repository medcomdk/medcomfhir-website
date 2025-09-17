<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Bundle-401cbc36-db1e-4fe0-bf90-6df331dde179.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Bundle-401cbc36-db1e-4fe0-bf90-6df331dde179.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Bundle-401cbc36-db1e-4fe0-bf90-6df331dde179.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Bundle-401cbc36-db1e-4fe0-bf90-6df331dde179.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Bundle-401cbc36-db1e-4fe0-bf90-6df331dde179.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Bundle-401cbc36-db1e-4fe0-bf90-6df331dde179.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Bundle-401cbc36-db1e-4fe0-bf90-6df331dde179.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
