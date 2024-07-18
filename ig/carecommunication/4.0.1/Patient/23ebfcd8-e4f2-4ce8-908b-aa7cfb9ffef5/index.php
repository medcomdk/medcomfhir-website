<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Patient-23ebfcd8-e4f2-4ce8-908b-aa7cfb9ffef5.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Patient-23ebfcd8-e4f2-4ce8-908b-aa7cfb9ffef5.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Patient-23ebfcd8-e4f2-4ce8-908b-aa7cfb9ffef5.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Patient-23ebfcd8-e4f2-4ce8-908b-aa7cfb9ffef5.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Patient-23ebfcd8-e4f2-4ce8-908b-aa7cfb9ffef5.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Patient-23ebfcd8-e4f2-4ce8-908b-aa7cfb9ffef5.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Patient-23ebfcd8-e4f2-4ce8-908b-aa7cfb9ffef5.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
