<?php
$logo = ($_SERVER['SERVER_NAME']);
$ips = $_SERVER['REMOTE_ADDR'];



$referer2 = $_SERVER['HTTP_REFERER'];
$referer5 = $_SERVER['HTTP_REFERER'];
$referer2 = urldecode($referer2); 
$referer2 = substr($referer2, 7, 20);

$user_name = htmlspecialchars($_POST['name'], NULL, 'utf-8');
$user_name2 = htmlspecialchars($_POST['familiya'], NULL, 'utf-8');
$user_phone = htmlspecialchars($_POST['phone'], NULL, 'utf-8');
$messaga = htmlspecialchars($_POST['messaga'], NULL, 'utf-8');
$email = htmlspecialchars($_POST['callEmail'], NULL, 'utf-8');
$bannerformname = htmlspecialchars($_POST['bannerformname'], NULL, 'utf-8');
$bannerformmessage = htmlspecialchars($_POST['bannerformmessage'], NULL, 'utf-8');
$otz = htmlspecialchars($_POST['otz'], NULL, 'utf-8');
$one = htmlspecialchars($_POST['one'], NULL, 'utf-8');
$callFormName = htmlspecialchars($_POST['callFormName'], NULL, 'utf-8');


$where = htmlspecialchars($_POST['where']);
$where2 = substr($where, 7, 16);
$where3 = substr($where, 50, 70);
$where3 = urldecode($where3); 
$ref = $_SERVER['HTTP_REFERER'];
parse_str($ref, $output);
$slova = $output['utm_term'];  // ключевые слова
$kompania = $output['utm_campaign']; // название компании
$p = $output['utm_source']; // название поисковика
$zagolovok = $output['utm_medium']; // заголовок обьявления
$text = $output['utm_text']; // текст обьявления 1
$text2 = $output['utm_text2']; // текст обьявления 2
$phrase = urldecode($where); 

if(empty($one)) {
$ipl = "";
$ipl1 = "";
}
else {
$ipl1 = "Ссылка на фото шкафа";
$ipl = "http://xn-----6kccaa5arcwce4d8bfn9dye.xn--90ais/assets/gallary/";
}

  $to  = 'vitaminiby@yandex.ru'; 
 $klient  = ''; //
$subject = 'домашние-мастера - '.$phone.'';
$from = "$name";
// текст письма
$message = '
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	
	</head>
	<body>
<p><strong> &nbsp;</strong> '.$email.'</p>
<p> '.$bannerformname.'</p>
<p><strong></strong> '.$user_name.'</p>
<p><strong></strong> '.$user_name2.'</p>
<p><strong></strong> '.$user_phone.'</p>
<p> '.$messaga.'</p>
<p> '.$bannerformmessage.'</p>

<p> '.$otz.'</p>

<p>'.$ipl1.' '.$ipl.''.$one.'</p>


<p> '.$where2.'</p>
<p> '.$where3.'</p>


<p> '.$slova.'</p>
<p> '.$p.'</p>
<p> '.$ips.'</p>
<p> '.$prod_name_otz.'</p>
<p> '.$kompania.'</p>
<p> '.$zagolovok.'</p>
<p> '.$text.'</p>
<p> '.$text2.'</p>



	<script type='text/javascript' src='http://l.gaev.by/%D0%BC%D1%83%D0%B6-%D0%BD%D0%B0-%D1%87%D0%B0%D1%81/timer.js'></script>
</body>
</html>

';
$messageklient = '
<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	
	</head>
	<body>
<p><strong> &nbsp;</strong> '.$email.'</p>
<p><strong></strong> '.$user_name.'</p>
<p> '.$bannerformname.'</p>
<p><strong></strong> '.$user_name2.'</p>
<p><strong></strong> '.$user_phone.'</p>
<p> '.$messaga.'</p>
<p> '.$bannerformmessage.'</p>
<p> '.$gorod.'</p>
<p> '.$otz.'</p>
<p>'.$ipl1.' '.$ipl.''.$one.'</p>
<p> '.$count.'</p>
<p> '.$user_otz.'</p>

<p> '.$p.'</p>

	<script type='text/javascript' src='http://l.gaev.by/%D0%BC%D1%83%D0%B6-%D0%BD%D0%B0-%D1%87%D0%B0%D1%81/timer.js'></script>
</body>
</html>

';
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= "From: 375295730844@ya.ru";
if(empty($user_phone)) {
$URL="foll.html";
header ("Location: $URL");
}
else {
mail($to, $subject, $message, $headers);
mail($klient, $subject, $messageklient, $headers);
$URL="otpr.html";
header ("Location: $URL");
}
	?>