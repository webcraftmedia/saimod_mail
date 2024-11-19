<?php
namespace SQL;

class SUBSCRIBE extends \SYSTEM\DB\QP {
    public static function get_class(){return static::class;}
    public static function mysql(){return
'INSERT IGNORE INTO contact_email_list (email,list)VALUES(?,?);';
    }
}