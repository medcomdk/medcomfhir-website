<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Provenance-5c748aa5-64ab-47a9-a74b-033b04a19dae.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Provenance-5c748aa5-64ab-47a9-a74b-033b04a19dae.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Provenance-5c748aa5-64ab-47a9-a74b-033b04a19dae.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Provenance-5c748aa5-64ab-47a9-a74b-033b04a19dae.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Provenance-5c748aa5-64ab-47a9-a74b-033b04a19dae.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Provenance-5c748aa5-64ab-47a9-a74b-033b04a19dae.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Provenance-5c748aa5-64ab-47a9-a74b-033b04a19dae.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
