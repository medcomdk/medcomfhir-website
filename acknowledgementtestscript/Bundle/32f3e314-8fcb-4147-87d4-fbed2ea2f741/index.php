<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgementtestscripts/2.0.0/Bundle-32f3e314-8fcb-4147-87d4-fbed2ea2f741.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgementtestscripts/2.0.0/Bundle-32f3e314-8fcb-4147-87d4-fbed2ea2f741.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgementtestscripts/2.0.0/Bundle-32f3e314-8fcb-4147-87d4-fbed2ea2f741.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgementtestscripts/2.0.0/Bundle-32f3e314-8fcb-4147-87d4-fbed2ea2f741.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgementtestscripts/2.0.0/Bundle-32f3e314-8fcb-4147-87d4-fbed2ea2f741.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgementtestscripts/2.0.0/Bundle-32f3e314-8fcb-4147-87d4-fbed2ea2f741.html');
else 
  Redirect('http://medcomfhir.dk/ig/acknowledgementtestscripts/2.0.0/Bundle-32f3e314-8fcb-4147-87d4-fbed2ea2f741.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
