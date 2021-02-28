<?php
    define('DB_SERVER','localhost');   
    define('DB_USER','root');
    define('DB_PASS','');
    define('DATABASE','toolbox');
	class connectDatabase{
        public $connection;
        public $debug=array();
        function __construct() {
            $this->connection= mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
            mysqli_select_db($this->connection, DATABASE);
            $this->connection->set_charset("utf8");
        }
	}
