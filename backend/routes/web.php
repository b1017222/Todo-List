<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('todo.index');
// });

// Route::get('todo', [TodoController::class, 'index'])->name('todo');//('url',呼ばれているクラスとviewのファイル)->名前つきルート（ルート名は一意）
// Route::get('todo/create' ,[TodoController::class, 'create'])->name('todo.create');//新規作成
// Route::post('todo' ,[TodoController::class, 'store'])->name('todo.store');//保存
// Route::get('todo/{id}/edit' ,[TodoController::class, 'edit'])->name('todo.edit');//編集画面
// Route::put('todo/{id}',[TodoController::class, 'update'])->name('todo.update');//更新処理
// Route::delete('todo/{id}',[TodoController::class, 'delete'])->name('todo.delete');//削除処理

Route::resource('todo', TodoController::class);
