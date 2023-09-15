<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/MessageHeader-b9b4818e-02de-4cc4-b418-d20cbc7b5404.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/MessageHeader-b9b4818e-02de-4cc4-b418-d20cbc7b5404.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/MessageHeader-b9b4818e-02de-4cc4-b418-d20cbc7b5404.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/MessageHeader-b9b4818e-02de-4cc4-b418-d20cbc7b5404.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/MessageHeader-b9b4818e-02de-4cc4-b418-d20cbc7b5404.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/MessageHeader-b9b4818e-02de-4cc4-b418-d20cbc7b5404.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/MessageHeader-b9b4818e-02de-4cc4-b418-d20cbc7b5404.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
