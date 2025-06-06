<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Patient-da0f8262-1be9-420c-98fb-ecc7b5a2333c.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Patient-da0f8262-1be9-420c-98fb-ecc7b5a2333c.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Patient-da0f8262-1be9-420c-98fb-ecc7b5a2333c.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Patient-da0f8262-1be9-420c-98fb-ecc7b5a2333c.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Patient-da0f8262-1be9-420c-98fb-ecc7b5a2333c.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Patient-da0f8262-1be9-420c-98fb-ecc7b5a2333c.html');
else 
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Patient-da0f8262-1be9-420c-98fb-ecc7b5a2333c.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
