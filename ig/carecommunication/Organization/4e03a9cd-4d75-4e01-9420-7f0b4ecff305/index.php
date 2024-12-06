<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Organization-4e03a9cd-4d75-4e01-9420-7f0b4ecff305.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Organization-4e03a9cd-4d75-4e01-9420-7f0b4ecff305.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Organization-4e03a9cd-4d75-4e01-9420-7f0b4ecff305.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Organization-4e03a9cd-4d75-4e01-9420-7f0b4ecff305.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Organization-4e03a9cd-4d75-4e01-9420-7f0b4ecff305.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Organization-4e03a9cd-4d75-4e01-9420-7f0b4ecff305.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Organization-4e03a9cd-4d75-4e01-9420-7f0b4ecff305.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
