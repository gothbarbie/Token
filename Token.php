<?php namespace Gothbarbie\Token;
/**
 * Token handler.
 * Tokens are unique hash strings stored in a session cookie and sent via form,
 * used to prevent Cross-Site Request Forgery (CSRF).
 *
 * Author: Hanna Söderström
 * Email:  info@hannasoderstrom.com
 *
 */
 
class Token
{
   /**
    * Generates a session token string.
    * @return string
    */
    public static function generate()
    {
        return $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
    }

   /**
    * Compares a token string with session token.
    * @param string $token
    * @return boolean
    */
    public static function check($token)
    {
        if ( isset($_SESSION['token']) AND $token === $_SESSION['token'] ) {
            unset($_SESSION['token']);
            return true;
        }
        return false;
    }

    public static function exists($token)
    {
      return isset($_SESSION[$token]);
    }
}
