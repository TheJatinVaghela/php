<!-- Q - 1  --> 
<!--
Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [AboutUsController::class, 'index']);
Route::get('/contact-us', [ContactUsController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/registration', [RegistrationController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
-->

<!-- Q - 2 -->
<!-- 
    Route::get('/example/{variable1}/{variable2}', [YourController::class, 'yourMethod']);
 -->

<!-- Q - 3 -->
<!-- variable can be null  -->
<!-- Route::get('/example/{variable?}', [YourController::class, 'yourMethod']); -->

<!-- Q - 4 -->
<!-- hp artisan make:middleware CustomAutoMiddleware -->
<!-- // app/Http/Kernel.php
    protected $routeMiddleware = [
        // other middleware entries
        'custom.auto' => \App\Http\Middleware\CustomAutoMiddleware::class,
    ]; 
-->
<!-- 
    // routes/web.phpv
    Route::get('/example', function () {
        // Your route logic here
    })->middleware('custom.auto');
 -->
 <!-- 
    // routes/web.php
    Route::get('/example', 'YourController@yourMethod')->middleware('custom.auto');
  -->

<!-- Q - 5 -->
<!-- php artisan make:controller EmployeeController --resource
 -->
 <!--Q - 6-->
 <!-- 
    // CREATE MIDDLEWARE php artisan make:middleware YourMiddlewareName
    // THIS WILL WORK TO USE ONE ->middleware(['auth','admin']); 
    // THIS WILL WORK TOO   public function __construct()
    {
        $this->middleware('yourmiddlewarename');
    }

-->
 <!--Q - 7-->
 <!-- 
    php artisan route:clear
    php artisan cache:clear

  -->
   <!--Q - 8-->
   <!--
     create a new service provider : php artisan make:provider CustomMacrosServiceProvider
     open this new file then add your custom macro in the boot
     LIKE :- public function boot()
    {
        // Define the custom macro for searching users
        User::macro('search', function ($query, $searchTerm) {
            return $query->where('name', 'like', '%' . $searchTerm . '%')
                         ->orWhere('email', 'like', '%' . $searchTerm . '%');
            // You can customize this based on your user model fields
        });
    }
    now in config/app.php add this file LIKe :-'providers' => [
        // Other providers...
        App\Providers\CustomMacrosServiceProvider::class,
    ],
    now you can use this LIKE :-  $users = User::search($searchTerm)->get();
    
    -->
