<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Provenance-6de0806d-7050-4db8-8003-0c72aee52948.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Provenance-6de0806d-7050-4db8-8003-0c72aee52948.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Provenance-6de0806d-7050-4db8-8003-0c72aee52948.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Provenance-6de0806d-7050-4db8-8003-0c72aee52948.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Provenance-6de0806d-7050-4db8-8003-0c72aee52948.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Provenance-6de0806d-7050-4db8-8003-0c72aee52948.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Provenance-6de0806d-7050-4db8-8003-0c72aee52948.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
