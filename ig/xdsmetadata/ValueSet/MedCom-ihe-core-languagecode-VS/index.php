<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsmetadata/1.0.0/ValueSet-MedCom-ihe-core-languagecode-VS.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsmetadata/1.0.0/ValueSet-MedCom-ihe-core-languagecode-VS.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsmetadata/1.0.0/ValueSet-MedCom-ihe-core-languagecode-VS.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsmetadata/1.0.0/ValueSet-MedCom-ihe-core-languagecode-VS.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsmetadata/1.0.0/ValueSet-MedCom-ihe-core-languagecode-VS.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsmetadata/1.0.0/ValueSet-MedCom-ihe-core-languagecode-VS.html');
else 
  Redirect('http://medcomfhir.dk/ig/xdsmetadata/1.0.0/ValueSet-MedCom-ihe-core-languagecode-VS.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.