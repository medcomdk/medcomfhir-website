<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Patient-79fc4a5c-5fca-4389-8740-89607ce07f2d.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Patient-79fc4a5c-5fca-4389-8740-89607ce07f2d.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Patient-79fc4a5c-5fca-4389-8740-89607ce07f2d.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Patient-79fc4a5c-5fca-4389-8740-89607ce07f2d.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Patient-79fc4a5c-5fca-4389-8740-89607ce07f2d.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Patient-79fc4a5c-5fca-4389-8740-89607ce07f2d.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Patient-79fc4a5c-5fca-4389-8740-89607ce07f2d.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
