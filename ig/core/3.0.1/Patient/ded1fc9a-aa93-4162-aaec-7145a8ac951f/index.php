<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/core/3.0.1/Patient-ded1fc9a-aa93-4162-aaec-7145a8ac951f.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/core/3.0.1/Patient-ded1fc9a-aa93-4162-aaec-7145a8ac951f.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/core/3.0.1/Patient-ded1fc9a-aa93-4162-aaec-7145a8ac951f.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/core/3.0.1/Patient-ded1fc9a-aa93-4162-aaec-7145a8ac951f.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/core/3.0.1/Patient-ded1fc9a-aa93-4162-aaec-7145a8ac951f.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/core/3.0.1/Patient-ded1fc9a-aa93-4162-aaec-7145a8ac951f.html');
else 
  Redirect('http://medcomfhir.dk/ig/core/3.0.1/Patient-ded1fc9a-aa93-4162-aaec-7145a8ac951f.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
