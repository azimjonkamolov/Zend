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
    
?>