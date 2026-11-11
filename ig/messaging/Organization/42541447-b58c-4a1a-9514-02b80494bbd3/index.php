<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://medcomfhir.dk/ig/messaging/4.0.3/Organization-42541447-b58c-4a1a-9514-02b80494bbd3.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://medcomfhir.dk/ig/messaging/4.0.3/Organization-42541447-b58c-4a1a-9514-02b80494bbd3.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://medcomfhir.dk/ig/messaging/4.0.3/Organization-42541447-b58c-4a1a-9514-02b80494bbd3.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://medcomfhir.dk/ig/messaging/4.0.3/Organization-42541447-b58c-4a1a-9514-02b80494bbd3.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://medcomfhir.dk/ig/messaging/4.0.3/Organization-42541447-b58c-4a1a-9514-02b80494bbd3.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://medcomfhir.dk/ig/messaging/4.0.3/Organization-42541447-b58c-4a1a-9514-02b80494bbd3.html');
else 
  Redirect('https://medcomfhir.dk/ig/messaging/4.0.3/Organization-42541447-b58c-4a1a-9514-02b80494bbd3.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
