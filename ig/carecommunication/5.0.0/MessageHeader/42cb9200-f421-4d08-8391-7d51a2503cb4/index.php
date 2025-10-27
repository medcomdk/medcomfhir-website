<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0/MessageHeader-42cb9200-f421-4d08-8391-7d51a2503cb4.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0/MessageHeader-42cb9200-f421-4d08-8391-7d51a2503cb4.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0/MessageHeader-42cb9200-f421-4d08-8391-7d51a2503cb4.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0/MessageHeader-42cb9200-f421-4d08-8391-7d51a2503cb4.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0/MessageHeader-42cb9200-f421-4d08-8391-7d51a2503cb4.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0/MessageHeader-42cb9200-f421-4d08-8391-7d51a2503cb4.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0/MessageHeader-42cb9200-f421-4d08-8391-7d51a2503cb4.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
