<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Condition-2f703d89-787d-418f-a804-b986aa181492.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Condition-2f703d89-787d-418f-a804-b986aa181492.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Condition-2f703d89-787d-418f-a804-b986aa181492.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Condition-2f703d89-787d-418f-a804-b986aa181492.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Condition-2f703d89-787d-418f-a804-b986aa181492.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Condition-2f703d89-787d-418f-a804-b986aa181492.html');
else 
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Condition-2f703d89-787d-418f-a804-b986aa181492.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
