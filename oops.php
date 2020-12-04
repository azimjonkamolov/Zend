<?php
    echo "<h1>OOP in PHP</h1>";

    echo "Declaring a Class";
    echo "<br>";
    class myClass{
        // Class contents go here
    }

    $myClassInstance = new myClass();
    $copyInstance = $myClassInstance;

    echo "<br>";
    echo "Class Inheritance";
    echo "<br>";
    class a{
        function test(){
            echo "a::test called";
            echo "<br>";
        }
        function func(){
            echo "a::func called";
            echo "<br>";
        }
    }
    class b extends a{
        function test(){
            echo "b::test called";
            echo "<br>";
        }
    }
    class c extends b{
        function test(){
            parent::test();
        }
    }
    class d extends c{
        function test(){
            b::test();
        }
    }

    $a = new a();
    $b = new b();
    $c = new c();
    $d = new d();

    $a->test(); // Outputs "a::test called"
    $b->test(); // Outputs "b::test called"
    $b->test(); // Outputs "a::func called"
    $c->test(); // Outputs "b::test called"
    $d->test(); // Outputs "b::test called"

    echo "<br>";
    echo "Class Methods and Properties";
    echo "<br>";
    class myClassMethod{
        function myFunction($data) {
            echo "The value is $data";
        }
        function callMyFunction($data="Tom"){
            // Call myFunction();
            $this->myFunction($data);
        }
    }
    $obj = new myClassMethod();
    $obj->callMyFunction("John");
    
    echo "<br>";
    echo "Constructors & Destructors";
    echo "<br>";
    class Azim{
        function __construct()
        {
            echo __METHOD__ . PHP_EOL;
        }

        function __destruct()
        {
            echo __METHOD__;
        }
    }
    // new Azim();
    // $a = new Azim();
    // $b = $a;
    // unset($a);

    echo "<br>";
    echo "Visibility";
    echo "<br>";
    class foo {
        public $foo = "bar";
        protected $baz = "bat";
        private $qux = "bingo";
        function __construct()
        {
            var_dump(get_object_vars($this));
        }
    }
    class bar extends foo {
        function __construct()
        {
            var_dump(get_object_vars($this));
        }
    }
    class baz {
        function __construct() {
        $foo = new foo();
            var_dump(get_object_vars($foo));
        }
    }
    // new foo();
    // new bar();
    // new baz();

    echo "<br>";
    echo "Declaring and Accessing Properties";
    echo "<br>";
    class fool {
        public $bar;
        protected $baz;
        private $bas;
        // public var1 = "Test"; // String
        // public var2 = 1.23; // Numeric value
        // public var3 = array (1, 2, 3);
    }

    echo "<br>";
    echo "Constants, Static Methods and Properties";
    echo "<br>";
    class testClass{
        static $bar = "bat";
        static public function testfor(){
            echo "Hello World";
        }
    }
    $tester = new testClass();
    $tester->testfor();
    echo $tester->testfor;

    echo "<br>";
    echo "Class Constants";
    echo "<br>";
    class classConstants{
        const BAR = "Hello World";
    }
    echo classConstants::BAR;

    echo "<br>";
    echo "Interfaces & Abstract Classes";
    echo "<br>";
    abstract class DataStore_Adapter{
        private $id;
        abstract function insert();
        abstract function update();

        public function save(){
            if(!is_null($this->id)){
                $this->update();
            }else{
                $this->insert();
            }
        }
    }
    class PDO_DataStore_Adapter extends DataStore_Adapter{
        function insert(){
            // ...
        }
        function update(){
            // ...
        }
    }

    echo "<br>";
    echo "Interfaces";
    echo "<br>";
    interface DataStore{
        public function insert();
        public function update();
        public function save();
        public function newRecord($name = null);
    }
    // class DataStore_Adapter implements DataStore{
    //     public insert(){
    //         // ...
    //     }
    //     public update(){
    //         // ...
    //     }
    //     public save(){
    //         // ...
    //     }
    //     public function newRecord($name = null){

    //     }
    // }

    echo "<br>";
    echo "The Basic Exception Class";
    echo "<br>";
    class Exception{
        // The error message associated with this exception
        protected $message = 'Unknown Exception';
        // The error code associated with this exception
        protected $code = 0;
        // The error code of th file where the exception occured
        protected $file;
        // The line of the file where the exception occurred
        protected $file;
        // Construct
        function __construct($message = null, $code = 0);
        // Return the message
        final function getMessage();
        // Returns the error code
        final function getCode();
        // Returns the file line
        final function getFile();
        // Returns the file line
        final function getLine();
        // Returns and execution backtrace as an array
        final function getTrace();
        // Returns a backtrace as a string
        final function getTraceAsString();
        // Returns a string representation of the exception
        function __toString();
    }
    echo "<br>";
    echo "Reflection";
    echo "<br>";
    function hello($to="World"){
        echo "Hello $to";
    }
    $funcs = get_defined_functions();
?>
    <h1>Documentation</h1>
<?php
    function funName($bar, $baz=array()){
        $funcs = get_defined_functions();
        foreach($funcs['user'] as $func){
            try{
                $func = new ReflectionFunction($func);
            }catch(ReflectionException $e){
                // ...
            }
            $prototype = $func->name . ' ( ';
            $args = array();
            foreach($func->getParameters() as $param){
                $arg = '';
                if($param->isPassedByReference()){
                    $arg='&';
                }
                if($param->isOptional()){
                    $arg = '[' .$param->getName(). ' = ' .$param->getDefaultValue(). ']';
                }else{
                    $arg = $param->getName();
                }
                $args[] = $arg;
            }
            $prototype .= implode(", ", $args) . ')';
            echo "<h2>$prototype</h2>";
            echo "
                <p>
                Comment:
                </p>
                <pre>
                " .$func->getDocComment(). "
                <pre>
                <p>
                File: " .$func->getFileName(). "
                <br/>
                Lines: " .$func-getStartLine(). " - " .$func->getEndLine(). "
                </p>";
        }
    }