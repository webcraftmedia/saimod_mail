<?php
namespace SQL;

class EMAIL_SENT_DELETE extends \SYSTEM\DB\QP {
    public static function get_class(){return static::class;}
    public static function mysql(){return
'DELETE FROM email_sent WHERE email=?;';
    }
}