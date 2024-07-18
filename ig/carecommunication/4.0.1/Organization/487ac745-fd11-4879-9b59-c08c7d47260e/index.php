<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-487ac745-fd11-4879-9b59-c08c7d47260e.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-487ac745-fd11-4879-9b59-c08c7d47260e.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-487ac745-fd11-4879-9b59-c08c7d47260e.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-487ac745-fd11-4879-9b59-c08c7d47260e.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-487ac745-fd11-4879-9b59-c08c7d47260e.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-487ac745-fd11-4879-9b59-c08c7d47260e.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-487ac745-fd11-4879-9b59-c08c7d47260e.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
