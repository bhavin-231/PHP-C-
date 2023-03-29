Q-1:-How to do config database in laravel?
Laravel makes connecting with databases and running queries extremely simple. The database configuration file is app/config/database.php. In this file you may define all of your database connections, as well as specify which connection should be used by default. Examples for all of the supported database systems are provided in this file.Currently Laravel supports four database systems: MySQL, Postgres, SQLite, and SQL Server.


Q-2:- Call MySQLi Store Procedure from Laravel ?
  $procedure = "DROP PROCEDURE IF EXISTS `get_posts_by_userid`;
            CREATE PROCEDURE `get_posts_by_userid` (IN idx int)
            BEGIN
            SELECT * FROM posts WHERE user_id = idx;
            END;";
  
        \\DB::unprepared($procedure);

Route::get('call-procedure', function () \{
  
    $postId = 1;
    $getPost = DB::select(
       'CALL get_posts_by_userid('.$postId.')'
    );
  
    dd($getPost);
      
\});


Q-3:- Apply Curd Operation through Query Builder for Employee Management

 First of all, download or install laravel 9 new setup. So, open the terminal and type the following command to install the new laravel 9 app into your machine:

Setup Database with App
Setup database with your downloaded/installed laravel app. So, you need to find the .env file and setup database details as follows:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database-name
DB_USERNAME=database-user-name
DB_PASSWORD=database-password

\pard\li360\sb100\sa100\sl240\slmult1 Step 3 \f3\endash\f2  Create Company Model & Migration For CRUD App
Open again your command prompt. And run the following command on it. To create model and migration file for form:

\pard\li360\sl240\slmult1\tx916\tx1832\tx2748\tx3664\tx4580\tx5496\tx6412\tx7328\tx8244\tx9160\tx10076\tx10992\tx11908\tx12824\tx13740\tx14656 php artisan make:model Company -m

\pard\li360\sb100\sa100\sl240\slmult1 After that, open\~company\~migration\~\~file inside\~laravel-9-crud/database/migrations/\~directory. And then update the function up() with the following code:

\pard\li360\sl240\slmult1\tx916\tx1832\tx2748\tx3664\tx4580\tx5496\tx6412\tx7328\tx8244\tx9160\tx10076\tx10992\tx11908\tx12824\tx13740\tx14656 public function up()
Schema::create('companies', function (Blueprint $table) {
$table->id();
$table->string('email');
$table->string('name');
$table->string('address');
$table->timestamps();
});


 app/Models/Company.php

 <?php
namespace App\\Models;
use Illuminate\\Database\\Eloquent\\Factories\\HasFactory;
use Illuminate\\Database\\Eloquent\\Model;
class Company extends Model
\{
use HasFactory;
protected $fillable = ['name', 'email', 'address'];
\}

\pard\li360\sb100\sa100\sl240\slmult1 Then, open again command prompt and run the following command to create tables in the database:

\pard\li360\sl240\slmult1\tx916\tx1832\tx2748\tx3664\tx4580\tx5496\tx6412\tx7328\tx8244\tx9160\tx10076\tx10992\tx11908\tx12824\tx13740\tx14656 php artisan migrate

\pard\li360\sb100\sa100\sl240\slmult1 Read Also:\~{{\field{\*\fldinst{HYPERLINK "https://techvblogs.com/blog/set-up-free-self-hosted-email-marketing-with-mautic"}}{\fldrslt{\ul\cf3 How to set up Free self-hosted Email marketing with }}}}{\f2\fs22{\field{\*\fldinst{HYPERLINK "https://techvblogs.com/blog/set-up-free-self-hosted-email-marketing-with-mautic"}}{\fldrslt{\ul\cf3 Mautic}}}}{\f2\fs22{\field{\*\fldinst{HYPERLINK "https://techvblogs.com/blog/set-up-free-self-hosted-email-marketing-with-mautic"}}{\fldrslt{\ul\cf3  (60k Emails per month!)}}}}\f2\fs22
Step 4 \f3\endash\f2  Create Company\f3\~\f2 Controller By Artisan Command
Create a controller by using the following command on the command prompt to create a controller file:

\pard\li360\sl240\slmult1\tx916\tx1832\tx2748\tx3664\tx4580\tx5496\tx6412\tx7328\tx8244\tx9160\tx10076\tx10992\tx11908\tx12824\tx13740\tx14656 php artisan make:controller CompanyController

\pard\li360\sb100\sa100\sl240\slmult1 After that, visit app/Http/controllers and open the CompanyController.php file. And update the following code into it:

