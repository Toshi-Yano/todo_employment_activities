@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col">
        <nav class="panel panel-default">
          <div class="panel-heading">フォルダ</div>
          <div class="panel-body">
            <a href="{{ route('companies.create') }}" class="btn btn-default btn-block">
              会社を登録する
            </a>
          </div>
          <div class="list-group">
            @foreach($interviews as $interview)
              <a href="{{ route('interviews.index', ['id' => $interview->id]) }}" class="list-group-item">
                {{ $interview->company->company_name }}
                {{ $interview->company->company_note }}
                {{ $interview->formatted_schedule }}
              </a>
              <a href="#" class="btn btn-default btn-block">
                タスクを追加する
              </a>
            @endforeach
          </div>
        </nav>
      </div>
      <div class="column">
        <div class="panel panel-default">
          <div class="panel-heading">タスク</div>
          <div class="panel-body">
            <div class="text-right">
              <a href="#" class="btn btn-default btn-block">
                タスクを追加する
              </a>
            </div>
          </div>
          <table class="table">
            <thead>
            <tr>
              <th>タイトル</th>
              <th>状態</th>
              <th>期限</th>
              <th></th>
            </tr>
            </thead>
            <tbody>
              @foreach($interviews as $interview)
                <tr>
                  <td>{{ $interview->company->company_name }}</td>
                  <td>
                    <span class="label">{{ $interview->company->company_note }}</span>
                  </td>
                  <td>{{ $interview->formatted_schedule }}</td>
                  <td><a href="#">編集</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection