<img src="assets/img/zendlogo.png" align="right" height="150"/>

# Zend Certification Preparation [![Awesome](https://cdn.rawgit.com/sindresorhus/awesome/d7305f38d29fed78fa85652e3a63e154dd8e8829/media/badge.svg)](https://github.com/sindresorhus/awesome#readme)

## This repostiory is all about Zend Certification Preparation
Here I will provide every detail about how I prepared for my Zend certificate and will provided materials throughout. 
And I will try to provide every source code that I think will be helpfull for the exam and for other purposes. 
And describe the process day by day and until I get the certification soon ~~

## Used Materials

<img src="assets/img/book.jpg" align="right" height="150"/>

The main book I use: 
[PHP 7 Zend Certification Study Guide](https://www.amazon.com/PHP-Zend-Certification-Study-Guide-ebook/dp/B077G9Q6L5)

I am currently following the tips of this book to prepare for the exam and refreshing my knowledge on the topic 
and I should say the basics may not get attention but they play very important role on the exam so I have to 
review basics more as according to this book, exam checks how well you know the fundamentals first, and then the rest. 
Besides this book, other online sources will be added bellow: 
* [PHP Documentaion](https://www.php.net/docs.php)
* [Zend Main page](https://www.zend.com/)

## Basics part

Don't let the name "basics" fool you, even though this teaches you basic PHP elements this part is considered one of the main parts of the exam, and the exam has some tricky questions to confuse anyone such as this one bellow:
~~~PHP
    // Example One
    // this was the question that I got in Medium
    echo '1' . (print'2') + 3; // the answer is 214
~~~
Besides, the questions related to casting and variables ( as PHP also allows for variable variable names ) may confuse anyone:
~~~PHP
    // Related to casting
    $a = '123';
    $a = $a + 4;
    echo $a;
    $a = (int)$a;
    echo $a + 8;
    $a = (bool)$a;
    echo $a + 8;
    $a = 1234.56;
    echo (int)$a; // 1234 (not 1235)
    $a = -1234.56;
    echo (int)$a; // -1234

    // realated to variables
    $varName = 'name';
    $$varName = 'AzimjonKamolov';
    echo $name;
~~~