\pard\li360\sl240\slmult1\tx916\tx1832\tx2748\tx3664\tx4580\tx5496\tx6412\tx7328\tx8244\tx9160\tx10076\tx10992\tx11908\tx12824\tx13740\tx14656 <?php
namespace App\\Http\\Controllers;
use App\\Models\\Company;
use Illuminate\\Http\\Request;
class CompanyController extends Controller
\{

public function index()
\{\par
$companies = Company::orderBy('id','desc')->paginate(5);
return view('companies.index', compact('companies'));
\}

public function create()
\{
return view('companies.create');
\}
/**\par
Store a newly created resource in storage.\par
*\par
@param  \\Illuminate\\Http\\Request  $request\par
@return \\Illuminate\\Http\\Response\par
*/
public function store(Request $request)
\{
$request->validate([

 'name' => 'required',
'email' => 'required','address' => 'required',]);

 Company::create($request->post());
return redirect()->route('companies.index')->with('success','Company has been created successfully.');
\}
public function show(Company $company)
\{
return view('companies.show',compact('company'));
\}

public function edit(Company $company)
\{
return view('companies.edit',compact('company'));
\}

public function update(Request $request, Company $company){
$request->validate ['name' => 'required',
'email' => 'required',
'address' => 'required',] 
$company->fill($request->post())->save();
return redirect()->route('companies.index')->with('success','Company Has Been updated successfully');\}

public function destroy(Company $company)
{
$company->delete();
return redirect()->route('companies.index')->with('success','Company has been deleted successfully');
}
}

 Create Routes
Then create routes for laravel crud app. So, open the web.php file from the routes directory of laravel CRUD app. And update the following routes into the web.php file:

 use App\\Http\\Controllers\\CompanyController;\par
Route::resource('companies', CompanyController::class);
  Create Blade Views File
Create the directory and some blade view, see the following:
Make Directory Name Companies
index.blade.php
create.blade.php
edit.blade.php
Create directory name\~companies\~inside the\~resources/views\~directory.
Note that, create index.blade.php, create.blade.php, and edit.blade.php inside the companies directory. And update the following code into the following files:
index.blade.php:

 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Laravel 9 CRUD Tutorial Example</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">

 <div class="col-lg-12 margin-tb">
<div class="pull-left">

6 <h2>Laravel 9 CRUD Example Tutorial</h2>
</div>
<div class="pull-right mb-2">

<a class="btn btn-success" href="\{\{ route('companies.create') \}\}"> Create Company</a>
</div>
</div>
 </div>
@if ($message = Session::get('success'))

 <div class="alert alert-success">
<p>\{\{ $message \}\}</p>
</div>

 @endif
<table class="table table-bordered">

 <thead>
<tr>

6 <th>S.No</th>
<th>Company Name</th>
<th>Company Email</th>
<th>Company Address</th>\par
<th width="280px">Action</th>\par

 </tr>
</thead>
<tbody>
@foreach ($companies as $company)
<tr>
<td>\{\{ $company->id \}\}</td>
<td>\{\{ $company->name \}\}</td>
<td>\{\{ $company->email \}\}</td>
<td>\{\{ $company->address \}\}</td>
<td>
<form action="\{\{ route('companies.destroy',$company->id) \}\}" method="Post">
 <a class="btn btn-primary" href="\{\{ route('companies.edit',$company->id) \}\}">Edit</a>


@method('DELETE')

 <button type="submit" class="btn btn-danger">Delete</button>
 </form>
</td>
</tr>
@endforeach
</tbody>
 </table>
{!! $companies->links() !!\}
</div>
</body>
</html>

 create.blade.php:

 <!DOCTYPE html>
<html lang="en">


 <head>
<meta charset="UTF-8">
<title>Add Company Form - Laravel 9 CRUD</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-2">
<div class="row">

 <div class="col-lg-12 margin-tb">
<div class="pull-left mb-2">

 <h2>Add Company</h2>
</div>
<div class="pull-right">

<a class="btn btn-primary" href="\{\{ route('companies.index') \}\}"> Back</a>

 </div>
</div>

 </div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">

{\{ session('status') \}\}

 </div>
@endif
<form action="\{\{ route('companies.store') \}\}" method="POST" enctype="multipart/form-data">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">

\ <div class="form-group">
<strong>Company Name:</strong>
<input type="text" name="name" class="form-control" placeholder="Company Name">
@error('name')
<div class="alert alert-danger mt-1 mb-1">\{\{ $message \}\}</div>
@enderror
</div>

 </div>
<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">
<strong>Company Email:</strong>
<input type="email" name="email" class="form-control" placeholder="Company Email">
@error('email')
<div class="alert alert-danger mt-1 mb-1">\{\{ $message \}\}</div>
@enderror
</div>

 </div>
<div class="col-xs-12 col-sm-12 col-md-12">

 <div class="form-group">
<strong>Company Address:</strong>\par
<input type="text" name="address" class="form-control" placeholder="Company Address">
@error('address')
<div class="alert alert-danger mt-1 mb-1">\{\{ $message \}\}</div>
@enderror
</div>
 </div>
<button type="submit" class="btn btn-primary ml-3">Submit</button>
</div>

</form>
</div>
</body>
</html>

\pard\li360\sb100\sa100\sl240\slmult1 edit.blade.php:

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Company Form - Laravel 9 CRUD Tutorial</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="row">
<div class="container mt-2">

<div class="pull-left">
 <div class="col-lg-12 margin-tb">
 <h2>Edit Company</h2>

 </div>
<div class="pull-right">

 <a class="btn btn-primary" href="\{\{ route('companies.index') \}\}" enctype="multipart/form-data">
