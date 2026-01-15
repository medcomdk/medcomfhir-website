<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/ekg/1.0.1/Organization-f8d0eb07-5336-4005-9081-b065f9a82663.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/ekg/1.0.1/Organization-f8d0eb07-5336-4005-9081-b065f9a82663.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/ekg/1.0.1/Organization-f8d0eb07-5336-4005-9081-b065f9a82663.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/ekg/1.0.1/Organization-f8d0eb07-5336-4005-9081-b065f9a82663.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/ekg/1.0.1/Organization-f8d0eb07-5336-4005-9081-b065f9a82663.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/ekg/1.0.1/Organization-f8d0eb07-5336-4005-9081-b065f9a82663.html');
else 
  Redirect('http://medcomfhir.dk/ig/ekg/1.0.1/Organization-f8d0eb07-5336-4005-9081-b065f9a82663.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
