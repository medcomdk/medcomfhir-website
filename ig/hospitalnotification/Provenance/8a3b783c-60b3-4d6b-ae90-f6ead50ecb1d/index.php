<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.2/Provenance-8a3b783c-60b3-4d6b-ae90-f6ead50ecb1d.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.2/Provenance-8a3b783c-60b3-4d6b-ae90-f6ead50ecb1d.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.2/Provenance-8a3b783c-60b3-4d6b-ae90-f6ead50ecb1d.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.2/Provenance-8a3b783c-60b3-4d6b-ae90-f6ead50ecb1d.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.2/Provenance-8a3b783c-60b3-4d6b-ae90-f6ead50ecb1d.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.2/Provenance-8a3b783c-60b3-4d6b-ae90-f6ead50ecb1d.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.2/Provenance-8a3b783c-60b3-4d6b-ae90-f6ead50ecb1d.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
