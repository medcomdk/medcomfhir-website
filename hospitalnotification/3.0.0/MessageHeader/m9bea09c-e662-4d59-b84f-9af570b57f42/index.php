<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/MessageHeader-m9bea09c-e662-4d59-b84f-9af570b57f42.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/MessageHeader-m9bea09c-e662-4d59-b84f-9af570b57f42.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/MessageHeader-m9bea09c-e662-4d59-b84f-9af570b57f42.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/MessageHeader-m9bea09c-e662-4d59-b84f-9af570b57f42.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/MessageHeader-m9bea09c-e662-4d59-b84f-9af570b57f42.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/MessageHeader-m9bea09c-e662-4d59-b84f-9af570b57f42.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/MessageHeader-m9bea09c-e662-4d59-b84f-9af570b57f42.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
