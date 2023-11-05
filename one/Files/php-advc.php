<!--  What Is Object Oriented Programming?  -->
<!--
    Object-Oriented Programming (OOP) is a programming paradigm that organizes software design around data, or objects, rather than functions and logic¹. An object can be defined as a data field that has unique attributes and behavior¹. The main aim of OOP is to bind together the data and the functions that operate on them so that no other part of the code can access this data except that function².

OOP is based on several core concepts:

1. **Abstraction**: This concept allows us to hide the implementation from the user but shows only essential information to the user¹.
2. **Encapsulation**: Encapsulation is a mechanism that allows us to bind data and functions of a class into an entity. It protects data and functions from outside interference and misuse¹.
3. **Inheritance**: This concept allows us to inherit or acquire the properties of an existing class (parent class) into a newly created class (child class). It provides code reusability¹.
4. **Polymorphism**: It allows us to create methods with the same name but different method signatures¹.

These concepts help to reduce complexity, increase security, and make maintenance easier¹. OOP is well suited for programs that are large, complex, and actively updated or maintained¹..

-->

<!-- --------------------------------------------------------------------------- -->

<!-- What Are Properties Of Object Oriented Systems? -->
<!--
    Class and Objects: An object-oriented system revolves around a class and objects. A class is used to describe characteristics of any entity of the real world. An object is a pattern of the class. An actual object created at runtime is called an instance1.

Inheritance: The main class or the root class is called a Base Class. Any class which is expected to have all properties of the base class along with its own is called a Derived class1.

Abstraction: Abstraction is creating models or classes of some broad concept. Abstraction can be achieved through Inheritance or even Composition1.

Encapsulation: Encapsulation is a collection of functions of a class and object. It is achieved by specifying which class can use which members (private, public, protected) of an object1.

Polymorphism: Polymorphism means existing in different forms. Inheritance is an example of Polymorphism. A base class exists in different forms as derived classes1.

Modularity: Modularity is the property of a system that has been decomposed into a set of cohesive and loosely coupled modules2.

Message Passing: Objects in Object-Oriented Systems interact through messages3.
    -->

<!-- --------------------------------------------------------------------------- -->


<!-- What Is Difference Between Class And Interface? -->
<!-- 
    class is a full-featured blueprint that includes implementation details, while an interface is a lightweight blueprint that only includes method signatures, acting as a contract for classes
 -->

<!-- --------------------------------------------------------------------------- -->

<!--  Overloading -->
<!-- 
    Overloading is a concept in object-oriented programming where a class can have multiple methods with the same name but different parameters12. This allows developers to write more concise and flexible code, enhancing the overall readability and maintainability of the program3. Overloading provides code clarity, eliminates complexity, and enhances runtime performance4.

For example, consider a method named add(). This method can be overloaded to perform addition for different types of parameters, like two integers, three integers, two doubles, etc12. The actual method that gets called during runtime is resolved at compile time, thus avoiding runtime errors4.
  -->

<!-- --------------------------------------------------------------------------- -->


<!-- What Is Scope Resolution Operator (::) with Example-->
<!--
    The Scope Resolution Operator, also known as the double colon (::), is a token in PHP that allows access to static, constant, and overridden properties or methods of a class1. When referencing these items from outside the class definition, you use the name of the class
  -->
<?php
class MyClass
{
    public $CONST_VALUE = 'A constant value';
}

$classname = 'MyClass';
echo $classname::$CONST_VALUE;  // Outputs: A constant value
echo MyClass::$CONST_VALUE;  // Outputs: A constant value

?>

<!-- --------------------------------------------------------------------------- -->


<!-- What are the differences between abstract classes and interfaces?  -->
<!-- 
Declaration: An abstract class is declared using the abstract keyword, while an interface is declared using the interface keyword12.

Methods: An abstract class can have both abstract (method declaration without implementation) and non-abstract (method declaration with implementation) methods. An interface can only have abstract methods12.

Inheritance: A class can inherit from another class using the extends keyword and can implement an interface using the implements keyword. An interface can only extend other interfaces12.

Variables: An abstract class can have final, non-final, static, and non-static variables. An interface can only have static and final variables12.

Access Modifiers: An abstract class can have any type of members (private, public, protected, default). An interface can only have public members12.

Multiple Inheritance: Classes do not support multiple inheritance (a class cannot inherit from more than one class), but they can implement multiple interfaces. Interfaces support multiple inheritance12.

In summary, an abstract class is a full-featured blueprint that includes implementation details, while an interface is a lightweight blueprint that only includes method signatures, acting as a contract for classes
 -->

<!-- --------------------------------------------------------------------------- -->


<!-- Define Constructor and Destructor? -->
<!-- 
A **constructor** is a special member function of a class that is automatically called whenever an instance of the class is created¹². It has the same name as the class and is used to initialize the object of the class¹². The constructor can either accept arguments or not¹. It is used to allocate memory to an object of the class¹. There can be many constructors in a class¹. It can be overloaded but it cannot be inherited or virtual¹. There is a concept of a copy constructor which is used to initialize an object from another object¹.

On the other hand, a **destructor** is also a special member function of a class that is automatically called when an object is destroyed¹². It has the same name as the class but is preceded by a tilde (~) operator¹. The destructor is used to deallocate the memory of an object¹. It is called when the object of the class is freed or deleted¹. In a class, there is always a single destructor without any parameters so it can’t be overloaded¹. It is always called in the reverse order of the constructor¹.

In summary, a constructor is used to initialize an object when it is created, while a destructor is used to clean up resources when the object is destroyed¹². Let me know if you need help with anything else! 😊

 -->

<!-- --------------------------------------------------------------------------- -->

