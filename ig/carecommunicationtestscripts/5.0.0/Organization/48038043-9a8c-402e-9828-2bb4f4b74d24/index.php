<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-48038043-9a8c-402e-9828-2bb4f4b74d24.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-48038043-9a8c-402e-9828-2bb4f4b74d24.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-48038043-9a8c-402e-9828-2bb4f4b74d24.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-48038043-9a8c-402e-9828-2bb4f4b74d24.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-48038043-9a8c-402e-9828-2bb4f4b74d24.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-48038043-9a8c-402e-9828-2bb4f4b74d24.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-48038043-9a8c-402e-9828-2bb4f4b74d24.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
