<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Patient-ea75a3fe-b8f7-4326-9a12-8c950c63dd6f.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Patient-ea75a3fe-b8f7-4326-9a12-8c950c63dd6f.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Patient-ea75a3fe-b8f7-4326-9a12-8c950c63dd6f.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Patient-ea75a3fe-b8f7-4326-9a12-8c950c63dd6f.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Patient-ea75a3fe-b8f7-4326-9a12-8c950c63dd6f.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Patient-ea75a3fe-b8f7-4326-9a12-8c950c63dd6f.html');
else 
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Patient-ea75a3fe-b8f7-4326-9a12-8c950c63dd6f.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
