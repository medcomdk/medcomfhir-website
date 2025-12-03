<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/Organization-72cc3a2c-1dda-4b95-b50a-0f7ac19640f4.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/Organization-72cc3a2c-1dda-4b95-b50a-0f7ac19640f4.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/Organization-72cc3a2c-1dda-4b95-b50a-0f7ac19640f4.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/Organization-72cc3a2c-1dda-4b95-b50a-0f7ac19640f4.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/Organization-72cc3a2c-1dda-4b95-b50a-0f7ac19640f4.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/Organization-72cc3a2c-1dda-4b95-b50a-0f7ac19640f4.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/Organization-72cc3a2c-1dda-4b95-b50a-0f7ac19640f4.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
