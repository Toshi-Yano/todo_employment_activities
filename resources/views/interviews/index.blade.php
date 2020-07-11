@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="column">
        <div class="panel panel-default">
          <div class="panel-heading">面接予定</div>
          <div class="panel-body">
            <div class="text-right">
              <!-- <a href="#" class="btn btn-default btn-block">
                タスクを追加する
              </a> -->
            </div>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th>タイトル</th>
                <th>段階</th>
                <th>面接日時</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($interviews as $interview)
              <tr>
                <td>{{ $interview->company->company_name }}</td>
                  <td>
                    <span class="label">{{ $interview->stage->body }}</span>
                  </td>
                  <td>{{ $interview->formatted_schedule }}</td>
                  <td><a href="{{ route('interviews.edit', ['id' => $interview->company_id, 'interview_id' => $interview->id]) }}">編集</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      <div class="col">
        <nav class="panel panel-default">
          <div class="panel-heading">応募中の企業</div>
          <div class="panel-body">
            <a href="{{ route('companies.create') }}" class="btn btn-default btn-block">
              企業を登録する
            </a>
          </div>
          <div class="list-group">
            @foreach($companies as $company)
              <a href="{{ route('interviews.index', ['id' => $company->id]) }}" class="list-group-item">
                {{ $company->company_name }}
                {{ $company->route_id }}
              </a>
              <!-- <a href="#" class="btn btn-default btn-block">
                タスクを追加する
              </a> -->
            @endforeach
          </div>
        </nav>
      </div>
    </div>
  </div>
@endsection