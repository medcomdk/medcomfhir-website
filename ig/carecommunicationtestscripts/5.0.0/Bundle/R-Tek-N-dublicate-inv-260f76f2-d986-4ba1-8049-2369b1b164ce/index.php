<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-R-Tek-N-dublicate-inv-260f76f2-d986-4ba1-8049-2369b1b164ce.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-R-Tek-N-dublicate-inv-260f76f2-d986-4ba1-8049-2369b1b164ce.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-R-Tek-N-dublicate-inv-260f76f2-d986-4ba1-8049-2369b1b164ce.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-R-Tek-N-dublicate-inv-260f76f2-d986-4ba1-8049-2369b1b164ce.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-R-Tek-N-dublicate-inv-260f76f2-d986-4ba1-8049-2369b1b164ce.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-R-Tek-N-dublicate-inv-260f76f2-d986-4ba1-8049-2369b1b164ce.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-R-Tek-N-dublicate-inv-260f76f2-d986-4ba1-8049-2369b1b164ce.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
