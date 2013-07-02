<?php
namespace Allty\Utils;

class Base58 {
    
    static $alphabet = '123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
    
    const BASE = 58;
    
    public static function encode($int) {
        
        if(!is_integer($int)) {
            throw new \InvalidArgumentException('$int must be an integer. Got a '.gettype($int).'.');
        }
        
        $encoded = '';
        
        while($int) {
            $remainder = $int % self::BASE;
            $int = floor($int / self::BASE);
            $encoded = self::$alphabet{$remainder} . $encoded;       
        }
        
        return $encoded;
    }
    
    public static function decode($str) {
        
        if(!is_string($str)) {
            throw new \InvalidArgumentException('$str must be a string. Got a '.gettype($str).'.');
        }
        
        $decoded = 0;
        
        while($str) {
            
            if(($alphabetPosition = strpos(self::$alphabet, $str[0])) === false) {
                throw new \RuntimeException('decode() cannot find "'.$str[0].'" in alphabet.');
            }
            
            $decoded += $alphabetPosition * (pow(self::BASE, strlen($str) - 1));
            $str = substr($str, 1);
        }
        
        return $decoded;
    }
    
}

