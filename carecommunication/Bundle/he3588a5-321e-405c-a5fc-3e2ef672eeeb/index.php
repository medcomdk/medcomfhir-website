<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Bundle-he3588a5-321e-405c-a5fc-3e2ef672eeeb.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Bundle-he3588a5-321e-405c-a5fc-3e2ef672eeeb.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Bundle-he3588a5-321e-405c-a5fc-3e2ef672eeeb.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Bundle-he3588a5-321e-405c-a5fc-3e2ef672eeeb.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Bundle-he3588a5-321e-405c-a5fc-3e2ef672eeeb.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Bundle-he3588a5-321e-405c-a5fc-3e2ef672eeeb.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Bundle-he3588a5-321e-405c-a5fc-3e2ef672eeeb.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
