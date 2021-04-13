<?php
//リクエストを受け取り、レスポンスを作成
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TodoRequest;
use Illuminate\Http\Request;
use App\Models\Todo; //モデルの取得

class TodoController extends Controller
{
    public function index()
  {
      $todos = Todo::all();

      return view('todo/index', compact('todos'));
  }

    //データ削除
    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();

        return redirect("/todo");
    }

    //データ編集
    public function edit($id)
    {
        $todo = Todo::findOrFail($id);
        
        return view('todo/edit', compact('todo'));
    }

    //データ新規作成
    public function create()
    {
        $todo = new Todo();
        
        return view('todo/create', compact('todo'));
    }

    //データ保存
    public function store(Request $request)
    {
        $todo = new Todo();
        $todo->name = $request->name;
        $todo->task = $request->task;
        $todo->done = $request->has('done');
        $todo->save();

        return redirect("/todo");
    }

    //データ更新
    public function update(TodoRequest $request, $id)
    {
        $todo = Todo::findOrFail($id);
        $todo->name = $request->name;
        $todo->task = $request->task;
        $todo->done = $request->has('done');
        $todo->save();

        return redirect("/todo");
    }

}
