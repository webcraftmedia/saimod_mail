<?php
namespace SQL;

class CONTACT_INSERT_EMAIL extends \SYSTEM\DB\QP {
    public static function get_class(){return static::class;}
    public static function mysql(){return
'INSERT IGNORE INTO contact (email)VALUES(?);';
    }
}