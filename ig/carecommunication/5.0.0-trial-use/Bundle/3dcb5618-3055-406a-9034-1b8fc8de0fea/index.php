<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Bundle-3dcb5618-3055-406a-9034-1b8fc8de0fea.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Bundle-3dcb5618-3055-406a-9034-1b8fc8de0fea.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Bundle-3dcb5618-3055-406a-9034-1b8fc8de0fea.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Bundle-3dcb5618-3055-406a-9034-1b8fc8de0fea.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Bundle-3dcb5618-3055-406a-9034-1b8fc8de0fea.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Bundle-3dcb5618-3055-406a-9034-1b8fc8de0fea.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Bundle-3dcb5618-3055-406a-9034-1b8fc8de0fea.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
