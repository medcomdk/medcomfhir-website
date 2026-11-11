<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/core/4.0.0/Organization-bca68510-fe3b-4161-aba0-908a693eb54f.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/core/4.0.0/Organization-bca68510-fe3b-4161-aba0-908a693eb54f.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/core/4.0.0/Organization-bca68510-fe3b-4161-aba0-908a693eb54f.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/core/4.0.0/Organization-bca68510-fe3b-4161-aba0-908a693eb54f.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/core/4.0.0/Organization-bca68510-fe3b-4161-aba0-908a693eb54f.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/core/4.0.0/Organization-bca68510-fe3b-4161-aba0-908a693eb54f.html');
else 
  Redirect('http://medcomfhir.dk/ig/core/4.0.0/Organization-bca68510-fe3b-4161-aba0-908a693eb54f.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
