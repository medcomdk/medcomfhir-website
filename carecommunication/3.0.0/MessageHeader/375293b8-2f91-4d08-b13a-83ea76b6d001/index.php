<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/MessageHeader-375293b8-2f91-4d08-b13a-83ea76b6d001.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/MessageHeader-375293b8-2f91-4d08-b13a-83ea76b6d001.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/MessageHeader-375293b8-2f91-4d08-b13a-83ea76b6d001.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/MessageHeader-375293b8-2f91-4d08-b13a-83ea76b6d001.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/MessageHeader-375293b8-2f91-4d08-b13a-83ea76b6d001.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/MessageHeader-375293b8-2f91-4d08-b13a-83ea76b6d001.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/MessageHeader-375293b8-2f91-4d08-b13a-83ea76b6d001.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
