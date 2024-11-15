<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Patient-69e475df-20c8-4f54-8cea-9843568205fd.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Patient-69e475df-20c8-4f54-8cea-9843568205fd.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Patient-69e475df-20c8-4f54-8cea-9843568205fd.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Patient-69e475df-20c8-4f54-8cea-9843568205fd.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Patient-69e475df-20c8-4f54-8cea-9843568205fd.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Patient-69e475df-20c8-4f54-8cea-9843568205fd.html');
else 
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Patient-69e475df-20c8-4f54-8cea-9843568205fd.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
