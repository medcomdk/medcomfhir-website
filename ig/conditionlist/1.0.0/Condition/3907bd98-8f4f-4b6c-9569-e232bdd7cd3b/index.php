<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Condition-3907bd98-8f4f-4b6c-9569-e232bdd7cd3b.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Condition-3907bd98-8f4f-4b6c-9569-e232bdd7cd3b.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Condition-3907bd98-8f4f-4b6c-9569-e232bdd7cd3b.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Condition-3907bd98-8f4f-4b6c-9569-e232bdd7cd3b.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Condition-3907bd98-8f4f-4b6c-9569-e232bdd7cd3b.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Condition-3907bd98-8f4f-4b6c-9569-e232bdd7cd3b.html');
else 
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Condition-3907bd98-8f4f-4b6c-9569-e232bdd7cd3b.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
