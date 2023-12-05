<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Organization-1680e847-abee-48ad-8704-65eb8225a3cb.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Organization-1680e847-abee-48ad-8704-65eb8225a3cb.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Organization-1680e847-abee-48ad-8704-65eb8225a3cb.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Organization-1680e847-abee-48ad-8704-65eb8225a3cb.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Organization-1680e847-abee-48ad-8704-65eb8225a3cb.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Organization-1680e847-abee-48ad-8704-65eb8225a3cb.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Organization-1680e847-abee-48ad-8704-65eb8225a3cb.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
