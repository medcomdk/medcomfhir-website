<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgementtestscripts/2.0.0/TestScript-acknowledgement-receive-transient-error-ok.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgementtestscripts/2.0.0/TestScript-acknowledgement-receive-transient-error-ok.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgementtestscripts/2.0.0/TestScript-acknowledgement-receive-transient-error-ok.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgementtestscripts/2.0.0/TestScript-acknowledgement-receive-transient-error-ok.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgementtestscripts/2.0.0/TestScript-acknowledgement-receive-transient-error-ok.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgementtestscripts/2.0.0/TestScript-acknowledgement-receive-transient-error-ok.html');
else 
  Redirect('http://medcomfhir.dk/ig/acknowledgementtestscripts/2.0.0/TestScript-acknowledgement-receive-transient-error-ok.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
