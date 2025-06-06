<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.8.1/ConceptMap-medcom-messaging-mapFhirToSorEdi.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.8.1/ConceptMap-medcom-messaging-mapFhirToSorEdi.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.8.1/ConceptMap-medcom-messaging-mapFhirToSorEdi.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.8.1/ConceptMap-medcom-messaging-mapFhirToSorEdi.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.8.1/ConceptMap-medcom-messaging-mapFhirToSorEdi.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.8.1/ConceptMap-medcom-messaging-mapFhirToSorEdi.html');
else 
  Redirect('http://medcomfhir.dk/ig/terminology/1.8.1/ConceptMap-medcom-messaging-mapFhirToSorEdi.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
