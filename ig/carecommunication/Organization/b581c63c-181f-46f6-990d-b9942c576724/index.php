<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/Organization-b581c63c-181f-46f6-990d-b9942c576724.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/Organization-b581c63c-181f-46f6-990d-b9942c576724.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/Organization-b581c63c-181f-46f6-990d-b9942c576724.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/Organization-b581c63c-181f-46f6-990d-b9942c576724.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/Organization-b581c63c-181f-46f6-990d-b9942c576724.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/Organization-b581c63c-181f-46f6-990d-b9942c576724.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/Organization-b581c63c-181f-46f6-990d-b9942c576724.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
