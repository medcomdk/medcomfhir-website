<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Organization-fd3206c6-c265-49f9-82c3-8b4c96280403.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Organization-fd3206c6-c265-49f9-82c3-8b4c96280403.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Organization-fd3206c6-c265-49f9-82c3-8b4c96280403.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Organization-fd3206c6-c265-49f9-82c3-8b4c96280403.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Organization-fd3206c6-c265-49f9-82c3-8b4c96280403.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Organization-fd3206c6-c265-49f9-82c3-8b4c96280403.html');
else 
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Organization-fd3206c6-c265-49f9-82c3-8b4c96280403.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
