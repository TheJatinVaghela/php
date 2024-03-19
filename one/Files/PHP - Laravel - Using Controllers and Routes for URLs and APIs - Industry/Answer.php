<!-- MODULE – 8(Migration) -->
<!-- Q-1 -->
<!-- How to do config database in laravel :- 
            Database Configuration File:
Laravel's database configuration file is located at config/database.php. This file contains an array of database connections, each of which may be configured separately for various database systems such as MySQL, PostgreSQL, SQLite, and SQL Server.

Open the Configuration File:
Navigate to your Laravel project's root directory and open the config/database.php file in your preferred text editor.

Configure Connection Parameters:
Inside the database.php file, you'll see an array named 'connections' containing configurations for different database systems. Choose the connection you want to configure or add a new one if needed. For example, if you want to configure a MySQL database, you'll find a 'mysql' array inside 'connections'. Update the configuration parameters such as 'host', 'port', 'database', 'username', and 'password' according to your database setup.

Here's an example of configuring a MySQL database:

php

'mysql' => [
    'driver' => 'mysql',
    'host' => env('DB_HOST', '127.0.0.1'),
    'port' => env('DB_PORT', '3306'),
    'database' => env('DB_DATABASE', 'forge'),
    'username' => env('DB_USERNAME', 'forge'),
    'password' => env('DB_PASSWORD', ''),
    'unix_socket' => env('DB_SOCKET', ''),
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix' => '',
    'strict' => true,
    'engine' => null,
],

In this example, the configuration values are retrieved from environment variables using the env() function, which is Laravel's way of accessing environment variables.

Set Environment Variables (Optional):
Laravel recommends using environment variables for sensitive configuration values like database credentials. You can set these environment variables in a .env file located in the root of your Laravel project. If you're not using environment variables, you can directly specify the database credentials in the database.php file.

Example .env file:

plaintext

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=my_database
DB_USERNAME=my_username
DB_PASSWORD=my_password

Migrate the Database (Optional):
If you haven't already created your database schema, you can use Laravel's migration feature to define your database schema and run migrations to create the corresponding tables. Run the following command in your terminal:

php artisan migrate

This command will execute all pending migrations and create the necessary database tables defined in your migration files.

Verify the Configuration:
Once you've configured your database, you can verify the connection by running any Laravel artisan command that interacts with the database, such as php artisan migrate, php artisan db:seed, or by accessing your application through the browser if it relies on database connections.
-->


<!-- Q - 2 
Call MySQLi Store Procedure from Laravel. :-

Database Configuration File:
Laravel's database configuration file is located at config/database.php. This file contains an array of database connections, each of which may be configured separately for various database systems such as MySQL, PostgreSQL, SQLite, and SQL Server.

Open the Configuration File:
Navigate to your Laravel project's root directory and open the config/database.php file in your preferred text editor.

Configure Connection Parameters:
Inside the database.php file, you'll see an array named 'connections' containing configurations for different database systems. Choose the connection you want to configure or add a new one if needed. For example, if you want to configure a MySQL database, you'll find a 'mysql' array inside 'connections'. Update the configuration parameters such as 'host', 'port', 'database', 'username', and 'password' according to your database setup.

Here's an example of configuring a MySQL database:

php

'mysql' => [
    'driver' => 'mysql',
    'host' => env('DB_HOST', '127.0.0.1'),
    'port' => env('DB_PORT', '3306'),
    'database' => env('DB_DATABASE', 'forge'),
    'username' => env('DB_USERNAME', 'forge'),
    'password' => env('DB_PASSWORD', ''),
    'unix_socket' => env('DB_SOCKET', ''),
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix' => '',
    'strict' => true,
    'engine' => null,
],

In this example, the configuration values are retrieved from environment variables using the env() function, which is Laravel's way of accessing environment variables.

Set Environment Variables (Optional):
Laravel recommends using environment variables for sensitive configuration values like database credentials. You can set these environment variables in a .env file located in the root of your Laravel project. If you're not using environment variables, you can directly specify the database credentials in the database.php file.

Example .env file:

plaintext

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=my_database
DB_USERNAME=my_username
DB_PASSWORD=my_password

Migrate the Database (Optional):
If you haven't already created your database schema, you can use Laravel's migration feature to define your database schema and run migrations to create the corresponding tables. Run the following command in your terminal:

php artisan migrate

This command will execute all pending migrations and create the necessary database tables defined in your migration files.

