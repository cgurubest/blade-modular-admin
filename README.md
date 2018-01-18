# blade-modular-admin
Blade шаблон на основе modular-admin-html

Установите новое Laravel приложение.
Скопируйте в содержимое из соответствующих папок public и views

Настройте БД

```php artisan make:auth```


## LoginController
```
protected $redirectTo = '/';

public function showLoginForm()
    {
        return view('modular.auth.login');
    }

```

    
## RegisterController

```
protected $redirectTo = '/';

public function showRegistrationForm()
    {
        return view('modular.auth.register');
    }
    
```

## HomeController
```
   public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('modular.pages.dashboard');
    }
```

## Web Routes
```
Route::get('/', 'HomeController@index')->name('home');
Auth::routes();
```
