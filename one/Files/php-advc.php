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
   In PHP, the $this keyword is used within a class to refer to the current object. It’s a reference to the calling object,
   which is the instance of the class where the method is currently being executed
-->
<!-- 
    Consider the exercise11and add a edit link near delete link e.g. Clicking up on edit
button a particular row should be open in editing mode
e.g. on the Particular row there should be filled text box with data and on the option
column there should be a confirm button clicking upon it arrow should be updated.

ans:-
<!-- CODE -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "input_assigment";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$fetch_query = "SELECT * FROM info WHERE id='1'";
$result = $conn->query($fetch_query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $existing_data = array(
        "name" => $row["name"],
        "Password" => $row["password"],
        "ComfermPassword" => $row["confirm_password"],
        "Salutation" => $row["salutation"],
        "MiddleName" => $row["middle_name"],
        "Ragident_Status" => $row["resident_status"],
        "email" => $row["email"],
        "FirstName" => $row["first_name"],
        "LastName" => $row["last_name"],
        "Country" => $row["country"],
        "Mo_Nmber" => $row["phone_number"],
        "Ac_Num" => $row["account_number"],
        "Niick_Name" => $row["nickname"],
        "FundTranf" => $row["fund_transfer"]
    );
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["delete"])) {
        $login_id = 1;
        $delete_query = "DELETE FROM info WHERE id='$login_id'";
        $conn->query($delete_query);
    } elseif (isset($_POST["editSubmit"])) {
        $login_id = 1;
        $field_to_edit = $_POST["editField"];
        $new_value = $_POST["editValue"];
        // print_r($_POST);
        $update_query = "UPDATE info SET $field_to_edit='$new_value' WHERE id='$login_id'";
        print_r($update_query);
        $conn->query($update_query);
    } else {
        $login_id = 1;
        $password = $_POST["Password"];
        $confirm_password = $_POST["ComfermPassword"];
        $salutation = $_POST["Salutation"];
        $middle_name = $_POST["MiddleName"];
        $resident_status = $_POST["Ragident_Status"];
        $email = $_POST["email"];
        $first_name = $_POST["FirstName"];
        $last_name = $_POST["LastName"];
        $country = $_POST["Country"];
        $phone_number = $_POST["Mo_Nmber"];
        $account_number = $_POST["Ac_Num"];
        $nickname = $_POST["Niick_Name"];
        $fund_transfer = $_POST["FundTranf"];

        $check_query = "SELECT * FROM info WHERE id='$login_id'";
        $result = $conn->query($check_query);

        if ($result->num_rows > 0) {
            $update_query = "UPDATE info SET password='$password', confirm_password='$confirm_password', salutation='$salutation', middle_name='$middle_name', resident_status='$resident_status', email='$email', first_name='$first_name', last_name='$last_name', country='$country', phone_number='$phone_number', account_number='$account_number', nickname='$nickname', fund_transfer='$fund_transfer' WHERE login_id='$login_id'";
            $conn->query($update_query);
        } else {
            $insert_query = "INSERT INTO info (id, password, confirm_password, salutation, middle_name, resident_status, email, first_name, last_name, country, phone_number, account_number, nickname, fund_transfer) VALUES ('$login_id', '$password', '$confirm_password', '$salutation', '$middle_name', '$resident_status', '$email', '$first_name', '$last_name', '$country', '$phone_number', '$account_number', '$nickname', '$fund_transfer')";
            $conn->query($insert_query);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="./index.css">
    <script src="../FormPage/index.js" defer></script>
</head>
<body> 

<!-- ---------------------------------------- STYLE------------------------------------------------ -->
    <style>
        
:root{
    --B_T-- :  clamp(2rem, 2rem + 2vw , 7rem);
    --B_T_3-- :  clamp(.5rem, 1rem + 2vw , 4rem);
}
h1{
    background-color: blue;
    text-align: center;
    width: 100%;
}
*,*::before,*::after{
    padding: 0%;
    margin: 0%;
    isolation: isolate;
    box-sizing: border-box;
}
.Color_Red{
    color: red;
}
body{
    background-color: cyan;
    display: flex;
    flex-direction: column;
    gap: 2rem;
}
.B_T{
    width: 100%;
    font-size: var(--B_T--);
    display: block;
}
.B_T_3{
    width: 100%;
    font-size: var(--B_T_3--);
    display: block;
}
.Title{
    background-color: white;
   height: 5rem;
   display: flex;
   align-items: center;
}
.user {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-inline: 10%;
}
.Left{
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-inline: 20%;
}
.Align{
    display: flex;
    width: 100%;
    margin-block: .2rem;
    /* column-gap: 1rem; */
    gap: 1rem;
    justify-content: flex-end;
}
.User_info_Wrap{
  display: flex;
}
.personal{
    
    display: flex;
    flex-direction: column;
    gap: 1rem;

}
.A_C{
    display: flex;
    flex-direction: column;
    gap: 1rem;
}
 /* Additional styles for the modal */
.modal{
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
}

.modal-content {
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    text-align: center;
}

.modal-button {
    margin-top: 10px;
}
    </style>

<!-- ---------------------------------------- PHP------------------------------------------------ -->
<?php

print_r($_REQUEST);

?>
<!-- ---------------------------------------- HTML ------------------------------------------------ -->
<form action="" method="post" enctype="multipart/form-data">
    <div class="Title">
 
            <h1 class="B_T Color_Red">indivisul ragistartion</h1>
      
    </div>
    <div class="user">
        <h3 class="B_T_3 Color_Red">User Perticular</h3>
        <div class="User_info_Wrap">
                
                <div class="Left">
                    <div class="Align">
                    <label for="Login_ID">*Login ID:</label>
                    <input  class="IN"   type="text" id="name" name="$login_id" required value="<?php echo isset($existing_data['name']) ? $existing_data['name'] : ''; ?>"><br>
                </div>
                <div class="Align">
                    <label for="Password">*Password:</label>
                    <input  class="IN"  type="Password" id="Password" name="password" required
                    value="<?php echo isset($existing_data['Password']) ? $existing_data['Password'] : ''; ?>"
                    ><br>
                </div>
                <div class="Align">
                    <label for="ComfermPassword">*ComfermPassword:</label>
                    <input  class="IN"  type="ComfermPassword" id="ComfermPassword" name="confirm_password" required
                    value="<?php echo isset($existing_data['ComfermPassword']) ? $existing_data['ComfermPassword'] : ''; ?>"
                    ><br>
                </div>

                
        </div>
    </div>
    <br>
    <br>
    <br>
    <h3 class="B_T_3 Color_Red">personal Perticular</h3>
    <br>
    <br>
    <br>
    <div class="personal">
        <div class="User_info_Wrap">
            <div class="personal_right">
                <div class="" style="margin-inline: 5%; display:flex;justify-content:flex-end;">

                    <label for="Salutation">Salutation:</label>
                        <select id="Salutation" name="salutation">
                        <option value="one" <?php echo (isset($existing_data['Salutation']) && $existing_data['Salutation'] == 'one') ? 'selected' : ''; ?>>one</option>
                        <option value="two" <?php echo (isset($existing_data['Salutation']) && $existing_data['Salutation'] == 'two') ? 'selected' : ''; ?>>two</option>
                        <option value="three" <?php echo (isset($existing_data['Salutation']) && $existing_data['Salutation'] == 'three') ? 'selected' : ''; ?>>three</option>
                        <option value="Four" <?php echo (isset($existing_data['Salutation']) && $existing_data['Salutation'] == 'Four') ? 'selected' : ''; ?>>Four</option>
                        </select>

                </div>
                <div class="Align">
                    <label for="MiddleName">*Middle Name:</label>
                    <input class="IN"   type="text" id="MiddleName" name="middle_name" required
                    value="<?php echo isset($existing_data['MiddleName']) ? $existing_data['MiddleName'] : ''; ?>"
                    ><br>
                </div>
                <div class="" style="margin-inline: 5%; display:flex;justify-content:flex-end;">
                    
                    <label for="Ragident_Status">Ragident Status:</label>
                        <select id="Ragident_Status" name="resident_status">
                            <option value="one" <?php echo (isset($existing_data['Ragident_Status']) && $existing_data['Ragident_Status'] == 'one') ? 'selected' : ''; ?>>one</option>
                            <option value="two" <?php echo (isset($existing_data['Ragident_Status']) && $existing_data['Ragident_Status'] == 'two') ? 'selected' : ''; ?>>two</option>
                            <option value="three" <?php echo (isset($existing_data['Ragident_Status']) && $existing_data['Ragident_Status'] == 'three') ? 'selected' : ''; ?>>three</option>
                            <option value="Four" <?php echo (isset($existing_data['Ragident_Status']) && $existing_data['Ragident_Status'] == 'Four') ? 'selected' : ''; ?>>Four</option>
                        </select>

                </div>
                <div class="Align">
                    <label for="Email_id">*Email id:</label>
                    <input class="IN"   type="email" id="email" name="email" required
                    value="<?php echo isset($existing_data['MiddleName']) ? $existing_data['MiddleName'] : ''; ?>"
                    ><br>
                </div>
            
               
            </div>

            <div class="personal_left">
                <div class="Align">
                    <label for="FirstName">*First Name:</label>
                    <input class="IN"   type="text" id="FirstName" name="first_name" required
                    value="<?php echo isset($existing_data['FirstName']) ? $existing_data['FirstName'] : ''; ?>"
                    ><br>
                </div>
                <div class="Align">
                    <label for="LastName">*Last Name:</label>
                    <input class="IN"   type="text" id="LastName" name="last_name" required
                    value="<?php echo isset($existing_data['LastName']) ? $existing_data['LastName'] : ''; ?>"
                    ><br>
                </div>

                <div class="" style="margin-inline: 5%; display:flex;justify-content:flex-end;">
                    
                    <label for="Country">Country:</label>
                        <select id="Country" name="country">
                            <option value="india" <?php echo (isset($existing_data['Country']) && $existing_data['Country'] == 'india') ? 'selected' : ''; ?>>India</option>
                            <option value="Pak" <?php echo (isset($existing_data['Country']) && $existing_data['Country'] == 'Pak') ? 'selected' : ''; ?>>Pakistan</option>
                            <option value="Rus" <?php echo (isset($existing_data['Country']) && $existing_data['Country'] == 'Rus') ? 'selected' : ''; ?>>Russia</option>
                            <option value="America" <?php echo (isset($existing_data['Country']) && $existing_data['Country'] == 'America') ? 'selected' : ''; ?>>America</option>
                        </select>

                </div>

                <div class="Align">
                    <label for="Mo_Nmber">*Mo. Number:</label>
                    <input class="IN"   type="text" id="Mo_Nmber" name="phone_number" required
                    value="<?php echo isset($existing_data['Mo_Nmber']) ? $existing_data['Mo_Nmber'] : ''; ?>"
                    ><br>
                </div>

                
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <h3 class="B_T_3 Color_Red">Account Perticular</h3>
    <br>
    <br>
    <br>
    <div class="A_C">
        <div class="User_info_Wrap">

            <div class="personal_right">
                <div class="Align">
                    <label for="Ac_Num">*Ac_Num ( 15 digit ):</label>
                    <input  class="IN"  type="text" id="Ac_Num" name="account_number" required
                    value="<?php echo isset($existing_data['Ac_Num']) ? $existing_data['Ac_Num'] : ''; ?>"
                    ><br>
                </div>
                
                <div class="" style="margin-inline: 5%; display:flex;justify-content:flex-end;">
                        
                    <label for="FundTranf">FundTranf:</label>
                        <select id="FundTranf" name="fund_transfer">
                            <option value="one" <?php echo (isset($existing_data['FundTranf']) && $existing_data['FundTranf'] == 'one') ? 'selected' : ''; ?>>one</option>
                            <option value="two" <?php echo (isset($existing_data['FundTranf']) && $existing_data['FundTranf'] == 'two') ? 'selected' : ''; ?>>two</option>
                            <option value="three" <?php echo (isset($existing_data['FundTranf']) && $existing_data['FundTranf'] == 'three') ? 'selected' : ''; ?>>three</option>
                            <option value="Four" <?php echo (isset($existing_data['FundTranf']) && $existing_data['FundTranf'] == 'Four') ? 'selected' : ''; ?>>four</option>
                        </select>

                </div>

            </div>
            <div class="personal_left">
                <div class="Align">
                    <label for="Niick_Name">*Niick Name:</label>
                    <input  class="IN"  type="text" id="Niick_Name" name="nickname" required
                    value="<?php echo isset($existing_data['Niick_Name']) ? $existing_data['Niick_Name'] : ''; ?>"
                    ><br>
                </div>
            </div>

        </div>
    </div>

    <center>
        <button type="submit" value="submit">Submit</button>
        <button type="reset" value="reset" id="RESET" onclick="Reset()">Reset</button>
        <button type="button" onclick="showEditModal()">Edit</button>
        <button type="submit" name="delete" value="delete">Delete All Data</button>
    </center>
</form>

<!-- Modal for Edit -->
<div class="modal" id="editModal">
    <div class="modal-content">
        <form action="" method="post" enctype="multipart/form-data">
            <label for="editField">Select input to edit:</label>
            <?php
            $inputNames = array("name", "Password", "ComfermPassword", "Salutation", "MiddleName", "Ragident_Status", "email", "FirstName", "LastName", "Country", "Mo_Nmber", "Ac_Num", "Niick_Name", "FundTranf");

            echo "<select id='editField' name='editField'>";
            foreach ($inputNames as $name) {
                echo "<option value='$name'>$name</option>";
            }
            echo "</select>";
            ?>

            <br>
            <label for="editValue">Enter new value:</label>
            <input type="text" id="editValue" name="editValue" required>
            <br>
            <button type="submit" name="editSubmit" class="modal-button">Submit</button>
        </form>
    </div>
</div>

    <br>
    <br>
    <br>

    <h3 class="B_T_3 Color_Red">Decleration</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ea quaerat aperiam aspernatur, voluptate molestias
        nisi voluptatibus ut perspiciatis rerum consequuntur asperiores modi, voluptatum ducimus, id similique eveniet
        magnam dolore consequatur dolorem laborum totam. Corporis in nisi est voluptates, aut, repellat totam quasi nesciunt
        illo doloribus aliquam voluptas adipisci? Autem laboriosam, voluptatem eligendi, nostrum fugiat provident modi nulla
        mollitia delectus, facere adipisci! Vero ducimus sint ea molestiae libero eos praesentium saepe quasi voluptatum
        earum deserunt placeat culpa obcaecati nisi quos ullam eius, blanditiis consectetur maxime possimus quaerat,
        laboriosam alias dignissimos! Inventore voluptas sapiente aspernatur ad, enim odio illum similique aut.
    </p>
    <br>
    <br>
    <br>
<!-- ---------------------------------------- JavaScript ------------------------------------------------ -->
    <script>
    let input = document.querySelectorAll(".IN");
    let RESET = document.querySelector("#RESET");
    let EDIT = document.createElement("button");
    let modal = document.createElement("div");
    let modalContent = document.createElement("div");

    EDIT.innerText = "Edit";
    EDIT.onclick = showEditModal;

    // Additional styles for the modal
    modal.className = "modal";
    modalContent.className = "modal-content";

    // Create the dropdown and submit button in the modal
    function createModalContent() {
        let inputNames = Array.from(input).map(input => input.name);
        let dropdown = document.createElement("select");

        inputNames.forEach(name => {
            let option = document.createElement("option");
            option.value = name;
            option.text = name;
            dropdown.add(option);
        });

        let submitButton = document.createElement("button");
        submitButton.innerText = "Submit";
        submitButton.className = "modal-button";
        submitButton.onclick = function() {
            handleModalSubmit(dropdown.value);
        };

        modalContent.innerHTML = "";
        modalContent.appendChild(dropdown);
        modalContent.appendChild(submitButton);
    }

    function Reset(){
        for (let index = 0; index < input.length; index++) {
            const E = input[index];
            E.value = "";
        }
    }
    function showEditModal() {
        document.getElementById('editModal').style.display = "flex";
    }

    function handleModalSubmit(selectedInput) {
        if (selectedInput) {
            let selectedInputField = document.querySelector(`[name="${selectedInput.trim()}"]`);
            
            if (selectedInputField) {
                selectedInputField.value = "";
                selectedInputField.focus();
            } else {
                alert("Invalid input name");
            }
        }

        // Close the modal after submit
        modal.style.display = "none";
    }

    // Close the modal if the user clicks outside of it
    window.onclick = function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    };

    RESET.insertAdjacentElement("afterend", EDIT);

    // Append the modal to the body
    document.body.appendChild(modal);
    modal.appendChild(modalContent);
</script>
</body>
</html>
<!-- END - CODE -->


 -->
<!-- Create Hotel Room Booking System User can book room by 3 ways  -->
<?php 
// hotel_booking.php

// Database connection code
$host = 'localhost';
$dbname = 'HotelBooking';
$username = 'root';
$password = ''; 
$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to check room availability
function isRoomAvailable($conn, $date, $slot) {
    $stmt = $conn->prepare("SELECT * FROM RoomBookings WHERE date = ? AND slot = ? AND status = 'available'");
    $stmt->bind_param("ss", $date, $slot);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->num_rows > 0;
}

// Function to validate date and slot input
function validateInput($date, $slot) {
    $errors = array();
    if (empty($date)) {
        $errors['date'] = 'Date is required.';
    }
    if (empty($slot)) {
        $errors['slot'] = 'Slot selection is required.';
    }
    return $errors;
}

// Function to book a room
function bookRoom($conn, $date, $slot) {
    $stmt = $conn->prepare("INSERT INTO RoomBookings (date, slot, status) VALUES (?, ?, 'booked')");
    $stmt->bind_param("ss", $date, $slot);
    $stmt->execute();
    return $stmt->affected_rows > 0;
}

// AJAX request handling
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];
    $response = array('success' => false, 'message' => '', 'errors' => array());

    switch ($action) {
        case 'check_availability':
            $date = $_POST['date'];
            $slot = $_POST['slot'];
            $errors = validateInput($date, $slot);
            if (empty($errors)) {
                $availability = isRoomAvailable($conn, $date, $slot);
                $response['success'] = $availability;
                $response['message'] = $availability ? 'Room is available.' : 'Room is not available.';
            } else {
                $response['errors'] = $errors;
            }
            break;
        case 'book_room':
            $date = $_POST['date'];
            $slot = $_POST['slot'];
            $errors = validateInput($date, $slot);
            if (empty($errors) && isRoomAvailable($conn, $date, $slot)) {
                $bookingSuccess = bookRoom($conn, $date, $slot);
                $response['success'] = $bookingSuccess;
                $response['message'] = $bookingSuccess ? 'Room booked successfully.' : 'Failed to book the room.';
            } else {
                $response['errors'] = $errors;
            }
            break;
    }

    // Return JSON response
    echo json_encode($response);
    exit;
}

