<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-c39b114b-a9c1-46bb-ac30-e3ce71f28c3a.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-c39b114b-a9c1-46bb-ac30-e3ce71f28c3a.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-c39b114b-a9c1-46bb-ac30-e3ce71f28c3a.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-c39b114b-a9c1-46bb-ac30-e3ce71f28c3a.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-c39b114b-a9c1-46bb-ac30-e3ce71f28c3a.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-c39b114b-a9c1-46bb-ac30-e3ce71f28c3a.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-c39b114b-a9c1-46bb-ac30-e3ce71f28c3a.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
