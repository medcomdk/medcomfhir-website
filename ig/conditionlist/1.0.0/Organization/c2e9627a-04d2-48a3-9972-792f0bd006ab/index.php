<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Organization-c2e9627a-04d2-48a3-9972-792f0bd006ab.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Organization-c2e9627a-04d2-48a3-9972-792f0bd006ab.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Organization-c2e9627a-04d2-48a3-9972-792f0bd006ab.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Organization-c2e9627a-04d2-48a3-9972-792f0bd006ab.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Organization-c2e9627a-04d2-48a3-9972-792f0bd006ab.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Organization-c2e9627a-04d2-48a3-9972-792f0bd006ab.html');
else 
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Organization-c2e9627a-04d2-48a3-9972-792f0bd006ab.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
