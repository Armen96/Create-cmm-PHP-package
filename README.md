
# create-cmm

Seeder creates an artisan command that lets you quickly create seeds from your existing database.

## Install

Via Composer

```
composer require karakhanyans/seeder
```

In your app/config/app.php file, add the following to the providers array:

```
 Karakhanyans\Seeder\SeederServiceProvider::class,
```

## Usage

Once installed, you should see generate:seed as one of the artisan commands when you run:

```
php artisan list
```

For example:

```
php artisan generate:seed
```

This would create seed files in your database/seeds directory with a php files, which would contain the following stub:
   
```
<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{

	/**
	* Run the database seeds.
	*
	* @return void
	*/

	 protected $users;

	 public function setUsers(){
		$this->users = //serialized data;
	 }

	 public function run(){
		 $this->setUsers();
		 foreach(unserialize($this->users) as $item){
			 try{ 
				\App\User::create((array)$item);
			}catch (\Exception $e){
				\Illuminate\Support\Facades\Log::info('Duplicate entry for user: '.$item['id']);
			 }
		 }
	 }

}
```
In your database/seeds/DatabaseSeeder.php file, add the following to the run() action to call all new seeds:
```
$this->call(GlobalSeeder::class);
```
If your models in specific folder you should use {folder} argument to generate your Seeds from that folder.
```
 php artisan generate:seed Models
```
If you want to get all your models recursively you can use the following command with -r flag:
```
php artisan generate:seed Models -r
```
## Note

For Users table please remove $hidden array to make sure that Seeder will contain all database fields.
```
protected $hidden = ['password', 'remember_token'];
```
## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email karakhanyansa@gmail.com.

## Credits

- [Sergey Karakhanyan](https://github.com/karakhanyans)


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/karakhanyans/seeder.svg
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg
[ico-downloads]: https://img.shields.io/packagist/dt/karakhanyans/seeder.svg

[link-packagist]: https://packagist.org/packages/karakhanyans/seeder
[link-downloads]: https://packagist.org/packages/karakhanyans/seeder/stats
[link-author]: https://github.com/karakhanyans















Create CMM


Install

Via Composer

composer require barsegyan/createcmm
In your app/config/app.php file, add the following to the providers array:

 \Barsegyan\Createcmm\BarsegyanCreateCMMServiceProvider::class,
Usage

After composer required add "Barsegyan\\Createcmm\\": "vendor/barsegyan/createcmm/src" in composer.json file,

"psr-4": {
    "App\\": "app/",
    "Barsegyan\\Createcmm\\": "vendor/barsegyan/createcmm/src"
}


composer dump-autoload  command.


Once installed, you should see create:cmm as one of the artisan commands when you run:

php artisan list
For example:

php artisan create:cmm post
This would create cmm files in your project (PostController,Post Model and post migration)


Armen Barsegyan
License

The MIT License (MIT). Please see License File for more information.

The MIT License (MIT). Please see License File for more information.

