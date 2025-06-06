<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.8.1/CodeSystem-medcom-messagedefinition-identifer-system.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.8.1/CodeSystem-medcom-messagedefinition-identifer-system.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.8.1/CodeSystem-medcom-messagedefinition-identifer-system.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.8.1/CodeSystem-medcom-messagedefinition-identifer-system.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.8.1/CodeSystem-medcom-messagedefinition-identifer-system.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.8.1/CodeSystem-medcom-messagedefinition-identifer-system.html');
else 
  Redirect('http://medcomfhir.dk/ig/terminology/1.8.1/CodeSystem-medcom-messagedefinition-identifer-system.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
