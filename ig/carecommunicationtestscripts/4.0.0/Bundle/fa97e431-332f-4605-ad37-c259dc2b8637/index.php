<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.0/Bundle-fa97e431-332f-4605-ad37-c259dc2b8637.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.0/Bundle-fa97e431-332f-4605-ad37-c259dc2b8637.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.0/Bundle-fa97e431-332f-4605-ad37-c259dc2b8637.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.0/Bundle-fa97e431-332f-4605-ad37-c259dc2b8637.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.0/Bundle-fa97e431-332f-4605-ad37-c259dc2b8637.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.0/Bundle-fa97e431-332f-4605-ad37-c259dc2b8637.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.0/Bundle-fa97e431-332f-4605-ad37-c259dc2b8637.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.