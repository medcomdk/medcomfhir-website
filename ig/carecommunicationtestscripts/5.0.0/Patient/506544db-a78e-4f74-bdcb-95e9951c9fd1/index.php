<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Patient-506544db-a78e-4f74-bdcb-95e9951c9fd1.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Patient-506544db-a78e-4f74-bdcb-95e9951c9fd1.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Patient-506544db-a78e-4f74-bdcb-95e9951c9fd1.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Patient-506544db-a78e-4f74-bdcb-95e9951c9fd1.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Patient-506544db-a78e-4f74-bdcb-95e9951c9fd1.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Patient-506544db-a78e-4f74-bdcb-95e9951c9fd1.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Patient-506544db-a78e-4f74-bdcb-95e9951c9fd1.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