Verify the Configuration:
Once you've configured your database, you can verify the connection by running any Laravel artisan command that interacts with the database, such as php artisan migrate, php artisan db:seed, or by accessing your application through the browser if it relies on database connections.

-->

<!-- Q - 3 
    Apply Curd Operation through Query Builder for Employee
Management :- 
Create (Insert) Operation:

php

// Insert operation
$employee = DB::table('employees')->insert([
    'name' => 'John Doe',
    'email' => 'john@example.com',
    'department' => 'IT',
    'salary' => 50000,
]);

Read (Select) Operation:

php

// Read operation
$employees = DB::table('employees')->get();

// Retrieve a single employee
$employee = DB::table('employees')->where('id', $employeeId)->first();

Update Operation:

php

// Update operation
$updated = DB::table('employees')
            ->where('id', $employeeId)
            ->update(['salary' => 55000]);

Delete Operation:

php

    // Delete operation
    $deleted = DB::table('employees')->where('id', $employeeId)->delete();

These are basic examples of CRUD operations using Laravel's Query Builder. Remember to replace 'employees' with the actual name of your employees table and adjust the field names accordingly ('name', 'email', 'department', 'salary', etc.). Additionally, $employeeId should be replaced with the ID of the employee you want to target for update or delete operations.

Also, if you're working within a controller or a service class, make sure to import the DB facade at the top:

php

use Illuminate\Support\Facades\DB;

-->

<!-- Q - 3 
    Create All Migration for Employee management : - 

    Generate Migration:

Run the following command in your terminal to generate a migration file for the employees table:

bash

php artisan make:migration create_employees_table

Edit Migration File:

Navigate to the newly created migration file located in the database/migrations directory. Open the migration file and define the schema for the employees table inside the up() method. Below is an example of what your migration file might look like:

php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('department');
            $table->decimal('salary', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}

In this migration:

    id() creates an auto-incrementing primary key.
    name, email, department, and salary are columns representing employee attributes.
    timestamps() adds created_at and updated_at columns for tracking record creation and updates.

Run Migration:

After defining the migration, run the migration command to create the employees table in your database:

bash

php artisan migrate
-->


<!-- MODULE – 9, 10(Forms, Controls) -->


<!-- Q - 1 -->
<!-- 
 ORM stands for Object-Relational Mapping. It is a programming technique and a concept used in software development to bridge the gap between the relational database systems (like MySQL, PostgreSQL, SQLite) and the object-oriented programming languages (like PHP, Java, Python). The primary goal of ORM is to simplify the interaction between the application code and the database by allowing developers to work with objects in their programming language rather than dealing directly with database tables and SQL queries.

Here are key aspects and benefits of ORM:

    Object-Oriented Representation:
        ORM allows developers to represent database entities as objects in their programming language. Each table in the database is represented by a corresponding class, and each row in the table is an instance of that class.

    Abstraction of Database Operations:
        ORM provides a high-level abstraction over database operations. Developers can interact with the database using methods and properties of objects, without having to write raw SQL queries.

    Automatic Mapping:
        ORM frameworks automatically map the attributes (fields or columns) of an object to the columns in a database table. This mapping is typically done through configuration or conventions.

    CRUD Operations:
        ORM simplifies the creation, retrieval, updating, and deletion (CRUD) operations. Developers can perform these operations using familiar object-oriented syntax, making code more readable and maintainable.

    Database Independence:
        ORM abstracts the specific details of the underlying database system. This allows developers to write code that is independent of the database type, making it easier to switch between different database systems without changing the application code.

    Relationship Handling:
        ORM frameworks handle relationships between entities. For example, if there is a one-to-many relationship between two tables, the ORM can provide methods to easily navigate and manipulate these relationships.

    Query Language:
        ORM frameworks often provide a query language or methods that abstract the underlying SQL queries. This helps developers express complex queries using the programming language itself, making it more readable and maintainable.

    Consistency and Validation:
        ORM frameworks often include features for data validation and enforcing constraints, ensuring that data in the application remains consistent with the defined data model.

Popular ORM frameworks in different programming languages include:

    PHP: Eloquent (Laravel), Doctrine (Symfony).
    Java: Hibernate (Java), EclipseLink (Java).
    Python: Django ORM (Django), SQLAlchemy (general-purpose).

In summary, ORM is a powerful concept that simplifies database interaction by allowing developers to work with objects in their programming language, providing a higher level of abstraction and making code more maintainable and database-independent.
 -->

