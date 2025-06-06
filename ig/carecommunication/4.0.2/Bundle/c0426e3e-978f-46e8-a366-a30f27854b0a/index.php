<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Bundle-c0426e3e-978f-46e8-a366-a30f27854b0a.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Bundle-c0426e3e-978f-46e8-a366-a30f27854b0a.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Bundle-c0426e3e-978f-46e8-a366-a30f27854b0a.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Bundle-c0426e3e-978f-46e8-a366-a30f27854b0a.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Bundle-c0426e3e-978f-46e8-a366-a30f27854b0a.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Bundle-c0426e3e-978f-46e8-a366-a30f27854b0a.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Bundle-c0426e3e-978f-46e8-a366-a30f27854b0a.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
