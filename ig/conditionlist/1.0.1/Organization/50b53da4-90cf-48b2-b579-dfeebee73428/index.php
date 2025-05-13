<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Organization-50b53da4-90cf-48b2-b579-dfeebee73428.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Organization-50b53da4-90cf-48b2-b579-dfeebee73428.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Organization-50b53da4-90cf-48b2-b579-dfeebee73428.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Organization-50b53da4-90cf-48b2-b579-dfeebee73428.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Organization-50b53da4-90cf-48b2-b579-dfeebee73428.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Organization-50b53da4-90cf-48b2-b579-dfeebee73428.html');
else 
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Organization-50b53da4-90cf-48b2-b579-dfeebee73428.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
