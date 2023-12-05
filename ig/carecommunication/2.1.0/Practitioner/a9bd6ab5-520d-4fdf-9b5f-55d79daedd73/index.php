<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Practitioner-a9bd6ab5-520d-4fdf-9b5f-55d79daedd73.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Practitioner-a9bd6ab5-520d-4fdf-9b5f-55d79daedd73.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Practitioner-a9bd6ab5-520d-4fdf-9b5f-55d79daedd73.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Practitioner-a9bd6ab5-520d-4fdf-9b5f-55d79daedd73.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Practitioner-a9bd6ab5-520d-4fdf-9b5f-55d79daedd73.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Practitioner-a9bd6ab5-520d-4fdf-9b5f-55d79daedd73.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Practitioner-a9bd6ab5-520d-4fdf-9b5f-55d79daedd73.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
