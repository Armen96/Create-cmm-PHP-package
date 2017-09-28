<?php

namespace Barsegyan\Createcmm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Console\Command;

class CreateCMMController extends Command
{
    protected $name;

    protected $signature = 'create:cmm {name}';

    protected $description = 'Command description';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $text = $this->argument('name');
        $this->info('Process Start');
        $ucText = ucfirst($text);
        Artisan::call('make:controller', ['name'=> $ucText.'Controller']);
        Artisan::call('make:model', ['name'=> $ucText]);
        Artisan::call('make:migration', ['name'=> 'create_'.$text.'_table','--create'=>$text]);
        $this->line('Process End');
    }
}
