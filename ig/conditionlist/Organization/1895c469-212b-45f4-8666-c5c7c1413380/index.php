<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Organization-1895c469-212b-45f4-8666-c5c7c1413380.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Organization-1895c469-212b-45f4-8666-c5c7c1413380.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Organization-1895c469-212b-45f4-8666-c5c7c1413380.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Organization-1895c469-212b-45f4-8666-c5c7c1413380.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Organization-1895c469-212b-45f4-8666-c5c7c1413380.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Organization-1895c469-212b-45f4-8666-c5c7c1413380.html');
else 
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Organization-1895c469-212b-45f4-8666-c5c7c1413380.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
