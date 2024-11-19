<?php
namespace SQL;

class EMAIL_UPDATE extends \SYSTEM\DB\QP {
    public static function get_class(){return static::class;}
    public static function mysql(){return
'UPDATE email SET name=?, account=?, sender=?, subject=?, template_text=?, template_html=? WHERE id=?;';
    }
}