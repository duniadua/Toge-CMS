<?php

/**
 * Description of Authorization
 *
 * @package Codeigniter 2.~
 * @author sahid
 * @link www.terastekno.net
 * 
 */
class Authorization extends CI_Session {

    public function __construct() {
        parent::__construct();
    }

    /*
     * Setup user redirect if failed
     * Return url to redirect
     * <code>
     * setRedirectLogOut($url = 'url to redirect')
     * </code>     
     */

    public static function setRedirectLogOut($url = 'logout') {
        return $url;
    }

    /*
     * Redirect if failed
     * Return url to redirect
     * <code>
     * redirectLogOut()
     * using Authorization::redirectLogOut()
     * </code>     
     */

    public static function redirectLogOut() {
        return Authorization::setRedirectLogOut();
    }

    /*
     * Cek user authorization
     * if session isValid was FALSE should redirect to 
     * setRedirectLogOut function     
     */

    public function cekAuthorization() {
        $authReturn = FALSE;
        try {
            $validLogin = $this->userdata('isValid');

            if (isset($validLogin)):
                if ($validLogin == 'TRUE'):
                    return $authReturn = TRUE;
                endif;
            else:
                return $authReturn = FALSE;
            endif;
        } catch (Exception $exc) {
            echo $this->failedLogin($exc->getMessage());
        }

        return $authReturn;
    }

    /*
     * Failed login here
     * Passing the error message to $message variable
     * Session item is err_mssg, you can get the item from this variable
     * set temporary flash data session    
     */

    public function failedLogin($message) {
        $this->set_flashdata('err_mssg', "<p class='text-danger'>" . $message . "</p>");
    }

    /*
     * Setup User data to session
     * isValid return as True value         
     */

    public function setUserCredential($email) {
        $userData = array(
            'email' => $email,
            'isValid' => 'TRUE'
        );

        $this->set_userdata($userData);
    }

}
