<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.0.0/MessageHeader-d5bd2111-2576-48d3-84d4-8be0297a038d.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.0.0/MessageHeader-d5bd2111-2576-48d3-84d4-8be0297a038d.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.0.0/MessageHeader-d5bd2111-2576-48d3-84d4-8be0297a038d.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.0.0/MessageHeader-d5bd2111-2576-48d3-84d4-8be0297a038d.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.0.0/MessageHeader-d5bd2111-2576-48d3-84d4-8be0297a038d.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.0.0/MessageHeader-d5bd2111-2576-48d3-84d4-8be0297a038d.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.0.0/MessageHeader-d5bd2111-2576-48d3-84d4-8be0297a038d.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
