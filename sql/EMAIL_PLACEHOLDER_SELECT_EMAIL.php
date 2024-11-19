<?php
namespace SQL;

class EMAIL_PLACEHOLDER_SELECT_EMAIL extends \SYSTEM\DB\QP {
    public static function get_class(){return static::class;}
    public static function mysql(){return
'SELECT * FROM email_placeholder WHERE email = ?;';
    }
}