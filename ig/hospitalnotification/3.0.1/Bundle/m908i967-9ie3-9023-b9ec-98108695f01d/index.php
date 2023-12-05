<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Bundle-m908i967-9ie3-9023-b9ec-98108695f01d.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Bundle-m908i967-9ie3-9023-b9ec-98108695f01d.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Bundle-m908i967-9ie3-9023-b9ec-98108695f01d.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Bundle-m908i967-9ie3-9023-b9ec-98108695f01d.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Bundle-m908i967-9ie3-9023-b9ec-98108695f01d.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Bundle-m908i967-9ie3-9023-b9ec-98108695f01d.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Bundle-m908i967-9ie3-9023-b9ec-98108695f01d.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
