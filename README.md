# create-cmm
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

Once installed, you should see create:cmm as one of the artisan commands when you run:

php artisan list
For example:

php artisan create:cmm post
This would create cmm files in your project (PostController,Post Model and post migration)


Armen Barsegyan
License

The MIT License (MIT). Please see License File for more information.
