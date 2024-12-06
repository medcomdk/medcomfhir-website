<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Practitioner-6397c13d-7cb2-4834-871c-47f528bb79cf.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Practitioner-6397c13d-7cb2-4834-871c-47f528bb79cf.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Practitioner-6397c13d-7cb2-4834-871c-47f528bb79cf.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Practitioner-6397c13d-7cb2-4834-871c-47f528bb79cf.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Practitioner-6397c13d-7cb2-4834-871c-47f528bb79cf.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Practitioner-6397c13d-7cb2-4834-871c-47f528bb79cf.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Practitioner-6397c13d-7cb2-4834-871c-47f528bb79cf.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
