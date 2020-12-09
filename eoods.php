<?php
    echo "<h1>Elements of Object-oriented Design</h1>";
    echo "The Singleton Pattern";
    echo "<br>";

    // class DB{
    //     private static $_singleton;
    //     private $_connection;

    //     private function __construct(){
    //         $this->_connection = mysql_connect(); // It connects to the database automatically as of __construct()
    //     }
    //     public static function getInstance(){
    //         if(is_null(self::$_singleton)){
    //             self::$_singleton = new DB();
    //         }
    //         return self::$_singleton;
    //     }
    // }
    // $db = DB::getInstance();
    echo "<br>";
    echo "The Factory Pattern";
    echo "<br>";
    class Configuration{
        const STORE_INI = 1;
        const STORE_DB = 2;
        const STORE_XML = 3;
        public static function getStore($type = self::STORE_XML){
            switch($type){
                case self::STORE_INI:
                    return new Configuration_Ini();
                case self::STORE_DB:
                    return new Configuration_DB();
                case self::STORE_XML:
                    return new Configuration_XML();
                default:
                throw new Exception("Unknown Datastore Specified");
            }
        }
    }
    class Configuration_Ini{
        // ...
    }
    class Configuration_DB{
        // ...
    }
    class Configuration_XML{
        // ...
    }
    $config = Configuration::getStore(Configuration::STORE_XML);

    echo "<br>";
    echo "The Registry Pattern";
    echo "<br>";
    class Registry {
            private static $_register;
            public static function add(&$item, $name = null)
        {
        if (is_object($item) && is_null($name)) {
            $name = get_class($item);
        } elseif (is_null($name)) {
            $msg = "You must provide a name for non-objects";
            throw new Exception($msg);
        }
            $name = strtolower($name);
            self::$_register[$name] = $item;
        }
            public static function &get($name)
        {
            $name = strtolower($name);
            if (array_key_exists($name, self::$_register)) {
                return self::$_register[$name];
            } else {
                $msg = "'$name' is not registered.";
                throw new Exception($msg);
            }
            }
                public static function exists($name)
            {
                $name = strtolower($name);
            if (array_key_exists($name, self::$_register)) {
                return true;
            } else {
                return false;
            }
        }
    }
    // $db = new DB();
    // Registry::add($db);
    // // Later on
    // if (Registry::exists('DB')) {
    //     $db = Registry::get('DB');
    // } else {
    //     die('We lost our Database connection somewhere. Bear with us.');
    // }
    
    echo "<br>";
    echo "Accessing Objects as Arrays";
    echo "<br>";
    interface ArrayAccess {
        function offsetSet($offset, $value);
        function offsetGet($offset);
        function offsetUnset($offset);
        function offsetExists($offset);
    }
    class myArray implements ArrayAccess {
        protected $array = array();
        function offsetSet ($offset, $value) {
            if (!is_numeric ($offset)) {
            throw new Exception ("Invalid key $offset");
            }
            $this->array[$offset] = $value;
        }
        function offsetGet ($offset) {
            return $this->array[$offset];
        }
        function offsetUnset ($offset) {
            unset ($this->array[$offset]);
        }
        function offsetExists ($offset) {
            return array_key_exists ($this->array, $offset);
        }
    }
    $obj = new myArray();
    $obj[1] = 2; // Works.
    $obj['a'] = 1; // Throws exception.

    echo "<br>";
    echo "Simple Iteration";
    echo "<br>";
    interface Iterator {
    function current();
    function next();
    function rewind();
    function key();
    function valid();
    function seek($key);
    }
    // class myData implements Iterator {
    //     private $_myData = array(
    //     "foo",
    //     "bar",
    //     "baz",
    //     "bat");
    //     private $_current = 0;
    //     function current() {
    //         return $this->myData[$this->current];
    //     }
    //     function next() {
    //     $this->current += 1;
    //     }
    //     function rewind() {
    //         $this->current = 0;
    //     }
    //     function key() {
    //         return $this->current;
    //     }
    //     function valid() {
    //         return isset($this->myData[$this->current]);
    //     }
    // }
    // $data = new myData();
    // foreach ($data as $key => $value) {
    //     echo "$key: $value\n";
    // }

?>