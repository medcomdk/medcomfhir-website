<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0/Organization-b3860fb8-4b1d-4be5-8290-e6a026d10555.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0/Organization-b3860fb8-4b1d-4be5-8290-e6a026d10555.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0/Organization-b3860fb8-4b1d-4be5-8290-e6a026d10555.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0/Organization-b3860fb8-4b1d-4be5-8290-e6a026d10555.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0/Organization-b3860fb8-4b1d-4be5-8290-e6a026d10555.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0/Organization-b3860fb8-4b1d-4be5-8290-e6a026d10555.html');
else 
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0/Organization-b3860fb8-4b1d-4be5-8290-e6a026d10555.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
