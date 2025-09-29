<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Patient-50c51ef0-00b0-429a-b212-35ee0773fd5a.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Patient-50c51ef0-00b0-429a-b212-35ee0773fd5a.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Patient-50c51ef0-00b0-429a-b212-35ee0773fd5a.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Patient-50c51ef0-00b0-429a-b212-35ee0773fd5a.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Patient-50c51ef0-00b0-429a-b212-35ee0773fd5a.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Patient-50c51ef0-00b0-429a-b212-35ee0773fd5a.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Patient-50c51ef0-00b0-429a-b212-35ee0773fd5a.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
