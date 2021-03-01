<?php
    require ("con/ak.php");
    global $MAIN;

    class A{
        function test(){
            echo __METHOD__ . " called\n";
        }
        function func(){
            echo __METHOD__ . " called\n";
        }
    }
    class B extends A{
        function test(){
            echo __METHOD__ . " called\n";
        }
    }
    class C extends B{
        function test(){
            parent::test();
        }
    }
    class D extends C{
        function test(){
            B::test();
        }
    }
    $a = new A();
    $b = new B();
    $c = new C();
    $d = new D();

    $a->test();
    echo "<br>";
    $b->test();
    echo "<br>";
    $b->test();
    echo "<br>";
    $c->test();
    echo "<br>";
    $d->test();

    class MyClass{
        function myFunction(){
            echo "You called myClass::myFunction";
        }
    }
    echo "<br>";
    $obj = new MyClass();
    $obj->myFunction();
    echo "<br>";
    class MyValue{
        function myFunction($data){
            echo "The value is $data";
        }
        function callMyFunction($data){
            // Call myFunction()
            $this->myFunction($data);
        }
    }
    $obj = new myValue();
    $obj->callMyFunction(123);
    class myConst{
        function __construct(){
            echo __METHOD__ . " not called thou!";
        }
        function __destruct(){
            echo __METHOD__ . " not called thou!";
        }
    }
    echo "<br>";
    $value = new myConst();
    echo "<br>";
    class ClassOne{
        public $one = 'bar';
        protected $two = 'bat';
        private $three = 'bingo';
        function __construct(){
            var_dump(get_object_vars($this));
        }
    }
    class ClassTwo extends ClassOne{
        function __construct(){
            var_dump(get_object_vars($this));
        }
    }
    class ClassThree{
        function __construct(){
            $one = new ClassOne();
            var_dump(get_object_vars($one));
        }
    }
    new ClassOne();
    new ClassTwo();
    new ClassThree();


    
?>