<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/Organization-bf24f51c-a99b-47db-a785-8c5ef22ebc27.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/Organization-bf24f51c-a99b-47db-a785-8c5ef22ebc27.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/Organization-bf24f51c-a99b-47db-a785-8c5ef22ebc27.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/Organization-bf24f51c-a99b-47db-a785-8c5ef22ebc27.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/Organization-bf24f51c-a99b-47db-a785-8c5ef22ebc27.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/Organization-bf24f51c-a99b-47db-a785-8c5ef22ebc27.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/Organization-bf24f51c-a99b-47db-a785-8c5ef22ebc27.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
