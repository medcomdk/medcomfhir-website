<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/MessageHeader-b0d424f8-33a9-4cc2-a528-a6cc1c58727b.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/MessageHeader-b0d424f8-33a9-4cc2-a528-a6cc1c58727b.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/MessageHeader-b0d424f8-33a9-4cc2-a528-a6cc1c58727b.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/MessageHeader-b0d424f8-33a9-4cc2-a528-a6cc1c58727b.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/MessageHeader-b0d424f8-33a9-4cc2-a528-a6cc1c58727b.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/MessageHeader-b0d424f8-33a9-4cc2-a528-a6cc1c58727b.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/MessageHeader-b0d424f8-33a9-4cc2-a528-a6cc1c58727b.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