<!-- Q - 3 -->
<!-- 
Eloquent Relationships are a powerful feature in the Laravel PHP framework, providing an elegant and expressive way to define and work with relationships between database tables. Eloquent is Laravel's own ORM (Object-Relational Mapping) system, and it allows you to interact with your database using object-oriented syntax. Relationships in Eloquent allow you to define connections between different models, making it easy to query related data and perform operations on associated records.

There are several types of Eloquent Relationships:
1. One-to-One Relationship:
// User model
return $this->hasOne(Profile::class);
// Profile model
return $this->belongsTo(User::class);

2.One-to-Many Relationship:
// User model
 return $this->hasMany(Post::class);
// Profile model
return $this->belongsTo(User::class);

3.Many-to-Many Relationship:
// User model
  return $this->belongsToMany(Role::class)
// Profile model
 return $this->belongsToMany(User::class);

 4.Has-Many-Through Relationship:
 return $this->hasManyThrough(Post::class, User::class);

 5.Polymorphic Relationships:
 // Comment model
 return $this->morphTo();
 // Post model
return $this->morphMany(Comment::class, 'commentable');
 // Video model
 return $this->morphMany(Comment::class, 'commentable');

6.Has-One-Through Relationship:
// Doctor model
return $this->hasOneThrough(License::class, Hospital::class);
 -->

<!-- Q - 4 -->
<!-- 
    Eager Loading:
        Eager Loading is the practice of loading the related data along with the main data in a single query.
        It helps to minimize the number of database queries, especially in scenarios where you need to load a
        set of records and their related data.
    
        In Laravel's Eloquent, you can use the with method to specify the relationships that should be eager
        loaded:
        // Eager loading the "comments" relationship along with the posts
        $posts = Post::with('comments')->get();

        Eager loading is beneficial in scenarios where you are fetching a collection of records and want to
        retrieve their related data without issuing additional queries for each record. 
        This helps to prevent the N+1 query problem, where N additional queries are executed to fetch
        related data for N records.
    
    Lazy Loading:
        Lazy Loading is the opposite approach where related data is only loaded when it is explicitly 
        requested. In other words, related records are fetched from the database on-the-fly, as you access 
        the relationship. While this can lead to more queries being executed, it can be more efficient when
        you only need a subset of the related data.

        in Laravel, lazy loading is the default behavior when accessing relationships:
        // Lazy loading the "comments" relationship for a specific post
        $post = Post::find(1);
        $comments = $post->comments;

        Lazy loading is useful when you want to keep your initial query lightweight and load additional data 
        only when needed. However, if you have a loop that accesses relationships for multiple records, it can
        lead to the N+1 query problem if not handled properly.
    
    Summary:
        Eager Loading: Load related data in a single query along with the main data. Reduces the number 
        of queries but may load more data than needed.

        Lazy Loading: Load related data on-the-fly, as it is accessed. More queries may be executed,
        but only necessary data is loaded.
 -->

<!-- Q - 5 Do Session for Employee Management System : -  

Configure Session Driver:

Laravel provides various session drivers like file, cookie, database, memcached, redis, etc. You can configure your desired session driver in the config/session.php file. By default, Laravel uses the file session driver.

Use Laravel's Session Facade:

Laravel provides a convenient way to work with sessions through the Session facade. You can use this facade to store and retrieve data in the session.

Store Employee Data in Session:

When a user logs in or accesses employee-related pages, you can store relevant employee data in the session. For example, after a user successfully logs in, you might store the authenticated user's information in the session.

php

// Storing employee data in session after authentication
$employee = Auth::user();
session(['employee' => $employee]);

Access Employee Data from Session:

You can retrieve employee data from the session whenever needed. For example, in your controller methods or views.

php

// Retrieving employee data from session
$employee = session('employee');

Destroy Session:

It's essential to provide a way for users to log out and destroy their session when they're done using the application. You can accomplish this by using Laravel's built-in authentication system or by manually clearing the session data.

php

// Log out and destroy session
Auth::logout();
session()->flush();

Secure Session Data:

Be cautious about what data you store in the session. Avoid storing sensitive information like passwords or large datasets. Store only essential information required for the current session.

Session Flash Data:

Laravel also provides session flash data, which is useful for temporarily storing data for the next request. Flash data is available only for one request cycle and is automatically deleted afterward.

php

// Storing flash data
session()->flash('message', 'Employee added successfully!');

You can retrieve flash data in the next request using the session() helper or the Session facade.
-->