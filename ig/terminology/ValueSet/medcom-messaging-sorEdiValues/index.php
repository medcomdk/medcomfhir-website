<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.8.1/ValueSet-medcom-messaging-sorEdiValues.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.8.1/ValueSet-medcom-messaging-sorEdiValues.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.8.1/ValueSet-medcom-messaging-sorEdiValues.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.8.1/ValueSet-medcom-messaging-sorEdiValues.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.8.1/ValueSet-medcom-messaging-sorEdiValues.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.8.1/ValueSet-medcom-messaging-sorEdiValues.html');
else 
  Redirect('http://medcomfhir.dk/ig/terminology/1.8.1/ValueSet-medcom-messaging-sorEdiValues.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
