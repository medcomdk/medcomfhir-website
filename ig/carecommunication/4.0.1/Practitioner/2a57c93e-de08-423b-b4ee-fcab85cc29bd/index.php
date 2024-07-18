<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Practitioner-2a57c93e-de08-423b-b4ee-fcab85cc29bd.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Practitioner-2a57c93e-de08-423b-b4ee-fcab85cc29bd.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Practitioner-2a57c93e-de08-423b-b4ee-fcab85cc29bd.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Practitioner-2a57c93e-de08-423b-b4ee-fcab85cc29bd.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Practitioner-2a57c93e-de08-423b-b4ee-fcab85cc29bd.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Practitioner-2a57c93e-de08-423b-b4ee-fcab85cc29bd.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Practitioner-2a57c93e-de08-423b-b4ee-fcab85cc29bd.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
