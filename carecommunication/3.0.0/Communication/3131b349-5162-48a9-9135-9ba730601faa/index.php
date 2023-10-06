<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Communication-3131b349-5162-48a9-9135-9ba730601faa.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Communication-3131b349-5162-48a9-9135-9ba730601faa.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Communication-3131b349-5162-48a9-9135-9ba730601faa.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Communication-3131b349-5162-48a9-9135-9ba730601faa.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Communication-3131b349-5162-48a9-9135-9ba730601faa.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Communication-3131b349-5162-48a9-9135-9ba730601faa.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Communication-3131b349-5162-48a9-9135-9ba730601faa.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
