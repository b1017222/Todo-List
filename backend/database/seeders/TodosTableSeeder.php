<?php
//データベースの初期値設定

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->truncate();
        
        $todos = [ 
            [ 'name' => 'kaede',
              'task' => 'cooking',
              'done' => 0
            ],
            [ 'name' => 'kaede',
              'task' => 'running',
              'done' => 1
            ]
        ];
        foreach($todos as $todo) {
            \App\Models\Todo::create($todo);
        }
    }
}
