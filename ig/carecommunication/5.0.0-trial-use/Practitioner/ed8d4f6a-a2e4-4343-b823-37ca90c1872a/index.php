<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Practitioner-ed8d4f6a-a2e4-4343-b823-37ca90c1872a.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Practitioner-ed8d4f6a-a2e4-4343-b823-37ca90c1872a.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Practitioner-ed8d4f6a-a2e4-4343-b823-37ca90c1872a.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Practitioner-ed8d4f6a-a2e4-4343-b823-37ca90c1872a.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Practitioner-ed8d4f6a-a2e4-4343-b823-37ca90c1872a.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Practitioner-ed8d4f6a-a2e4-4343-b823-37ca90c1872a.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Practitioner-ed8d4f6a-a2e4-4343-b823-37ca90c1872a.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