// Close the database connection
$conn->close(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hotel Room Booking</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        // Function to check room availability using AJAX
        function checkAvailability(date, slot) {
            $.ajax({
                url: 'hotel_booking.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    action: 'check_availability',
                    date: date,
                    slot: slot
                },
                success: function(response) {
                    if (response.success) {
                        alert(response.message);

                    } else {
                        if (response.errors) {
                            // Display validation errors
                            var errorMessages = '';
                            $.each(response.errors, function(key, value) {
                                errorMessages += value + '\\n';
                            });
                            alert(errorMessages);
                        } else {
                            alert(response.message);
                        }
                    }
                },
                error: function(xhr, status, error) {
                    // Handle AJAX errors
                    alert('An error occurred: ' + error);
                }
            });
        }

        // Event handler for checking availability
        $('#check-availability-btn').click(function() {
            var date = $('#date-input').val();
            var slot = $('#slot-select').val();
            checkAvailability(date, slot);
        });

        // Event handler for booking a room
        $('#book-room-btn').click(function() {
            var date = $('#date-input').val();
            var slot = $('#slot-select').val();
            $.ajax({
                url: 'hotel_booking.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    action: 'book_room',
                    date: date,
                    slot: slot
                },
                success: function(response) {
                    if (response.success) {
                        alert(response.message);
                    } else {
                        if (response.errors) {
                            // Display validation errors
                            var errorMessages = '';
                            $.each(response.errors, function(key, value) {
                                errorMessages += value + '\\n';
                            });
                            alert(errorMessages);
                        } else {
                            alert(response.message);
                        }
                    }
                },
                error: function(xhr, status, error) {
                    // Handle AJAX errors
                    alert('An error occurred: ' + error);
                }
            });
        });
    });
    </script>
