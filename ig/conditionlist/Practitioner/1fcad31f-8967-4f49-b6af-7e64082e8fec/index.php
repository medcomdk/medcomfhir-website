<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Practitioner-1fcad31f-8967-4f49-b6af-7e64082e8fec.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Practitioner-1fcad31f-8967-4f49-b6af-7e64082e8fec.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Practitioner-1fcad31f-8967-4f49-b6af-7e64082e8fec.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Practitioner-1fcad31f-8967-4f49-b6af-7e64082e8fec.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Practitioner-1fcad31f-8967-4f49-b6af-7e64082e8fec.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Practitioner-1fcad31f-8967-4f49-b6af-7e64082e8fec.html');
else 
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Practitioner-1fcad31f-8967-4f49-b6af-7e64082e8fec.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
