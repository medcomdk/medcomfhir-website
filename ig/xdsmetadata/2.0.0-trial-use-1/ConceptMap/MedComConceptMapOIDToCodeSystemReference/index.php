<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsmetadata/2.0.0-trial-use-1/ConceptMap-MedComConceptMapOIDToCodeSystemReference.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsmetadata/2.0.0-trial-use-1/ConceptMap-MedComConceptMapOIDToCodeSystemReference.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsmetadata/2.0.0-trial-use-1/ConceptMap-MedComConceptMapOIDToCodeSystemReference.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsmetadata/2.0.0-trial-use-1/ConceptMap-MedComConceptMapOIDToCodeSystemReference.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsmetadata/2.0.0-trial-use-1/ConceptMap-MedComConceptMapOIDToCodeSystemReference.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsmetadata/2.0.0-trial-use-1/ConceptMap-MedComConceptMapOIDToCodeSystemReference.html');
else 
  Redirect('http://medcomfhir.dk/ig/xdsmetadata/2.0.0-trial-use-1/ConceptMap-MedComConceptMapOIDToCodeSystemReference.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
