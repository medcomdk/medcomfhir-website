<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/messaging/2.2.0/Organization-42541447-b58c-4a1a-9514-02b80494bbd3.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/messaging/2.2.0/Organization-42541447-b58c-4a1a-9514-02b80494bbd3.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/messaging/2.2.0/Organization-42541447-b58c-4a1a-9514-02b80494bbd3.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/messaging/2.2.0/Organization-42541447-b58c-4a1a-9514-02b80494bbd3.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/messaging/2.2.0/Organization-42541447-b58c-4a1a-9514-02b80494bbd3.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/messaging/2.2.0/Organization-42541447-b58c-4a1a-9514-02b80494bbd3.html');
else 
  Redirect('http://medcomfhir.dk/ig/messaging/2.2.0/Organization-42541447-b58c-4a1a-9514-02b80494bbd3.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