</head>
<body>
   
    // Booking form 
    <form id="booking-form">
        //Input fields for date and slot selection
        <input type="date" id="date-input" required>
        <select id="slot-select" required>
            <option value="full_day">Full Day</option>
            <option value="first_half">First Half (8AM to 6PM)</option>
            <option value="second_half">Second Half (7PM to 7AM)</option>
        </select>
        <button type="button" id="check-availability-btn">Check Availability</button>
        <button type="button" id="book-room-btn">Book Room</button>
    </form>
</body>
</html> 

<!-- 
What is jQuery? :- 
jQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, 
event handling, and animation much simpler with an easy-to-use API that works across a multitude of browsers.

How are JavaScript and jQuery different?:-
JavaScript is a programming language used for web development, among other things, while jQuery is a JavaScript library that simplifies
complex tasks from JavaScript, such as AJAX calls and DOM manipulation.

Which is the starting point of code execution in jQuery?:-
The starting point of code execution in jQuery is typically the $(document).ready() function, which runs as soon as the DOM is fully loaded.

Document Load Vs Window. Load():-
jQuery $(document).ready() is triggered when the DOM is ready for JavaScript code to execute, while $(window).load() is triggered
when the entire page (including images, CSS, etc.) is fully loaded.

What is the difference between prop and attr?
The .prop() method gets or sets properties on DOM nodes, such as checked, disabled, or value, which can change during
user interaction. The .attr() method gets or sets attributes defined by HTML, such as id, class, or style.

