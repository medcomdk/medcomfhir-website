<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Patient-be8156f3-41d1-47e3-847a-4b064a3b42b2.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Patient-be8156f3-41d1-47e3-847a-4b064a3b42b2.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Patient-be8156f3-41d1-47e3-847a-4b064a3b42b2.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Patient-be8156f3-41d1-47e3-847a-4b064a3b42b2.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Patient-be8156f3-41d1-47e3-847a-4b064a3b42b2.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Patient-be8156f3-41d1-47e3-847a-4b064a3b42b2.html');
else 
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Patient-be8156f3-41d1-47e3-847a-4b064a3b42b2.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
