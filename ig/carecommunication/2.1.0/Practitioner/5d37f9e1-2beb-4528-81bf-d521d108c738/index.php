<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Practitioner-5d37f9e1-2beb-4528-81bf-d521d108c738.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Practitioner-5d37f9e1-2beb-4528-81bf-d521d108c738.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Practitioner-5d37f9e1-2beb-4528-81bf-d521d108c738.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Practitioner-5d37f9e1-2beb-4528-81bf-d521d108c738.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Practitioner-5d37f9e1-2beb-4528-81bf-d521d108c738.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Practitioner-5d37f9e1-2beb-4528-81bf-d521d108c738.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Practitioner-5d37f9e1-2beb-4528-81bf-d521d108c738.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
