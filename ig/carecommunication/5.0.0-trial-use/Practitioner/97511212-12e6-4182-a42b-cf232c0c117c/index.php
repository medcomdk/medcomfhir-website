<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Practitioner-97511212-12e6-4182-a42b-cf232c0c117c.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Practitioner-97511212-12e6-4182-a42b-cf232c0c117c.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Practitioner-97511212-12e6-4182-a42b-cf232c0c117c.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Practitioner-97511212-12e6-4182-a42b-cf232c0c117c.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Practitioner-97511212-12e6-4182-a42b-cf232c0c117c.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Practitioner-97511212-12e6-4182-a42b-cf232c0c117c.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Practitioner-97511212-12e6-4182-a42b-cf232c0c117c.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
