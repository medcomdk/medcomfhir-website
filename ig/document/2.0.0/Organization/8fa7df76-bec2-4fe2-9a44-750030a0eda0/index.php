<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/document/2.0.0/Organization-8fa7df76-bec2-4fe2-9a44-750030a0eda0.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/document/2.0.0/Organization-8fa7df76-bec2-4fe2-9a44-750030a0eda0.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/document/2.0.0/Organization-8fa7df76-bec2-4fe2-9a44-750030a0eda0.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/document/2.0.0/Organization-8fa7df76-bec2-4fe2-9a44-750030a0eda0.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/document/2.0.0/Organization-8fa7df76-bec2-4fe2-9a44-750030a0eda0.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/document/2.0.0/Organization-8fa7df76-bec2-4fe2-9a44-750030a0eda0.html');
else 
  Redirect('http://medcomfhir.dk/ig/document/2.0.0/Organization-8fa7df76-bec2-4fe2-9a44-750030a0eda0.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
