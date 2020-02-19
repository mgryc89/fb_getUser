<!DOCTYPE html>
<html>
<head>
  <title>
    Zadane nr.1
  </title>
</head>

<body>
  <h1>Zadanie nr.1</h1>

<?php

require_once __DIR__ . '/vendor/autoload.php';   

//app_id, app_secret i token jest zmienione na złe, bo nie chcę udostępniać swoich danych
$fb = new \Facebook\Facebook([
  'app_id' => '639860053018000',
  'app_secret' => '03e1d622b6b23a684020212b76402000',
  'graph_api_version' => 'v6.0',
]);



try {
  $response = $fb->get('/me?fields=id,name,email', 'EAAJF8wcqhyYBAFoOoy071WpcUA8crUNyTCyvyEq7sSEqLusIOje27h3zjuwvSnOEmr2oDGZBqULWZAfNdIw3RM76WH28zA53A4C1EBiL0ZBCyG47MJ58FSlb0uIEZBEHdZCtVFzPfCq8Kr9gEVpl40SZBZAXHLT549olXNUZBxNfc3UJIDxhcJ7jAPlkfPREMevt7pb6QYkkrugvq84ohbOe6azTfGdaIkMvWZAws5HIui6VbLTT4v000');
} 
catch(\Facebook\Exceptions\FacebookResponseException $e) 
{
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} 
catch(\Facebook\Exceptions\FacebookSDKException $e)
{
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$me = $response->getGraphUser();

echo 'Moje dane <br>';
echo 'Imie i nazwisko: ' . $me['name'] . '<br>';
echo 'Email: ' . $me['email'] . '<br>';
echo 'Id: ' . $me['id'];


?>

</body>
</html>