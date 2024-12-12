<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-0c8dddf2-c882-4b00-8870-5035279e7d01.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-0c8dddf2-c882-4b00-8870-5035279e7d01.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-0c8dddf2-c882-4b00-8870-5035279e7d01.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-0c8dddf2-c882-4b00-8870-5035279e7d01.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-0c8dddf2-c882-4b00-8870-5035279e7d01.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-0c8dddf2-c882-4b00-8870-5035279e7d01.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-0c8dddf2-c882-4b00-8870-5035279e7d01.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
