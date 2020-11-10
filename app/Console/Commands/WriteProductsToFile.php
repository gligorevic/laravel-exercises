<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class WriteProductsToFile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'write:products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Write products to file in storage';

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
     * @return int
     */
    public function handle()
    {
        $products = Product::all();
        \Storage::disk('local')->put('products.json',json_encode($products));
    }
}
