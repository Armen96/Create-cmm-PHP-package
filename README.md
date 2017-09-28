
# create-cmm

## Install

Via Composer

```
composer require barsegyan/createcmm
```

In your app/config/app.php file, add the following to the providers array:

```
\Barsegyan\Createcmm\BarsegyanCreateCMMServiceProvider::class,
```

## Usage

After 

```
composer dump-autoload -o
```

Once installed, you should see create:cmm as one of the artisan commands when you run:

```
php artisan list
```


For example:

```
php artisan create:cmm post
```


## Security

If you discover any security related issues, please email barsegyan96armen@gmail.com.

## Credits

- [Armen Barsegyan](https://github.com/barsegyan)


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
