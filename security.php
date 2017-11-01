<?php
/**
 * AES/CBC/PKCS5Padding   encrypt decrypt
 * js: https://blog.zhengxianjun.com/online-tool/crypto/aes/
 * 
 */
class Security {

	public static function encrypt($contents, $encryptKey){
		$iv = $encryptKey;
		$re = openssl_encrypt($contents, 'aes-128-cbc', $encryptKey, OPENSSL_RAW_DATA, $iv);
		$re = base64_encode($re);
		return $re;
	}
	
	public static function decrypt($contents, $encryptKey){
		$iv = $encryptKey;
		$contents = base64_decode($contents);
		$re = openssl_decrypt($contents, 'aes-128-cbc', $encryptKey, OPENSSL_RAW_DATA, $iv);
		return $re;
	}
}
?>
