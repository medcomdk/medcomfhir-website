<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Provenance-j762d089-2298-4774-ae0b-f83f65bf5640.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Provenance-j762d089-2298-4774-ae0b-f83f65bf5640.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Provenance-j762d089-2298-4774-ae0b-f83f65bf5640.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Provenance-j762d089-2298-4774-ae0b-f83f65bf5640.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Provenance-j762d089-2298-4774-ae0b-f83f65bf5640.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Provenance-j762d089-2298-4774-ae0b-f83f65bf5640.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Provenance-j762d089-2298-4774-ae0b-f83f65bf5640.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
