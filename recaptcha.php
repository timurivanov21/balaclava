<?


if ( $_POST['enter'] ) {
	
	if ( !$_POST['g-recaptcha-response'] )
		exit('Заполните капчу');

	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$key = '6LdeF4IUAAAAAN98IRFmzkFrPDEJwY3f7YXbT4oB';
	$query = $url.'?secret='.$key.'&response='.$_POST['g-recaptcha-response'].'&remoteip='.$_SERVER['REMOTE_ADDR'];

	$data = json_decode(file_get_contents($query));

	if ( $data->success == true)
		$resolveCaptcha = true;
	else 
		echo "Капча не пройдена!";
}


?>