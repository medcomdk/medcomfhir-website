<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Communication-0f8cde6a-d369-4d94-a2ce-c2cc45fd75fb.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Communication-0f8cde6a-d369-4d94-a2ce-c2cc45fd75fb.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Communication-0f8cde6a-d369-4d94-a2ce-c2cc45fd75fb.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Communication-0f8cde6a-d369-4d94-a2ce-c2cc45fd75fb.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Communication-0f8cde6a-d369-4d94-a2ce-c2cc45fd75fb.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Communication-0f8cde6a-d369-4d94-a2ce-c2cc45fd75fb.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Communication-0f8cde6a-d369-4d94-a2ce-c2cc45fd75fb.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
