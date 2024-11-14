<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsmetadata/1.0.0/CodeSystem-MedCom-ihe-homeCommunityId-CS.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsmetadata/1.0.0/CodeSystem-MedCom-ihe-homeCommunityId-CS.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsmetadata/1.0.0/CodeSystem-MedCom-ihe-homeCommunityId-CS.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsmetadata/1.0.0/CodeSystem-MedCom-ihe-homeCommunityId-CS.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsmetadata/1.0.0/CodeSystem-MedCom-ihe-homeCommunityId-CS.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsmetadata/1.0.0/CodeSystem-MedCom-ihe-homeCommunityId-CS.html');
else 
  Redirect('http://medcomfhir.dk/ig/xdsmetadata/1.0.0/CodeSystem-MedCom-ihe-homeCommunityId-CS.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
