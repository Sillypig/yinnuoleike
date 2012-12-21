<?php
session_start();
header('Cache-control: private'); // IE 6 FIX

if ( isset( $_POST['field'] ) ) {
	$valid = TRUE;
	if ( $valid ) {
		$orderdata = array(
			'created'	=> date( 'Y-m-d' )
			);
		foreach ( array(
			'tuotteet',
			'etunimi',
			'sukunimi',
			'yritys',
			'ytunnus',
			'osoite',
			'postinumero',
			'kaupunki',
			'maa',
			'puhelin',
			'sähköposti',
			'lisätietoja'
			) as $name ) {
			if ( ( $value = @$_POST['field'][$name] ) == '' ) {
				$valid = FALSE;
				break;
			}
			$orderdata[$name] = $value;
		}
	}
	
	if ( $valid ) {
		/*try {
		  //create or open the database
		  $database = new SQLiteDatabase('orders/db.sqlite', 0666, $error);
		}
		catch(Exception $e) {
		  die($error);
		}*/
		
		//add orders table to database
		/*$query = 'CREATE TABLE orders ' .
			'(order_id INTEGER PRIMARY KEY, created DATETIME, product TEXT, firstname TEXT, lastname TEXT, company TEXT, VAT TEXT, address TEXT, postal TEXT, city TEXT, country TEXT, tel TEXT, email TEXT, comments TEXT)';
				 
		if(!$database->queryExec($query, $error)){
		  die($error);
		}*/
		
		//insert data into database		
		/*$query = 'INSERT INTO orders (created,product,firstname,lastname,company,VAT,address,postal,city,country,tel,email,comments) VALUES ("'.date( 'Y-m-d' ).'","'.$orderdata['tuotteet'].'","'.$orderdata['etunimi'].'","'.$orderdata['sukunimi'].'","'.$orderdata['yritys'].'","'.$orderdata['ytunnus'].'","'.$orderdata['osoite'].'","'.$orderdata['postinumero'].'","'.$orderdata['kaupunki'].'","'.$orderdata['maa'].'","'.$orderdata['puhelin'].'","'.$orderdata['sähköposti'].'","'.$orderdata['lisätietoja'].'")' ;
		
		if(!$database->queryExec($query, $error)){
		  die($error);
		}*/
		
		extract( $orderdata );
		$subject = 'Innolake订单';
		$message = <<<__TXT__
Etunimi = {$etunimi}
	
Sukunimi = {$sukunimi}
	
Yritys = {$yritys}
	
Y-tunnus = {$ytunnus}
	
Osoite = {$osoite}
	
Postinumero = {$postinumero}

Kaupunki = {$kaupunki}
	
Maa = {$maa}
	
Puhelin = {$puhelin}
	
Sähköposti = {$sähköposti}
	
Lisätietoja = {$lisätietoja}

__TXT__;
		$subject = base64_encode( $subject );
		
		mail( 'service@innolake.com', "=?UTF-8?B?{$subject}?=", $message, implode( "\n", array(
			'MIME-Version: 1.0',
			'Content-type: text/plain; charset=UTF-8' ,
			"From: $sähköposti"
			) ) );
		$_SESSION['succeedMessage'] = '<strong>谢谢!</strong><br />我们将会尽快联系您!';
		header( "Location: {$_SERVER['REQUEST_URI']}", TRUE, 303 );
		exit();
	}
}


$title="英諾雷克電子創新服務中心";
$keywords="英諾雷克, 芬蘭, 創新, 網頁, 服務, 方案, 服務, 廣告, 網站, 維護";
$descwords="英諾雷克爲您打造最好的數字解決方案。";
$f_end=".php";
$slogan1="为您打造最好的数字解决方案";
$slogan2="一切由我們爲您設計";
$domain="innolake.com";
$fname="英諾雷克";
$faddr="Kilonkallio 10 H 82";
$fpnum="02610";
$fcity="艾斯堡";
$fcountry="芬蘭";
$fphone1="+358 (0)40 570 1088";
$fphone2="+358 (0)44 588 6303";
$femail="service@$domain";
$succeedMessage=@$_SESSION['succeedMessage'];
unset($_SESSION['succeedMessage']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr" xmlns:og="http://ogp.me/ns#">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php echo $title;?></title>
    <meta name="description" content="<?php echo $descwords;?>" />
    <meta name="keywords" content="<?php echo $keywords;?>" />
    <meta property='og:locale' content='en_US' />
    <meta property="og:title" content="英諾雷克" />
    <meta property="og:description" content="英诺雷克为您打造最好的数字解决方案。" />
	<!--<meta property="fb:app_id" content="186013568131933" />-->
    <meta property="og:image" content="../img/screenshots.png" />
    <meta property="og:url" content="http://www.innolake.com/cn/index.php" />
    <meta property="og:site_name" content="英诺雷克官方網站" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="" />
	
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
    <!-- Le styles -->
    <link href="../css/bootstrap.css?v2.0.4" rel="stylesheet" />
	<link href="../css/jquery.nivo.slider.css" rel="stylesheet" />
	<link href="../css/jquery-ui-1.8.21.custom.css?v1.8.21" rel="stylesheet" />
    <link href="../css/style_cn.css" rel="stylesheet" />
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../img/ico/favicon.ico" />
  </head>

  <body>
  
  <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="btn-group pull-right">
          	<a class="facebook sb" href="http://www.facebook.com/Innolake" title="在Facebook上找到我們" target="_blank"></a>
            <ul class="language">
				<li>
					<a href="../fi/index.php" title="Suomeksi">Suomeksi</a>
				</li>
				<li>
					<a href="../index.php" title="in English">in English</a>
				</li>
			</ul>
            <!--<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="icon-user"></i> Username
              <span class="caret"></span>
            </a>-->
          </div>
          <div class="nav-collapse">
            <ul class="nav">
           	  <li class="showhide" style="width:230px">
				  <a id="brand" href="page_home" title="英諾雷克">
					  <img src="../img/logo.png" height="35" alt="英諾雷克" style="padding-left: 70px;" />
				  </a>
			  </li>
              <li class="showhide"><a href="page_home">首頁</a></li>
              <li class="showhide"><a href="page_about">關于我們</a></li>
              <li class="showhide"><a href="page_contact">聯系方式</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>