<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Communication-d8434eb5-8286-48f8-a590-4a27175ed82f.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Communication-d8434eb5-8286-48f8-a590-4a27175ed82f.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Communication-d8434eb5-8286-48f8-a590-4a27175ed82f.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Communication-d8434eb5-8286-48f8-a590-4a27175ed82f.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Communication-d8434eb5-8286-48f8-a590-4a27175ed82f.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Communication-d8434eb5-8286-48f8-a590-4a27175ed82f.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Communication-d8434eb5-8286-48f8-a590-4a27175ed82f.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