<!-- How to Load Classes in PHP? -->
<!-- 
    In PHP, classes can be loaded automatically using the `spl_autoload_register()` function¹². This function registers any number of autoloaders, enabling for classes and interfaces to be automatically loaded if they are currently not defined¹².

Here is an example of how to use `spl_autoload_register()` to load classes:

```php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$obj = new MyClass();
```

In this example, the `spl_autoload_register()` function is passed an anonymous function that includes the PHP file for a class when a new object is created¹². The class will be loaded from its corresponding `.php` file when it comes into use for the first time¹.

Please note that the class files should be in the same directory as the PHP script for the autoloading to work. If the classes are in a different directory, you would need to specify the path to the class files in the `include` statement¹².

Also, if the corresponding `.php` file having class definition is not found, an error will be displayed¹.

-->

<!-- --------------------------------------------------------------------------- -->

<!-- How to Call Parent Constructor? -->
<?php
class ParentClass
{
    function __construct()
    {
        echo "Constructing ParentClass";
    }
}

class ChildClass extends ParentClass
{
    function __construct()
    {
        parent::__construct();
        echo "Constructing ChildClass";
    }
}

$obj = new ChildClass();
?>

<!-- --------------------------------------------------------------------------- -->

<!-- Are Parent Constructor Called Implicitly When Create An ObjectOf Class? -->
<!-- 
    In PHP, parent constructors are not called implicitly if the child class defines a constructor1. If the child class has its own constructor, you need to explicitly call the parent constructor within the child constructor using parent::__construct()1
 -->
 <?php
 class ParentClass2 {
    function __construct() {
        echo "ParentClass constructor";
    }
}

class ChildClass2 extends  {
    function __construct() {
        ParentClass2::__construct();
        echo "ChildClass constructor";
    }
}

$obj = new ChildClass2();  // Outputs: ParentClass constructor ChildClass constructor

 ?>

<!-- --------------------------------------------------------------------------- -->

<!-- What Happen, If Constructor Is Defined As Private Or Protected?  -->
<!-- In PHP, if a constructor is defined as private or protected, it prevents the class from being instantiated from outside of the class1. This means you cannot create an object of the class directly using the new keyword1 -->
<?php
class MyClass {
    private function __construct() {
        // ...
    }
}
$obj = new MyClass();  // This will cause an error

?>

<!-- --------------------------------------------------------------------------- -->

<!--  What are PHP Magic Methods/Functions? List them -->
<!--
    Magic methods in PHP are special methods that start with a double underscore (__) and are automatically called when certain conditions are met12. These methods override PHP’s default actions when certain actions are performed on an object1. Here are the magic methods in PHP12:

__construct(): This method is called when an object is created12.
__destruct(): This method is called when an object is destroyed12.
__call(): This method is called when an inaccessible or non-existing method is invoked12.
__callStatic(): This method is called when an inaccessible or non-existing static method is invoked1.
__get(): This method is called when an inaccessible or non-existing property is accessed12.
__set(): This method is called when an inaccessible or non-existing property is set12.
__isset(): This method is called when isset() or empty() is called on an inaccessible or non-existing property1.
__unset(): This method is called when unset() is called on an inaccessible or non-existing property1.
__sleep(): This method is called when serialize() is called on an object1.
__wakeup(): This method is called when unserialize() is called on an object1.
__toString(): This method is called when an object is used in a string context12.
__invoke(): This method is called when a script tries to call an object as a function1.
__set_state(): This method is called when var_export() is used on an object1.
__clone(): This method is called when an object is cloned1.
__debugInfo(): This method is called when var_dump() is used on an object12.
These magic methods provide a way to override default PHP behavior and add custom functionality to your classes1
  -->

<!-- --------------------------------------------------------------------------- -->

<!-- Write program for Static Keyword in PHP? -->
<?php
class MyClass {
    public static $count = 0;

    public function __construct() {
        self::$count++;
    }

    public static function getCount() {
        return self::$count;
    }
}

$obj1 = new MyClass();
$obj2 = new MyClass();
$obj3 = new MyClass();

echo "Number of MyClass objects created: " . MyClass::getCount();
?>

<!-- --------------------------------------------------------------------------- -->

<!-- Create multiple Traits and use it in to a single class? -->
<?php
trait Trait1 {
    public function method1() {
        echo "Method1 from Trait1\n";
    }
}

trait Trait2 {
    public function method2() {
        echo "Method2 from Trait2\n";
    }
}

class MyClass {
    use Trait1, Trait2;

    public function myMethod() {
        echo "Method from MyClass\n";
    }
}

$obj = new MyClass();
$obj->method1();  // Outputs: Method1 from Trait1
$obj->method2();  // Outputs: Method2 from Trait2
$obj->myMethod();  // Outputs: Method from MyClass

?>

<!-- --------------------------------------------------------------------------- -->

<!-- Write PHP Script of Object Iteration? -->
<?php
class MyClass {
    public $var1 = 'value 1';
    public $var2 = 'value 2';
    protected $var3 = 'value 3';
    private $var4 = 'value 4';

    function iterateVisible() {
        echo "MyClass::iterateVisible:\n";
        foreach ($this as $key => $value) {
            print "$key => $value\n";
        }
    }
}

$class = new MyClass();

foreach($class as $key => $value) {
    print "$key => $value\n";
}
echo "\n";

$class->iterateVisible();
?>

<!-- --------------------------------------------------------------------------- -->

<!--Use of The $this keyword in php  -->
<!--
    In PHP, $this is a reserved keyword that refers to the calling object1. It is usually the object to which the method belongs, but it could also be another object if the method is called statically from the context of a secondary object1. This keyword is only applicable to internal methods1
-->

<!--  -->
