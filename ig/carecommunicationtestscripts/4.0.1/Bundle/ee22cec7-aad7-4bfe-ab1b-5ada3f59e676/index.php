<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-ee22cec7-aad7-4bfe-ab1b-5ada3f59e676.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-ee22cec7-aad7-4bfe-ab1b-5ada3f59e676.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-ee22cec7-aad7-4bfe-ab1b-5ada3f59e676.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-ee22cec7-aad7-4bfe-ab1b-5ada3f59e676.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-ee22cec7-aad7-4bfe-ab1b-5ada3f59e676.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-ee22cec7-aad7-4bfe-ab1b-5ada3f59e676.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-ee22cec7-aad7-4bfe-ab1b-5ada3f59e676.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
