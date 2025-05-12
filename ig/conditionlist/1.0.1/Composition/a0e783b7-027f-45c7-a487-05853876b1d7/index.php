<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Composition-a0e783b7-027f-45c7-a487-05853876b1d7.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Composition-a0e783b7-027f-45c7-a487-05853876b1d7.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Composition-a0e783b7-027f-45c7-a487-05853876b1d7.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Composition-a0e783b7-027f-45c7-a487-05853876b1d7.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Composition-a0e783b7-027f-45c7-a487-05853876b1d7.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Composition-a0e783b7-027f-45c7-a487-05853876b1d7.html');
else 
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Composition-a0e783b7-027f-45c7-a487-05853876b1d7.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
