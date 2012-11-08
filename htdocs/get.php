<?php
// kommentti (win-kone)
/*$get_error='';
#session_start();
#print "\n<!-- get -->\n";


$sess_name=session_name();


// ----------------------------------- bad post ----------------------------


$badpoststuff=array('',
'delete','select','insert','alter','drop','like','grant','revoke','mysql',
'.dat','.zip','.tar','.txt','.doc','.xls','.exe','.bat','<','>',
'\"','\\','/','//',';',':','\'',
'<!','--','\n','\r'
);


 foreach ($_POST as $a => $b) {

	   foreach ($badpoststuff as $d) {
	   
	   	  // if ( ( $d!="" && (stristr($b, $d)) ) && ($_POST[$a]!="Email") ) {
		  
		  if ( $d!="" && (stristr($b, $d)) ) {
		  $_POST[$a]=str_replace("$d","",$_POST[$a]);
		  }
		  
	   }
   }



// ----------------------------------------- bad get --------------------------------------------

// '.jp',
$badgetstuff=array(
'.com','.net','.org','.biz','.info','.int','.edu','.as','.at','.ac','.co','.eu',
'.gv','or.at','.au','.be','.br','.ca','.cc','.ck','.cn','.ch','.cx','.de','.dk','.fr',
'.fi','.gr','.gs','.hk','.hk','.id','.ie','.il','.is','.it','.kr','.li','.lu',
'.ms','.name','.nl','.no','.nz','.ru','.se','.sg','.st','.tc','.tf','.th','.to','.tv','.uk','.gb','.us','.vg',

'delete','select','insert','alter','drop','like','grant','revoke','www.','http','index','default','.htm','.shtml','.phtml',
'.php','.asp','.jsp','.cmf','.dat','.zip','.tar','.txt','.doc','.xls','.exe','.com','.bat','<','>','!','--',
'\"','/','//',';',':','\''

);


foreach ($_GET as $a => $b) {

	   if ($a!="r_email") {
	   foreach ($badgetstuff as $c => $d) {
	   #print "$c<br>\n";
	   	  if (stristr($b, $d)) {
	   	  $get_error.=$d.", ";
	   	  }
		  
	   }
	   }
	   
}



if ($get_error!="") {
	   
	   
			  if ($HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"] != "") {
       		  $ip = $HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"];
       		  $proxy = $HTTP_SERVER_VARS["REMOTE_ADDR"];
       		  $host = @gethostbyaddr($HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"]);
   			  }
			  else {
       		  $ip = $HTTP_SERVER_VARS["REMOTE_ADDR"];
       		  $host = @gethostbyaddr($HTTP_SERVER_VARS["REMOTE_ADDR"]);
   			  }
			  
			  
	   $hacktitle="Possible Url Hacking Attemp Detected";
	   $now=getdate();
	   $timestamp=time();
	   $thetime=$now[mday].".".$now[mon].".".$now[year]."  ".$now[hours].":".$now[minutes].":".$now[seconds];

	   
	   print "<html>\n<head>\n<title>$hacktitle</title>\n</head>\n<body><pre>\n";
	   print "\n<h2>$hacktitle</h2>\n";
	   #print "<b>d_error: $get_error\n";
	   #print "<b>Attemp: \"$a=$b\"\n";
	   
	   print "<b>Attemp ";
	   print "From</b>:\n";
	   print "<b>Host</b>: $host\n";
	   print "<b>IP</b>: $ip\n";
	   
	   if ($proxy!="") {
	   print "<b>Proxy</b>: $proxy\n";
	   }
	   
	   print "<b>Time</b>: $thetime\n";
	   print "\nSending Mail... Done.\n\n";
	   #print "Have a Nice Day :)\n";
	   print "Shutting Down...\n";
	   print "</pre>\n</body>\n</html>";
	   die;
	   exit;
	   
}

#print "\n<!-- get end -->\n";
*/?>
