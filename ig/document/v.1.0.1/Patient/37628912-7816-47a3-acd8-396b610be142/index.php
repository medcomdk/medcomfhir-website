<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/document/v.1.0.1/Patient-37628912-7816-47a3-acd8-396b610be142.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/document/v.1.0.1/Patient-37628912-7816-47a3-acd8-396b610be142.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/document/v.1.0.1/Patient-37628912-7816-47a3-acd8-396b610be142.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/document/v.1.0.1/Patient-37628912-7816-47a3-acd8-396b610be142.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/document/v.1.0.1/Patient-37628912-7816-47a3-acd8-396b610be142.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/document/v.1.0.1/Patient-37628912-7816-47a3-acd8-396b610be142.html');
else 
  Redirect('http://medcomfhir.dk/ig/document/v.1.0.1/Patient-37628912-7816-47a3-acd8-396b610be142.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
