<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Practitioner-e081a7fc-2df6-47e9-b6cd-77d8aaf7e8df.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Practitioner-e081a7fc-2df6-47e9-b6cd-77d8aaf7e8df.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Practitioner-e081a7fc-2df6-47e9-b6cd-77d8aaf7e8df.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Practitioner-e081a7fc-2df6-47e9-b6cd-77d8aaf7e8df.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Practitioner-e081a7fc-2df6-47e9-b6cd-77d8aaf7e8df.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Practitioner-e081a7fc-2df6-47e9-b6cd-77d8aaf7e8df.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Practitioner-e081a7fc-2df6-47e9-b6cd-77d8aaf7e8df.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
