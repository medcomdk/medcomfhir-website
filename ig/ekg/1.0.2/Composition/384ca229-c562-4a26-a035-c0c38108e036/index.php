<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/ekg/1.0.2/Composition-384ca229-c562-4a26-a035-c0c38108e036.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/ekg/1.0.2/Composition-384ca229-c562-4a26-a035-c0c38108e036.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/ekg/1.0.2/Composition-384ca229-c562-4a26-a035-c0c38108e036.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/ekg/1.0.2/Composition-384ca229-c562-4a26-a035-c0c38108e036.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/ekg/1.0.2/Composition-384ca229-c562-4a26-a035-c0c38108e036.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/ekg/1.0.2/Composition-384ca229-c562-4a26-a035-c0c38108e036.html');
else 
  Redirect('http://medcomfhir.dk/ig/ekg/1.0.2/Composition-384ca229-c562-4a26-a035-c0c38108e036.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