Back</a>
 </div>
</div>
 </div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">

{\{ session('status') \}\}

 </div>
@endif
<form action="\{\{ route('companies.update',$company->id) \}\}" method="POST" enctype="multipart/form-data">


@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
<strong>Company Name:</strong>
<input type="text" name="name" value="\{\{ $company->name \}\}" class="form-control"
placeholder="Company name">
@error('name')
<div class="alert alert-danger mt-1 mb-1">\{\{ $message \}\}</div>
@enderror
</div>

 </div>
<div class="col-xs-12 col-sm-12 col-md-12">

 <div class="form-group">
<strong>Company Email:</strong>
<input type="email" name="email" class="form-control" placeholder="Company Email"
value="\{\{ $company->email \}\}">
@error('email')
<div class="alert alert-danger mt-1 mb-1">\{\{ $message \}\}</div>
@enderror
</div>

</div>
<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">
<strong>Company Address:</strong>
<input type="text" name="address" value="\{\{ $company->address \}\}" class="form-control"
placeholder="Company Address">
@error('address')
<div class="alert alert-danger mt-1 mb-1">\{\{ $message \}\}</div>
@enderror
</div>

 </div>
<button type="submit" class="btn btn-primary ml-3">Submit</button>
</div>

 </form>
</div>
</body>
</html>

 If you submit the add or edit form blank. So the error message will be displayed with the help of the code given below:

 @error('name')
<div class="alert alert-danger mt-1 mb-1">\{\{ $message \}\}</div>
@enderror

  Run Development Server\par
In the last step, open a command prompt and run the following command to start the development server:

php artisan serve

Then open your browser and hit the following URL on it: {{\field{\*\fldinst{HYPERLINK http://127.0.0.1:8000/companies }}{\fldrslt{http://127.0.0.1:8000/companies\ul0\cf0}}}}



Q-4:- Create All Migration for Employee management :
 To generate a migration you need run a command

 php artisan make:migration create_employee_table

The file consist of new class extending the migration class of LARAVEL.
The new class consist of 2 major function\~\f5\fs20 up()\f4\fs30\~&\~\f5\fs20 down()\f4\fs30 .\line The\~\f5\fs20 up()\f4\fs30\~function holds all information about migrating the file.

 public function up()
\{
    Schema::create('contacts', function (Blueprint $table) 
    \{
            $table->id();
            $table->string('name');
            $table->string('mobile_no');
            $table->boolean('status');
            $table->timestamps();
    \});
}function holds information about reversing the migration action.

 public function down()
\{
    Schema::dropIfExists('contacts');\p
\}



 To run a migration we need to use the command

fs24 php artisan migrate

fs30 For rolling back latest migration we have command

fs24 php artisan migrate:rollback
fs30 when we have to rollback till specific steps we can pass steps in rollback command like
fs24 php artisan migrate:rollback --step=3

fs30 this will rollback the migration upto 3 step starting from latest.
fs26 Adding/Updating Columns in Table\fs36

fs30 To perform any task we need to generate a migration file similar to what we have created while creating the migration.
the only change will be there in migration name, always try to write the migration name descriptive which helps laravel to understand the table name in migrations.\line For e.g. Updating the column\~\f5\fs20 name\f4\fs30\~we should run command like

fs24 php artisan make:migration update_name_column_in_contacts_table

fs30 Read more at\~{\cf3{\field{\*\fldinst{HYPERLINK "https://laravel.com/docs/9.x/migrations"}}{\fldrslt{\ul\cf3 Laravel}}}}{\cf3\f4\fs30{\field{\*\fldinst{HYPERLINK "https://laravel.com/docs/9.x/migrations"}}{\fldrslt{\ul\cf3  Doc}}}}\cf4\f4\fs30
fs26 Column Modifiers\fs36

fs30 Column Modifiers are nothing but a predefined function available in LARAVEL Migration by using that you can make any column\~\f5\fs20 nullable\f4\fs30 , Set Column\~\f5\fs20 default\f4\fs30\~and many more.
You can check the available\~\cf3 Laravel Column Modifier\cf4.

fs26 Add/Rename/Remove Database Indexes\fs36

fs30 Laravel Migration support few types of INDEXES for e.g.

fs24 use Illuminate\\Database\\Schema\\Blueprint;
use Illuminate\\Support\\Facades\\Schema;

Schema::table('users', function (Blueprint $table) \{
    $table->index('email');
\});


For renaming a index you can use\~\f5\fs20 renameIndex()\f4\fs30\~for e.g.

fs24 $table->renameIndex('email', 'mobile_no');

For dropping a index you can use\~\f5\fs20 dropIndex()\f4\fs30\~for e.g.
fs24 $table->dropIndex('email');

fs26 Foreign Key Constraints\fs36

fs30 Laravel also provides support for creating foreign key constraints, which are used to force referential integrity at the database level.

fs24 $table->foreignId('user_id')
      ->constrained('users')
      ->cascadeOnUpdate()
      ->cascadeOnDelete();

}
