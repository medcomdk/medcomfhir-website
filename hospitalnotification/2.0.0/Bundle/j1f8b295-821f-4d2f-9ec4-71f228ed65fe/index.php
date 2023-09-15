<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Bundle-j1f8b295-821f-4d2f-9ec4-71f228ed65fe.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Bundle-j1f8b295-821f-4d2f-9ec4-71f228ed65fe.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Bundle-j1f8b295-821f-4d2f-9ec4-71f228ed65fe.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Bundle-j1f8b295-821f-4d2f-9ec4-71f228ed65fe.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Bundle-j1f8b295-821f-4d2f-9ec4-71f228ed65fe.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Bundle-j1f8b295-821f-4d2f-9ec4-71f228ed65fe.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Bundle-j1f8b295-821f-4d2f-9ec4-71f228ed65fe.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
