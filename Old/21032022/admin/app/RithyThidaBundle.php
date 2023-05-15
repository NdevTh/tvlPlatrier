<?php
    // tell system what function to use as the error handler
    set_error_handler('errorHandler');
    if (version_compare(phpversion(), '5.0.0', '<')) {
       // these do not exist in PHP 4, so define them manually
       define('E_STRICT', 2048);
       define('E_RECOVERABLE_ERROR', 4096);
       define('E_DEPRECATED', 8192);
       define('E_USER_DEPRECATED', 16384);
    } else {
       // new constants were added in new versions of PHP 5
       if (version_compare(phpversion(), '5.2.0', '<')) {
          // this does not exist before 5.2, so define manually
          define('E_RECOVERABLE_ERROR', 4096);
       } // if
       if (version_compare(phpversion(), '5.3.0', '<')) {
          // these do not exist before 5.3, so define manually
          define('E_DEPRECATED', 8192);
          define('E_USER_DEPRECATED', 16384);
       } // if
    } // if

    function Code128($chaine)
{
  $code128="";
  if(strlen($chaine)>0){
    $z=0;
    $i=1;
    while(($i<=strlen($chaine)) and ($z==0)){
      if(((ord(substr($chaine,$i-1,1)))>=32 and (ord(substr($chaine,$i-1,1)))<=126) or ((ord(substr($chaine,$i-1,1)))==198)){
        $i++;  
      }else{
        $i=0;
        $z=1;
      }
    }
    $code128="";
    $tableB=true;
    if($i>0){
      $i=1;
      while($i<=strlen($chaine))
	  {
        if($tableB){
          if(($i==1) or (($i+3)==strlen($chaine))){
            $mini=4;
          }else{
            $mini=6;
          }
          $mini=Testnum($mini,$chaine,$i);
          if($mini<0){
            if($i==1){
              $code128=chr(210);
            }else{
              $code128=$code128.chr(204);
            }
            $tableB=false;
          }else{
            if($i==1){
              $code128=chr(209);
            }
          }          
        }
        if(!$tableB){
          $mini=2;
          $mini=Testnum($mini,$chaine,$i);
          if($mini<0){
            $dummy=Myval(substr($chaine,$i-1,2));
            if($dummy<95){
              $dummy=$dummy+32;
            }else{
              $dummy=$dummy+105;
            }
            $code128=$code128.chr($dummy);
            $i=$i+2;
          }else{
            $code128=$code128.chr(205);
            $tableB=true;
          }          
        }
        if($tableB){
          $code128=$code128.substr($chaine,$i-1,1);
          $i++;          
        }        
      }
	  
      for($i=1;$i<=strlen($code128);$i++)
	  {
        $dummy=ord(substr($code128,$i-1,1));
        if($dummy<127){
          $dummy=$dummy-32;
        }else{
          $dummy=$dummy-105;
        }
        if($i==1){
          $checksum=$dummy;
        }
        $checksum=($checksum+($i-1)*$dummy)%103;        
      }
	  
      if($checksum<95){
        $checksum=$checksum+32;
      }else{
        $checksum=$checksum+105;
      }
      $code128=$code128.chr($checksum).chr(211);      
    }
  }
  
  return utf8_encode($code128);
}

function Testnum($mini,$chaine,$i){
  $mini=$mini-1;
  if(($i+$mini)<=strlen($chaine)){
    $y=0;
    while(($mini>=0) and ($y==0)){
      if((ord(substr($chaine,($i+$mini-1),1))<48) or (ord(substr($chaine,($i+$mini-1),1))>57)){
        $y=1;
        $mini=$mini+1;
      }
      $mini=$mini-1;
    }
  }
  return $mini;
}

function Myval($chaine){
  $j=1;
  $chaine2="";
  while($j<=strlen($chaine)){
    if(is_numeric(substr($chaine,$j-1,1))){
      $chaine2.=substr($chaine,$j-1,1);
      $j++;
    }else{
      break;
    }    
  }  
  return $chaine2;
}

