<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Patient-170b6e56-125d-42bf-9002-298166c4ff98.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Patient-170b6e56-125d-42bf-9002-298166c4ff98.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Patient-170b6e56-125d-42bf-9002-298166c4ff98.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Patient-170b6e56-125d-42bf-9002-298166c4ff98.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Patient-170b6e56-125d-42bf-9002-298166c4ff98.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Patient-170b6e56-125d-42bf-9002-298166c4ff98.html');
else 
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Patient-170b6e56-125d-42bf-9002-298166c4ff98.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
