<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Thread;
class ThreadSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            Thread::create([
                'thread' => '直樹の絶起した件',
            ]);
        }
    }
}