function CodeEAN13($chaine)
{
	$codeEAN="";
	$L=65; $G=75; $R=97;
	
	$inover = " ".substr("000000000000".$chaine,-strlen($chaine));
	for($i=1; $i<=12; $i++)
	{
		$C[$i] = intval(substr($inover,$i,1));
	}
	
	//	Génération de chiffre de contrôle avec checksum
	$CS=$C[1] + $C[3] + $C[5] + $C[7] + $C[9] + $C[11] + (($C[2] + $C[4] + $C[6] + $C[8] + $C[10] + $C[12]) * 3);
	$C[13]=(10 - ($CS % 10)) % 10;
	
	//	1e chiffre
	$codeEAN=substr($inover,1,1);
	//	'2ème au 7ème chiffre
	$c2=[$L, $L, $L, $L, $L, $L, $L, $L, $L, $L]; $codeEAN.=chr($C[2] + $c2[$C[1]]);
	$c3=[$L, $L, $L, $L, $G, $G, $G, $G, $G, $G]; $codeEAN.=chr($C[3] + $c3[$C[1]]);
	$c4=[$L, $G, $G, $G, $L, $G, $G, $L, $L, $G]; $codeEAN.=chr($C[4] + $c4[$C[1]]);
	$c5=[$L, $L, $G, $G, $L, $L, $G, $G, $G, $L]; $codeEAN.=chr($C[5] + $c5[$C[1]]);
	$c6=[$L, $G, $L, $G, $G, $L, $L, $L, $G, $G]; $codeEAN.=chr($C[6] + $c6[$C[1]]);
	$c7=[$L, $G, $G, $L, $G, $G, $L, $G, $L, $L]; $codeEAN.=chr($C[7] + $c7[$C[1]]);
	//	Séparateur au midi
	$codeEAN.="*";
	//	Chiffres de droite + chiffre de contrôle
	$codeEAN.=chr($C[8] + $R) . chr($C[9] + $R) . chr($C[10] + $R) . chr($C[11] + $R) . chr($C[12] + $R) . chr($C[13] + $R);
	//	Dernière barre
	$codeEAN.="+";
	
	return utf8_encode($codeEAN);
}

    //function errorHandler ($errno, $errstr, $errfile, $errline, $errcontext)
    function errorHandler ($errno, $errstr, $errfile, $errline) 
    {
       // If the error condition is E_USER_ERROR or above then abort.
  
       echo "Start Script : <br/>";
       echo "<b>Error:</b> [$errno] $errstr<br>";
       echo "Ending Script";
       die();
    }

    function CommaToDot($money) {
        return str_replace(',', '.', $money);
    }

    function NumberToEuro($number,$digits) {
        $Euro = str_replace('.', ',', number_format($number, $digits) );
        $Euro = str_replace('.', ' ', $Euro);
        return $Euro . ' ' . currencySymbole('Euros');
    }

    function StringToEuro($string) {
        return $string . ' ' . currencySymbole('Euros');
    }

    function NumberToDollar($number,$digits) {
        $Euro = str_replace('.', ',', number_format($number, $digits) );
        $Euro = str_replace('.', ' ', $Euro);
        return $Euro . ' ' . currencySymbole('Dollars');
    } 

    function phpAlert($msg) {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }

    function currencySymbole($sym) {
        $currency = array(
            'Dollars' => '$',
            'Euros' => '€',
            'Riels' => '៛'
        );

        return $currency[$sym];
    }

    function weightSymbole($sym) {
        $weight = array(
            'Ton' => 'T',
            'Kilogrammes' => 'Kg',
            'Grammes' => 'g'
        );

        return $weight[$sym];
    }

    function liquidSymbole($sym) {
        $liquid = array(
            'Litres' => 'L',
            'Decilitre' => 'dl',
            'Centilitre' => 'cl'
        );

        return $liquid[$sym];
    }

    /* Encryption and Descryption */
    function sign($message, $key) {
        return hash_hmac('sha256', $message, $key) . $message;
    }

    function verify($bundle, $key) {
        return hash_equals(
            hash_hmac('sha256', mb_substr($bundle, 64, null, '8bit'), $key),
            mb_substr($bundle, 0, 64, '8bit')
        );
    }

    function getKey($password, $keysize = 16) {
        return hash_pbkdf2('sha256',$password,'some_token',100000,$keysize,true);
    }

    function encrypt($message, $password) {
        $iv = random_bytes(16);
        $key = getKey($password);
        $result = sign(openssl_encrypt($message,'aes-256-ctr',$key,OPENSSL_RAW_DATA,$iv), $key);
        return bin2hex($iv).bin2hex($result);
    }

    function decrypt($hash, $password) {
        $iv = hex2bin(substr($hash, 0, 32));
        $data = hex2bin(substr($hash, 32));
        $key = getKey($password);
        if (!verify($data, $key)) {
           return null;
        }
        return openssl_decrypt(mb_substr($data, 64, null, '8bit'),'aes-256-ctr',$key,OPENSSL_RAW_DATA,$iv);
    }

    
/* //call function 
$string_to_encrypt = 'ROS Sopheaktra';
$password = 'password';
$encrypted_string = encrypt($string_to_encrypt, $password);
$decrypted_string = decrypt($encrypted_string, $password);
*/

/**
 * create file with content, and create folder structure if doesn't exist 
 * @param String $filepath
 * @param String $message
 */
function writeFile ($filepath, $message){
    try {
        $isInFolder = preg_match("/^(.*)\/([^\/]+)$/", $filepath, $filepathMatches);
        if($isInFolder) {
            $folderName = $filepathMatches[1];
            $fileName = $filepathMatches[2];
            if (!is_dir($folderName)) {
                mkdir($folderName, 0777, true);
            }
        }
        file_put_contents($filepath, $message);
    } catch (Exception $e) {
        echo "ERR: error writing '$message' to '$filepath', ". $e->getMessage();
    }
}

function readFiles($filepath){
    return file_get_contents($filepath);
}

?>