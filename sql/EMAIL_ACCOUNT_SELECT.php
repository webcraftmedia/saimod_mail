<?php
namespace SQL;

class EMAIL_ACCOUNT_SELECT extends \SYSTEM\DB\QP {
    public static function get_class(){return static::class;}
    public static function mysql(){return
'SELECT * FROM email_account WHERE email = ?;';
    }
}