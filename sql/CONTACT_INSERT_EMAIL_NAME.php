<?php
namespace SQL;

class CONTACT_INSERT_EMAIL_NAME extends \SYSTEM\DB\QP {
    public static function get_class(){return static::class;}
    public static function mysql(){return
'REPLACE INTO contact (email,sex,name_first,name_last)VALUES(?,?,?,?);';
    }
}