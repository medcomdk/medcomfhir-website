<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/MessageHeader-aac67161-d0de-4933-a78c-060beafb4814.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/MessageHeader-aac67161-d0de-4933-a78c-060beafb4814.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/MessageHeader-aac67161-d0de-4933-a78c-060beafb4814.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/MessageHeader-aac67161-d0de-4933-a78c-060beafb4814.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/MessageHeader-aac67161-d0de-4933-a78c-060beafb4814.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/MessageHeader-aac67161-d0de-4933-a78c-060beafb4814.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/MessageHeader-aac67161-d0de-4933-a78c-060beafb4814.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
