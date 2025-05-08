<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsmetadata/1.0.1/CodeSystem-MedCom-ihe-formatcode-CS.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsmetadata/1.0.1/CodeSystem-MedCom-ihe-formatcode-CS.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsmetadata/1.0.1/CodeSystem-MedCom-ihe-formatcode-CS.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsmetadata/1.0.1/CodeSystem-MedCom-ihe-formatcode-CS.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsmetadata/1.0.1/CodeSystem-MedCom-ihe-formatcode-CS.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsmetadata/1.0.1/CodeSystem-MedCom-ihe-formatcode-CS.html');
else 
  Redirect('http://medcomfhir.dk/ig/xdsmetadata/1.0.1/CodeSystem-MedCom-ihe-formatcode-CS.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
