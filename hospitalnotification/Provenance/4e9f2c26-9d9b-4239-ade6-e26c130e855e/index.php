<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Provenance-4e9f2c26-9d9b-4239-ade6-e26c130e855e.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Provenance-4e9f2c26-9d9b-4239-ade6-e26c130e855e.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Provenance-4e9f2c26-9d9b-4239-ade6-e26c130e855e.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Provenance-4e9f2c26-9d9b-4239-ade6-e26c130e855e.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Provenance-4e9f2c26-9d9b-4239-ade6-e26c130e855e.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Provenance-4e9f2c26-9d9b-4239-ade6-e26c130e855e.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Provenance-4e9f2c26-9d9b-4239-ade6-e26c130e855e.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
