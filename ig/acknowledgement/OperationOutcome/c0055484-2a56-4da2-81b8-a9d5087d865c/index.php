<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.1/OperationOutcome-c0055484-2a56-4da2-81b8-a9d5087d865c.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.1/OperationOutcome-c0055484-2a56-4da2-81b8-a9d5087d865c.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.1/OperationOutcome-c0055484-2a56-4da2-81b8-a9d5087d865c.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.1/OperationOutcome-c0055484-2a56-4da2-81b8-a9d5087d865c.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.1/OperationOutcome-c0055484-2a56-4da2-81b8-a9d5087d865c.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.1/OperationOutcome-c0055484-2a56-4da2-81b8-a9d5087d865c.html');
else 
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.1/OperationOutcome-c0055484-2a56-4da2-81b8-a9d5087d865c.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
