<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Practitioner-7c7f31d6-690d-11ed-9022-0242ac120002.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Practitioner-7c7f31d6-690d-11ed-9022-0242ac120002.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Practitioner-7c7f31d6-690d-11ed-9022-0242ac120002.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Practitioner-7c7f31d6-690d-11ed-9022-0242ac120002.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Practitioner-7c7f31d6-690d-11ed-9022-0242ac120002.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Practitioner-7c7f31d6-690d-11ed-9022-0242ac120002.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Practitioner-7c7f31d6-690d-11ed-9022-0242ac120002.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
