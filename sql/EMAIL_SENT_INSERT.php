<?php
namespace SQL;

class EMAIL_SENT_INSERT extends \SYSTEM\DB\QP {
    public static function get_class(){return static::class;}
    public static function mysql(){return
'REPLACE INTO email_sent (id,email)VALUES(?,?);';
    }
}