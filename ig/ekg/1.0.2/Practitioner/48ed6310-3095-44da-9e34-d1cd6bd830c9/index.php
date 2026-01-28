<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/ekg/1.0.2/Practitioner-48ed6310-3095-44da-9e34-d1cd6bd830c9.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/ekg/1.0.2/Practitioner-48ed6310-3095-44da-9e34-d1cd6bd830c9.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/ekg/1.0.2/Practitioner-48ed6310-3095-44da-9e34-d1cd6bd830c9.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/ekg/1.0.2/Practitioner-48ed6310-3095-44da-9e34-d1cd6bd830c9.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/ekg/1.0.2/Practitioner-48ed6310-3095-44da-9e34-d1cd6bd830c9.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/ekg/1.0.2/Practitioner-48ed6310-3095-44da-9e34-d1cd6bd830c9.html');
else 
  Redirect('http://medcomfhir.dk/ig/ekg/1.0.2/Practitioner-48ed6310-3095-44da-9e34-d1cd6bd830c9.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
