<?php

namespace App\Console\Commands\Collection;

use Illuminate\Console\Command;

class Functions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'collection:functions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '集合方法';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $collect = collect([1, 2, 3]);
        $collect = collect([
            ['name' => 1, 'value' => '123'],
            ['name' => 2, 'value' => '222'],
            ['name' => 3, 'value' => '444'],
        ]);

        // print_r($collect->all());
        // print_r($collect->avg());
        // print_r($collect->avg('value'));
        // print_r($collect->avg(function ($value) {
        //     return $value['value'];
        // }));
        print_r($collect->median());
        print_r($collect->median('value'));

    }
}
