@extends('todo/design')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3 class="title">やることリスト</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-md-11 col-md-offset-1">
      <table class="table text-center">
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">ユーザー</th>
            <th class="text-center">やること</th>
            <th class="text-center">日付</th>
            <th class="text-center">チェック</th>
        </tr>
        @foreach($todos as $todo)
        <tr>
          <td>
            <a href="/todo/{{ $todo->id }}/edit">{{ $todo->id }}</a>
          </td>
          <td>{{ $todo->name }}</td>
          <td>{{ $todo->task }}</td>
          <td>{{ $todo->updated_at }}</td>
          <td>{{ $todo->done === 1 ? '達成した' : '達成されていない' }}</td>
            <form action="/todo/{{ $todo->id }}" method="post">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-trash"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </table>
      <div><a href="/todo/create" class="btn btn-default">新規作成</a></div>
    </div>
  </div>
</div>
@endsection