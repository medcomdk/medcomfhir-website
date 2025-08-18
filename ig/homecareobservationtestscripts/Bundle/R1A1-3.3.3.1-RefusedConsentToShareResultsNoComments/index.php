<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservationtestscripts/1.0.0-draft/Bundle-R1A1-3.3.3.1-RefusedConsentToShareResultsNoComments.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservationtestscripts/1.0.0-draft/Bundle-R1A1-3.3.3.1-RefusedConsentToShareResultsNoComments.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservationtestscripts/1.0.0-draft/Bundle-R1A1-3.3.3.1-RefusedConsentToShareResultsNoComments.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservationtestscripts/1.0.0-draft/Bundle-R1A1-3.3.3.1-RefusedConsentToShareResultsNoComments.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservationtestscripts/1.0.0-draft/Bundle-R1A1-3.3.3.1-RefusedConsentToShareResultsNoComments.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservationtestscripts/1.0.0-draft/Bundle-R1A1-3.3.3.1-RefusedConsentToShareResultsNoComments.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservationtestscripts/1.0.0-draft/Bundle-R1A1-3.3.3.1-RefusedConsentToShareResultsNoComments.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
