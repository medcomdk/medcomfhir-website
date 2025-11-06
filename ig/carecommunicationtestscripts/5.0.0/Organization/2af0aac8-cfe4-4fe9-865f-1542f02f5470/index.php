<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-2af0aac8-cfe4-4fe9-865f-1542f02f5470.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-2af0aac8-cfe4-4fe9-865f-1542f02f5470.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-2af0aac8-cfe4-4fe9-865f-1542f02f5470.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-2af0aac8-cfe4-4fe9-865f-1542f02f5470.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-2af0aac8-cfe4-4fe9-865f-1542f02f5470.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-2af0aac8-cfe4-4fe9-865f-1542f02f5470.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Organization-2af0aac8-cfe4-4fe9-865f-1542f02f5470.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
