<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-0ece868c-6a72-4aa3-8a96-2d985ab630c7.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-0ece868c-6a72-4aa3-8a96-2d985ab630c7.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-0ece868c-6a72-4aa3-8a96-2d985ab630c7.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-0ece868c-6a72-4aa3-8a96-2d985ab630c7.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-0ece868c-6a72-4aa3-8a96-2d985ab630c7.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-0ece868c-6a72-4aa3-8a96-2d985ab630c7.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-0ece868c-6a72-4aa3-8a96-2d985ab630c7.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
