<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Patient-d65cd8db-4520-4264-87be-a5fd01fb9762.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Patient-d65cd8db-4520-4264-87be-a5fd01fb9762.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Patient-d65cd8db-4520-4264-87be-a5fd01fb9762.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Patient-d65cd8db-4520-4264-87be-a5fd01fb9762.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Patient-d65cd8db-4520-4264-87be-a5fd01fb9762.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Patient-d65cd8db-4520-4264-87be-a5fd01fb9762.html');
else 
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Patient-d65cd8db-4520-4264-87be-a5fd01fb9762.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
