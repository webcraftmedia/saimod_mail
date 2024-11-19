<?php
namespace SQL;

class EMAIL_PLACEHOLDER_UPDATE extends \SYSTEM\DB\QP {
    public static function get_class(){return static::class;}
    public static function mysql(){return
'UPDATE email_placeholder SET `name`=?,`type`=?,`data`=? WHERE `email` = ? AND `id` = ?;';
    }
}