<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Bundle-add5e7e2-0c0f-4a4a-bfff-f6f984fa7e3c.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Bundle-add5e7e2-0c0f-4a4a-bfff-f6f984fa7e3c.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Bundle-add5e7e2-0c0f-4a4a-bfff-f6f984fa7e3c.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Bundle-add5e7e2-0c0f-4a4a-bfff-f6f984fa7e3c.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Bundle-add5e7e2-0c0f-4a4a-bfff-f6f984fa7e3c.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Bundle-add5e7e2-0c0f-4a4a-bfff-f6f984fa7e3c.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Bundle-add5e7e2-0c0f-4a4a-bfff-f6f984fa7e3c.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
