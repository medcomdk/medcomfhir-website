<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgementtestscripts/2.0.0/Bundle-fd618b85-9376-45ac-b0bd-67b0541f4fa4.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgementtestscripts/2.0.0/Bundle-fd618b85-9376-45ac-b0bd-67b0541f4fa4.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgementtestscripts/2.0.0/Bundle-fd618b85-9376-45ac-b0bd-67b0541f4fa4.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgementtestscripts/2.0.0/Bundle-fd618b85-9376-45ac-b0bd-67b0541f4fa4.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgementtestscripts/2.0.0/Bundle-fd618b85-9376-45ac-b0bd-67b0541f4fa4.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgementtestscripts/2.0.0/Bundle-fd618b85-9376-45ac-b0bd-67b0541f4fa4.html');
else 
  Redirect('http://medcomfhir.dk/ig/acknowledgementtestscripts/2.0.0/Bundle-fd618b85-9376-45ac-b0bd-67b0541f4fa4.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
