# create-cmm
Create CMM
composer.json add "Barsegyan\\Createcmm\\": "vendor/barsegyan/createcmm/src"

"autoload": {
        "classmap": [
            "database/seeds",
            "database/factories"
        ],
        "psr-4": {
            "App\\": "app/",
            "Barsegyan\\Createcmm\\": "vendor/barsegyan/createcmm/src"
        }
    },
composer dump-autoload
