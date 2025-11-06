<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-2414b445-665f-41af-9ecd-b97c0b58c081.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-2414b445-665f-41af-9ecd-b97c0b58c081.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-2414b445-665f-41af-9ecd-b97c0b58c081.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-2414b445-665f-41af-9ecd-b97c0b58c081.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-2414b445-665f-41af-9ecd-b97c0b58c081.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-2414b445-665f-41af-9ecd-b97c0b58c081.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-2414b445-665f-41af-9ecd-b97c0b58c081.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
