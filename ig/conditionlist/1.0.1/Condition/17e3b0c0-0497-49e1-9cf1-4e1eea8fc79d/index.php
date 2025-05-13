<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Condition-17e3b0c0-0497-49e1-9cf1-4e1eea8fc79d.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Condition-17e3b0c0-0497-49e1-9cf1-4e1eea8fc79d.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Condition-17e3b0c0-0497-49e1-9cf1-4e1eea8fc79d.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Condition-17e3b0c0-0497-49e1-9cf1-4e1eea8fc79d.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Condition-17e3b0c0-0497-49e1-9cf1-4e1eea8fc79d.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Condition-17e3b0c0-0497-49e1-9cf1-4e1eea8fc79d.html');
else 
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Condition-17e3b0c0-0497-49e1-9cf1-4e1eea8fc79d.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
