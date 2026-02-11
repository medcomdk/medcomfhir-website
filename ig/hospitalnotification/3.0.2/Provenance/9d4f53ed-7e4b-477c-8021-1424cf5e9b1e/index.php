<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.2/Provenance-9d4f53ed-7e4b-477c-8021-1424cf5e9b1e.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.2/Provenance-9d4f53ed-7e4b-477c-8021-1424cf5e9b1e.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.2/Provenance-9d4f53ed-7e4b-477c-8021-1424cf5e9b1e.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.2/Provenance-9d4f53ed-7e4b-477c-8021-1424cf5e9b1e.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.2/Provenance-9d4f53ed-7e4b-477c-8021-1424cf5e9b1e.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.2/Provenance-9d4f53ed-7e4b-477c-8021-1424cf5e9b1e.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.2/Provenance-9d4f53ed-7e4b-477c-8021-1424cf5e9b1e.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
