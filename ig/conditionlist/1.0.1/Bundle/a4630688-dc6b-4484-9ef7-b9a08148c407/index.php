<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Bundle-a4630688-dc6b-4484-9ef7-b9a08148c407.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Bundle-a4630688-dc6b-4484-9ef7-b9a08148c407.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Bundle-a4630688-dc6b-4484-9ef7-b9a08148c407.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Bundle-a4630688-dc6b-4484-9ef7-b9a08148c407.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Bundle-a4630688-dc6b-4484-9ef7-b9a08148c407.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Bundle-a4630688-dc6b-4484-9ef7-b9a08148c407.html');
else 
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Bundle-a4630688-dc6b-4484-9ef7-b9a08148c407.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
