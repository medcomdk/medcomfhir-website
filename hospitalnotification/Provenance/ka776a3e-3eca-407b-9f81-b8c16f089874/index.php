<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Provenance-ka776a3e-3eca-407b-9f81-b8c16f089874.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Provenance-ka776a3e-3eca-407b-9f81-b8c16f089874.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Provenance-ka776a3e-3eca-407b-9f81-b8c16f089874.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Provenance-ka776a3e-3eca-407b-9f81-b8c16f089874.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Provenance-ka776a3e-3eca-407b-9f81-b8c16f089874.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Provenance-ka776a3e-3eca-407b-9f81-b8c16f089874.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Provenance-ka776a3e-3eca-407b-9f81-b8c16f089874.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
