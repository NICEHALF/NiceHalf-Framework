﻿# NiceHalf Framework "Ready For Production"

NiceHalf Framework is an open source PHP Framework ready for production

## Installation

Use [Composer](https://getcomposer.org) to install NiceHalf Framework.

```bash
composer create-project nicehalf/nicehalf-framework
```

## Usage of Application :

```php
# Get composer autoload
require __DIR__ . '/../vendor/autoload.php';

# Get application class
require __DIR__ . '/../system/Applications/Application.php';

# Run the app
Application::run();
```

## Usage of Cookie :

```php
# Get cookie class
require __DIR__ . '/../system/Cookies/Cookie.php';

# Or use import cookie class
use NicehalfCore\System\Cookies\Cookie;

# Set cookie , you can set expire time by edit the third parameter 
Cookie::set('name', 'value');

# Check that cookie has the key
if (Cookie::has('name')) {
    echo 'has cookie';
}

# Get cookie by the given key
echo Cookie::get('name');

# Delete cookie by the given key
Cookie::delete('name');

# Return all cookies
print_r(Cookie::all());

# Destroy all cookies
Cookie::destroy();
```

## Usage of Session :

```php
# Get session class
require __DIR__ . '/../system/Sessions/Session.php';

# Or use import session class
use NicehalfCore\System\Sessions\Session;

# Start session
Session::start();

# Set session
Session::set('name', 'value');

# Check that session has the key
if (Session::has('name')) {
    echo 'has session';
}

# Get session by the given key
echo Session::get('name');

# Delete session by the given key
Session::delete('name');

# Return all sessions
print_r(Session::all());

# Get flash session by the given key
Session::flash('name');

# Destroy all sessions
Session::destroy();
```

## Usage of Database :

```php
# Get database class
require __DIR__ . '/../system/Database/Database.php';

# Or use import database class
use NicehalfCore\System\Database\Database;

# Connect to database
# Database connection start only when you call a method and you can use the following methods :

# Select
Database::table('table_name')->select('column_name');

# Insert
Database::table('table_name')->insert(['column_name' => 'value'])->execute();

# Update
Database::table('table_name')->update(['column_name' => 'value'])->where('column_name', '=', 'value');

# Delete
Database::table('table_name')->delete()->where('column_name', '=', 'value');

# To join table
Database::table('table_name')->join('table_name', 'table_name.column_name', '=', 'table_name.column_name');

# To join table on left
Database::table('table_name')->leftJoin('table_name', 'table_name.column_name', '=', 'table_name.column_name');

# To join table on right
Database::table('table_name')->rightJoin('table_name', 'table_name.column_name', '=', 'table_name.column_name');

# Usage of where
Database::table('table_name')->where('column_name', '=', 'value');

# Usage of orWhere 
Database::table('table_name')->orWhere('column_name', '=', 'value');

# Filter string : filtring inputs is automatically handled by the framework

# Usage of groupBy
Database::table('table_name')->groupBy('column_name');

# Usage of orderBy
Database::table('table_name')->orderBy('column_name', 'asc');

# Usage of limit
Database::table('table_name')->limit(10);

# Usage of offset
Database::table('table_name')->offset(10);

# Usage of having
Database::table('table_name')->having('column_name', '=', 'value');

# Usage of get
print_r(Database::table('table_name')->get());

# Get first row
print_r(Database::table('table_name')->first());

# Usage of count
print_r(Database::table('table_name')->count());

# Usage of patination
print_r(Database::table('table_name')->paginate(10));

# Get links for pagination
print_r(Database::table('table_name')->links()); // use it in view

# Usage of clear
Database::table('table_name')->clear(); // automatically handled by the framework
```

## Usage of Exception :

```php
# Get exception class
require __DIR__ . '/../system/Exeptions/Whoops.php';

# Or use import exception class
use NicehalfCore\System\Exeptions\Whoops;

# Throw exception
throw new Exception('message');
```

# Usage of File :

```php
# Get file class
require __DIR__ . '/../system/Extra/File.php';

# Or use import file class
use NicehalfCore\System\Extra\File;

# Get Root path
echo File::root();

# Get directory separator
echo File::ds();

# Get file full path
echo File::path('path/to/file');

# Check if file exists
echo File::exist('path/to/file');

# Require file
File::require_file('path/to/file');

# Include file
File::include_file('path/to/file');

# Require directory
File::require_directory('path/to/dir');
```

## Usage of Message : Using Bootstrap

```php
# Get message class
require __DIR__ . '/../system/Extra/Messages.php';

## Or use import message class
use NicehalfCore\System\Extra\Messages;

## Set Error Message
Messages::error('message');

## Set Success Message
Messages::success('message');

## Set Info Message
Messages::info('message');

## Set Warning Message
Messages::warning('message');
```

## Usage of Url :

```php
# Get url class
require __DIR__ . '/../system/Extra/Url.php';

# Or use import url class
use NicehalfCore\System\Extra\Url;

# Get path
echo Url::path($path);

# Get current url
echo Url::getCurrentUrl();

# Go to previous url
Url::previous();

## Redirect to url
Url::redirect('url');
```

## Usage of Request :

```php
# Get request class
require __DIR__ . '/../system/Http/Request.php';

# Or use import request class
use NicehalfCore\System\Http\Request;

# Get Base Url
echo Request::baseUrl();

# Get full url
echo Request::full_url();

# Check that the request has the key
if (Request::has('name')) {
    echo 'has request';
}

# Get the value from the request by the given key and method
echo Request::value('name', 'post');

# Get value from get request
echo Request::get('name');

# Get value from post request
echo Request::post('name');

# Set value for request by the given key
Request::set('name', 'value');

# Get previous request value
echo Request::previous();

# Get all requests
print_r(Request::all());
```
## Usage of Response :

```php
# Get response class
require __DIR__ . '/../system/Http/Response.php';

# Or use import response class
use NicehalfCore\System\Http\Response;

# Set response header
Response::header('Content-Type', 'text/html'); 

# Set response status code
Response::status(200);

# Return json respoonse
Response::json(['name' => 'value']);

# Output data : accept string, array, object
Response::output('data');
```

## Usage of Server :

```php
# Get server class
require __DIR__ . '/../system/Http/Server.php';

# Or use import server class
use NicehalfCore\System\Http\Server;

# Check that server has the key
if (Server::has('name')) {
    echo 'has server';
}

# Get the value from server by the given key
echo Server::value('name');

# Get path info
echo Server::path_info();

# Get all server data
print_r(Server::all());
```

## Usage of Model :

```php
# Get model class
require __DIR__ . '/../system/Models/Model.php';

# Or use import model class
use NicehalfCore\System\Models\Model;

# you can use the model class to create your own model for your application , for example : create a model for user and on the model you can create your own methods and set the table name without using Database class

# for example without using model :
# Database::table('users')->where('id', '=', 1)->first();

# for example with model :
# Model::where('id', '=', 1)->first();
```

## Usage of Route :

```php
# Get route class
require __DIR__ . '/../system/Routers/Route.php';

# Or use import route class
use NicehalfCore\System\Routers\Route;

# Set route on get method
Route::get('/', function () {
    return 'Hello World';
});
# or
Route::get('/', "Controller@method");

# Set route on post method
Route::post('/', function () {
    return 'Hello World';
});
# or
Route::post('/', "Controller@method");

# Set route on both methods
Route::any('/', function () {
    return 'Hello World';
});
# or
Route::any('/', "Controller@method");

# Usage of prefix on get or post method
Route::prefix('admin', function () {
    Route::get('dashboard', function () {
        return 'Hello World';
    });
    # or
    Route::get('dashboard', "Controller@method");
});

# Usage of middleware
Route::middleware('auth', function () {
    Route::get('dashboard', function () {
        return 'Hello World';
    });
    # or
    Route::get('dashboard', "Controller@method");
});

# Get All routes
print_r(Route::all());
```
## Usage of View :

```php
# Get view class
require __DIR__ . '/../system/Views/View.php';

# or use import view class
use NicehalfCore\System\Views\View;

# render view by class
View::render('view', ['name' => 'value']);

# render view by helper
view('view', ['name' => 'value'], 'helper');

# you can use blade template engine or basic method to render view
# blade template engine is the default method
# to change the method you can go to view class and change the method

# example of blade template engine :
public static function render($path, $data = [])
{
    $errors = Session::flash('errors');
    $old = Session::flash('old');
    $data = array_merge($data, ['errors' => $errors, 'old' => $old]);

    return static::bladeRender($path, $data);
}

# example basic method :
public static function render($path, $data = [])
{
    $errors = Session::flash('errors');
    $old = Session::flash('old');
    $data = array_merge($data, ['errors' => $errors, 'old' => $old]);

    return static::viewRender($path, $data);
}
```

## Usage of Validator :

```php
# Get validator class
require __DIR__ . '/../system/Validations/Validator.php';

# Or use import validator class
use NicehalfCore\System\Validations\Validator;

# Validate data
$validator = Validator::make($data, [
    'name' => 'required|min:3',
    'email' => 'required|email',
    'password' => 'required|min:6',
]);
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## Version
1.0.0

## Author
Developed by Ayoub Bablil.

## Email
ayoubbablil@gmail.com

## Website
https://nicehalf.com

## License
The framework is open-sourced software licensed under the [MIT](https://choosealicense.com/licenses/mit/) license.# NiceHalf-Framework
