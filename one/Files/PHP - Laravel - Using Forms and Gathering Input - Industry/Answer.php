<!-- Q - 1 -->
<!--
DB_CONNECTION=mysql
DB_HOST=your_database_host
DB_PORT=your_database_port
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password

Then 
php artisan make:migration CreateYourTable
php artisan make:model YourModel
Then 
php artisan migrate

  -->

  <!-- Q - 2 -->
  <!-- 
    SQL  Define Stored Procedure:
DELIMITER //

CREATE PROCEDURE GetEmployee(IN employeeId INT)
BEGIN
    SELECT * FROM employees WHERE id = employeeId;
END //

DELIMITER ;

LARAVEL  Create Eloquent Model:
php artisan make:model Employee

LARAVEL Call Stored Procedure:
<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Support\Facades\DB;

class YourController extends Controller
{
    public function callStoredProcedure($employeeId)
    {
        // Using Eloquent model to call stored procedure
        $result = Employee::query()
            ->select(DB::raw('CALL GetEmployee(?)', [$employeeId]))
            ->get();

        // Process $result as needed
        return $result;
    }
} ?>

   -->

   <!-- Q- 3 -->
   <!-- 
    Create (Insert) Operation:
    DB::table('employees')->insert($data);

    Read (Select) Operation:
    $employee = DB::table('employees')->where('id', $employeeId)->first();

    Update Operation:
    DB::table('employees')->where('id', $employeeId)->update($data);

    Delete Operation:
    DB::table('employees')->where('id', $employeeId)->delete();
    -->

    <!-- Q - 4 -->
    <!-- 
        Generate Migration for Employee Table:
            php artisan make:migration create_employees_table
        
        Edit Migration File:
        <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone');
            // Add other fields as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
?>

         Run Migration:
            php artisan migrate

        If your Employee Management system requires additional tables then
         repeat the steps above for each table
     -->