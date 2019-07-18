<?php
namespace Aes;

class Aes {

    public $key = 'test_key';
    
    public function __construct($key = ''){
        $key = strval($key);
        if(!empty($key) ){
            $this->key = $key;
        }
    }
    
    /**
     *
     * @param string $string ��Ҫ���ܵ��ַ���
     * @param string $key ��Կ
     * @return string
     */
    public function encrypt($string)
    {
        // openssl_encrypt ���ܲ�ͬMcrypt������Կ����Ҫ�󣬳���16���ܽ������
        $data = openssl_encrypt($string, 'AES-128-ECB', $this->key, OPENSSL_RAW_DATA);
        $data = strtolower(bin2hex($data));
        return $data;
    }

    /**
     * @param string $string ��Ҫ���ܵ��ַ���
     * @param string $key ��Կ
     * @return string
     */
    public function decrypt($string)
    {
        $decrypted = openssl_decrypt(hex2bin($string), 'AES-128-ECB', $this->key, OPENSSL_RAW_DATA);
        return $decrypted;
    }
}