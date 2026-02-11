<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.2/Provenance-1b2e59fe-d6d3-457c-9c5c-3de1711a8a0b.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.2/Provenance-1b2e59fe-d6d3-457c-9c5c-3de1711a8a0b.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.2/Provenance-1b2e59fe-d6d3-457c-9c5c-3de1711a8a0b.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.2/Provenance-1b2e59fe-d6d3-457c-9c5c-3de1711a8a0b.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.2/Provenance-1b2e59fe-d6d3-457c-9c5c-3de1711a8a0b.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.2/Provenance-1b2e59fe-d6d3-457c-9c5c-3de1711a8a0b.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.2/Provenance-1b2e59fe-d6d3-457c-9c5c-3de1711a8a0b.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
