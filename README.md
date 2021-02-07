<img src="https://github.com/azimjonkamolov/Zend/blob/master/images/Phoenix.png" align="right" height="150"/>

# Zend Certification Preparation [![Awesome](https://cdn.rawgit.com/sindresorhus/awesome/d7305f38d29fed78fa85652e3a63e154dd8e8829/media/badge.svg)](https://github.com/sindresorhus/awesome#readme)

## This repostiory is all about Zend Certification Preparation
Here I will provide every detail about how I prepared for my Zend certificate and will provided materials throughout. 
And I will try to provide every source code that I think will be helpfull for the exam and for other purposes. 
And describe the process day by day and until I get the certification soon ~~

<img src="https://github.com/azimjonkamolov/Main/blob/master/img/zend.png" align="right" height="150"/>

## Used Materials



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
    echo '1' . (print'2') + 3; // gives 214
~~~
Besides, the questions related to casting and variables ( as PHP also allows for variable variable names ) may confuse anyone:
~~~PHP
    // Example Two 
    // Related to casting
    $value = '123';
    $value = $value + 4; // gives 127
    echo $value;
    $value = (int)$value;
    echo $value + 8; // gives 135
    $value = (bool)$value;
    echo $value + 8;    // gives 9
    $value = 1234.56;
    echo (int)$value; // 1234 (not 1235)
    $value = -1234.56;
    echo (int)$value; // -1234

    // realated to variables
    $varName = 'name';
    $$varName = 'AzimjonKamolov';
    echo $name;
~~~