<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Composition-bff247c2-2330-450a-aa15-c15b85ab30b5.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Composition-bff247c2-2330-450a-aa15-c15b85ab30b5.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Composition-bff247c2-2330-450a-aa15-c15b85ab30b5.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Composition-bff247c2-2330-450a-aa15-c15b85ab30b5.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Composition-bff247c2-2330-450a-aa15-c15b85ab30b5.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Composition-bff247c2-2330-450a-aa15-c15b85ab30b5.html');
else 
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Composition-bff247c2-2330-450a-aa15-c15b85ab30b5.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
