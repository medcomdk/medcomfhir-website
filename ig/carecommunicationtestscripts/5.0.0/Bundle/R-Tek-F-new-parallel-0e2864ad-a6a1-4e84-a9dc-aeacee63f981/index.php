<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-R-Tek-F-new-parallel-0e2864ad-a6a1-4e84-a9dc-aeacee63f981.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-R-Tek-F-new-parallel-0e2864ad-a6a1-4e84-a9dc-aeacee63f981.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-R-Tek-F-new-parallel-0e2864ad-a6a1-4e84-a9dc-aeacee63f981.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-R-Tek-F-new-parallel-0e2864ad-a6a1-4e84-a9dc-aeacee63f981.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-R-Tek-F-new-parallel-0e2864ad-a6a1-4e84-a9dc-aeacee63f981.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-R-Tek-F-new-parallel-0e2864ad-a6a1-4e84-a9dc-aeacee63f981.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-R-Tek-F-new-parallel-0e2864ad-a6a1-4e84-a9dc-aeacee63f981.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
