<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Provenance-if89e89e-f8a3-4a88-b605-765008d1cb44.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Provenance-if89e89e-f8a3-4a88-b605-765008d1cb44.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Provenance-if89e89e-f8a3-4a88-b605-765008d1cb44.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Provenance-if89e89e-f8a3-4a88-b605-765008d1cb44.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Provenance-if89e89e-f8a3-4a88-b605-765008d1cb44.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Provenance-if89e89e-f8a3-4a88-b605-765008d1cb44.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Provenance-if89e89e-f8a3-4a88-b605-765008d1cb44.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.