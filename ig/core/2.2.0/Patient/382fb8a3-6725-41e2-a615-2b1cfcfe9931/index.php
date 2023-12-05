<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/core/2.2.0/Patient-382fb8a3-6725-41e2-a615-2b1cfcfe9931.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/core/2.2.0/Patient-382fb8a3-6725-41e2-a615-2b1cfcfe9931.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/core/2.2.0/Patient-382fb8a3-6725-41e2-a615-2b1cfcfe9931.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/core/2.2.0/Patient-382fb8a3-6725-41e2-a615-2b1cfcfe9931.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/core/2.2.0/Patient-382fb8a3-6725-41e2-a615-2b1cfcfe9931.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/core/2.2.0/Patient-382fb8a3-6725-41e2-a615-2b1cfcfe9931.html');
else 
  Redirect('http://medcomfhir.dk/ig/core/2.2.0/Patient-382fb8a3-6725-41e2-a615-2b1cfcfe9931.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
