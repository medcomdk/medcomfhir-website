<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Patient-19bdc614-503b-481d-ae65-4040daf7060d.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Patient-19bdc614-503b-481d-ae65-4040daf7060d.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Patient-19bdc614-503b-481d-ae65-4040daf7060d.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Patient-19bdc614-503b-481d-ae65-4040daf7060d.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Patient-19bdc614-503b-481d-ae65-4040daf7060d.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Patient-19bdc614-503b-481d-ae65-4040daf7060d.html');
else 
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Patient-19bdc614-503b-481d-ae65-4040daf7060d.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.