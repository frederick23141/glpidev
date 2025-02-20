//
<?php
//$CFG_GLPI['url'] = 'http://10.10.10.244/glpi/';
//class DB extends DBmysql {
//   public $dbhost = 'localhost';
//   public $dbuser = 'root';
//   public $dbpassword = '';
//   public $dbdefault = 'helpdesk';
//   public $use_timezones = true;
//   public $use_utf8mb4 = true;
//   public $allow_myisam = false;
//   public $allow_datetime = false;
//   public $allow_signed_keys = false;
//}
$CFG_GLPI['url'] = 'https://mesa.azurewebsites.net/';

class DB extends DBmysql {
   public $dbhost = 'adminhelpdesk.mysql.database.azure.com'; // Nombre del servidor en Azure
   public $dbuser = 'Adminservice'; // Usuario de la base de datos en Azure
   public $dbpassword = 'Appservices.>'; // Contraseña de la base de datos en Azure
   public $dbdefault = 'helpdesk'; // Nombre de la base de datos
   public $use_timezones = true;
   public $use_utf8mb4 = true;
   public $allow_myisam = false;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
}


