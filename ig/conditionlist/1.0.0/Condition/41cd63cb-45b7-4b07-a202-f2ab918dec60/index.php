<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Condition-41cd63cb-45b7-4b07-a202-f2ab918dec60.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Condition-41cd63cb-45b7-4b07-a202-f2ab918dec60.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Condition-41cd63cb-45b7-4b07-a202-f2ab918dec60.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Condition-41cd63cb-45b7-4b07-a202-f2ab918dec60.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Condition-41cd63cb-45b7-4b07-a202-f2ab918dec60.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Condition-41cd63cb-45b7-4b07-a202-f2ab918dec60.html');
else 
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Condition-41cd63cb-45b7-4b07-a202-f2ab918dec60.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
