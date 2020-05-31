<?php

namespace App\Console\Commands\Collection;

use Illuminate\Console\Command;
use Illuminate\Support\Collection;

class Create extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'collection:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '集合创建';

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
        $collect = new Collection([1, 3, 5]);

        $collect = Collection::make([1, 2, 4]);

        $collect = Collection::times(3);

        $collect = Collection::times(3, function ($value) {
            return [
                'value' => $value,
                'name'  => 'tests:'.$value,
            ];
        });

        print_r($collect);
    }
}
