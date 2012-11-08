<?php
session_start();
header('Cache-control: private'); // IE 6 FIX

/*if ($_SESSION["lang_name"] == '' && $_REQUEST['lng'] == ''){ // Default language is 'fi'.
	$_SESSION["lang_name"] = 'fi';
}
elseif ($_SESSION["lang_name"] != '' && $_REQUEST['lng'] == ''){ // When Session 'lang_name' has value.
}
else{
	if ($_REQUEST['lng'] == 'en'){ // User chooses 'en'.	
		$_SESSION["lang_name"] = 'en';
	}
	elseif ($_REQUEST['lng'] == 'fi'){ // User chooses 'fi'.
		$_SESSION["lang_name"] = 'fi';
	}
}

include("languages/".$_SESSION["lang_name"].".php");*/

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
		$subject = 'Yhteydenottopyyntö Jippo WWW';
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
		
		mail( 'sales@jippostore.com', "=?UTF-8?B?{$subject}?=", $message, implode( "\n", array(
			'MIME-Version: 1.0',
			'Content-type: text/plain; charset=UTF-8' ,
			"From: $sähköposti"
			) ) );
		$_SESSION['succeedMessage'] = '<strong>Kiitos!</strong><br />Yhteydenottopyyntönne on vastaanotettu.<br />Olemme Sinuun pian yhteydessä.<br />Terveisin Markku Pihlajaniemi';
		header( "Location: {$_SERVER['REQUEST_URI']}", TRUE, 303 );
		exit();
	}
}


$title="Innolake";
$keywords="eTietohanke, jippostore, jippo, f-commerce, webstore";
$descwords="Jippo f-commerce, your brand means on Facebook, let's design yours.";
$f_end=".php";
$slogan1="Your brand means on Facebook";
$slogan2="Let's design yours";
$domain="jippostore.com";
$fname="Jippo f-Commerce Oy";
$faddr="Eskolantie 1";
$fpnum="00720";
$fcity="Helsinki";
$fcountry="Finland";
$fphone1="+358 (0)20 735 0060";
$fphone2="+358 (2)20 735 0061";
$femail="helpdesk@$domain";
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
    <meta property="og:title" content="Jippo f-commerce" />
    <meta property="og:description" content="Jippo f-commerce, your brand means on Facebook, let's design yours." />
	<meta property="fb:app_id" content="186013568131933" />
    <meta property="og:image" content="img/screenshots.png" />
    <meta property="og:url" content="http://www.jippostore.com/" />
    <meta property="og:site_name" content="Jippo f-Commerce Oy" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="" />
	
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <!-- Le styles -->
    <link href="css/bootstrap.css?v2.0.4" rel="stylesheet" />
	<link href="css/jquery.nivo.slider.css" rel="stylesheet" />
	<link href="css/jquery-ui-1.8.21.custom.css?v1.8.21" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="img/ico/favicon.ico" />
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
			<?php
			if ($_SESSION["lang_name"] == 'fi'){
				echo "<a href='?lng=en' class='lang'>in English</a>";
			}
			else{
				echo "<a href='?lng=fi' class='lang'>Suomeksi</a>";
			}
			?>
          	<a class="facebook sb" href="http://www.facebook.com/Jippostore" title="Facebook" target="_blank"></a>
            <a class="twitter sb" href="https://twitter.com/Jippostore" title="Twitter" target="_blank"></a>
            <a class="linkedin sb" href="http://www.linkedin.com/groups/Jippo-fcommerce-4414802?gid=4414802&mostPopular=&trk=tyah" title="LinkedIn" target="_blank"></a>
			<a class="pinterest sb" href="https://pinterest.com/jippostore/" title="Pinterest" target="_blank"></a>
            <!--<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="icon-user"></i> Username
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">Profile</a></li>
              <li class="divider"></li>
              <li><a href="#">Sign Out</a></li>
            </ul>-->
          </div>
          <div class="nav-collapse">
            <ul class="nav">
           	  <li class="showhide" style="width:230px">
				  <a id="brand" href="#page_home" title="<?= $lang['etusivu']; ?>">
					  <img src="img/logo-jippo-footer.png" width="100" height="30" alt="Jippostore" />
				  </a>
			  </li>
              <li class="showhide"><a href="#page_home">Home</a></li>
              <li class="showhide"><a href="#page_about">Story</a></li>
              <li class="showhide"><a href="#page_contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>