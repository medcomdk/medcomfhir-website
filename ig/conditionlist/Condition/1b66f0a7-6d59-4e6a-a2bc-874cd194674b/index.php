<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Condition-1b66f0a7-6d59-4e6a-a2bc-874cd194674b.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Condition-1b66f0a7-6d59-4e6a-a2bc-874cd194674b.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Condition-1b66f0a7-6d59-4e6a-a2bc-874cd194674b.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Condition-1b66f0a7-6d59-4e6a-a2bc-874cd194674b.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Condition-1b66f0a7-6d59-4e6a-a2bc-874cd194674b.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Condition-1b66f0a7-6d59-4e6a-a2bc-874cd194674b.html');
else 
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Condition-1b66f0a7-6d59-4e6a-a2bc-874cd194674b.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.