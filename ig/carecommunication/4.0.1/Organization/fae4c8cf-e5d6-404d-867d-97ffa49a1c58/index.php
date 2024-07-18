<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-fae4c8cf-e5d6-404d-867d-97ffa49a1c58.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-fae4c8cf-e5d6-404d-867d-97ffa49a1c58.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-fae4c8cf-e5d6-404d-867d-97ffa49a1c58.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-fae4c8cf-e5d6-404d-867d-97ffa49a1c58.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-fae4c8cf-e5d6-404d-867d-97ffa49a1c58.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-fae4c8cf-e5d6-404d-867d-97ffa49a1c58.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-fae4c8cf-e5d6-404d-867d-97ffa49a1c58.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
