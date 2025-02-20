<?php
$CFG_GLPI['url'] = 'http://10.10.10.244/glpi/';
class DB extends DBmysql {
   public $dbhost = 'localhost';
   public $dbuser = 'root';
   public $dbpassword = '';
   public $dbdefault = 'helpdesk';
   public $use_timezones = true;
   public $use_utf8mb4 = true;
   public $allow_myisam = false;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
}

