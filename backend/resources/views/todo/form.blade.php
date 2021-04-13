<div class="container ops-main">
    <div class="row">
        <div class="col-md-6">
            <h2>書籍登録</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            @include('todo/design')
            @if($target == 'store')
            <form action="/todo" method="post">
            @elseif($target == 'update')
            <form action="{{ route('todo.update', $todo->id)}}" method="POST">
                @method('PUT')
            @endif
            @csrf
                <div class="form-group">
                    <label for="name">名前</label>
                    <input type="text" class="form-control" name="name" value="{{ $todo->name }}">
                </div>
                <div class="form-group">
                    <label for="task">やること</label>
                    <input type="text" class="form-control" name="task" value="{{ $todo->task }}">
                </div>
                <div class="form-group">
                    <label for="done">チェック</label>
                    <input type="checkbox" class="form-control" name="done" value="true" {{ $todo->done === 1 ? 'checked="checked"' : '' }}/>
                </div>
                <button type="submit" class="btn btn-default">登録</button>
                <a href="/todo">戻る</a>
            </form>
        </div>
    </div>
</div>