Explain Difference Between JQuery And JavaScript?
jQuery is a library built with JavaScript to provide an easier interface for web development tasks like animations, AJAX calls, and 
DOM manipulation. JavaScript is the underlying language that can be used without any libraries.

How We Can Select The Specified <li> Element From The List Of <li> Elements In <ul>?:-
You can select a specified <li> element by using its index within the <ul>, like so: $('ul li:eq(index)'), where index is the zero-based 
index of the <li>.

In <table> Design Change The Color Of Even <tr> Elements To “green” And Change The Color Of Odd <tr> Elements To “blue” Color?
Give An Example Code?:-{ 
JavaScript
$(document).ready(function(){
    $('table tr:even').css('background-color', 'green');
    $('table tr:odd').css('background-color', 'blue');
});  }

i) How We Can Implement Animation Effects In jQuery?
You can implement animation effects in jQuery using the .animate() method, which allows you to animate CSS properties
over a specified duration.

j) Apply jQuery validation using library.
To apply jQuery validation, you can use the jQuery Validation Plugin and initialize it on a form like so:-{

JavaScript
$(document).ready(function(){
    $('#myForm').validate();
}); }

k) Create custom dynamic function for require field validator.:- {

JavaScript
$.validator.addMethod('customRequired', function(value, element) {
    return value.trim() !== '';
}, 'This field is required.');

$(document).ready(function(){
    $('#myForm').validate({
        rules: {
            myField: {
                customRequired: true
            }
        }
    });
});  }

l) Get state data by country selection (Ajax).:-{

JavaScript
$(document).ready(function(){
    $('#countrySelect').change(function(){
        var countryId = $(this).val();
        $.ajax({
            url: 'getStateData.php',
            type: 'GET',
            data: { countryId: countryId },
            dataType: 'json',
            success: function(states){
                // Populate state select box with received state data
            }
        });
    });
});   }


m) Image uploading with preview :- {

JavaScript
$(document).ready(function(){
    $('#imageInput').change(function(){
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
});  }
 -->



