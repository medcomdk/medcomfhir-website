<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.2/MessageHeader-b879c81e-0607-4ccb-b358-24a72208e30d.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.2/MessageHeader-b879c81e-0607-4ccb-b358-24a72208e30d.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.2/MessageHeader-b879c81e-0607-4ccb-b358-24a72208e30d.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.2/MessageHeader-b879c81e-0607-4ccb-b358-24a72208e30d.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.2/MessageHeader-b879c81e-0607-4ccb-b358-24a72208e30d.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.2/MessageHeader-b879c81e-0607-4ccb-b358-24a72208e30d.html');
else 
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.2/MessageHeader-b879c81e-0607-4ccb-b358-24a72208e30d.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
