<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Composition-15c083cc-2231-4786-beeb-2e6267655017.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Composition-15c083cc-2231-4786-beeb-2e6267655017.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Composition-15c083cc-2231-4786-beeb-2e6267655017.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Composition-15c083cc-2231-4786-beeb-2e6267655017.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Composition-15c083cc-2231-4786-beeb-2e6267655017.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Composition-15c083cc-2231-4786-beeb-2e6267655017.html');
else 
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Composition-15c083cc-2231-4786-beeb-2e6267655017.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
