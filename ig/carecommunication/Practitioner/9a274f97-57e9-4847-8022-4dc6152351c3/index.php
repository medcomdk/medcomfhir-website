<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Practitioner-9a274f97-57e9-4847-8022-4dc6152351c3.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Practitioner-9a274f97-57e9-4847-8022-4dc6152351c3.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Practitioner-9a274f97-57e9-4847-8022-4dc6152351c3.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Practitioner-9a274f97-57e9-4847-8022-4dc6152351c3.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Practitioner-9a274f97-57e9-4847-8022-4dc6152351c3.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Practitioner-9a274f97-57e9-4847-8022-4dc6152351c3.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Practitioner-9a274f97-57e9-4847-8022-4dc6152351c3.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
