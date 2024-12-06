<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Practitioner-8659596f-6ef4-421c-9ecd-94b65e4d5ff8.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Practitioner-8659596f-6ef4-421c-9ecd-94b65e4d5ff8.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Practitioner-8659596f-6ef4-421c-9ecd-94b65e4d5ff8.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Practitioner-8659596f-6ef4-421c-9ecd-94b65e4d5ff8.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Practitioner-8659596f-6ef4-421c-9ecd-94b65e4d5ff8.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Practitioner-8659596f-6ef4-421c-9ecd-94b65e4d5ff8.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Practitioner-8659596f-6ef4-421c-9ecd-94b65e4d5ff8.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
