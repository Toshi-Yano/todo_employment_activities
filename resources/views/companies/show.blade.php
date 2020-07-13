@extends('layout')

@section('content')
<div class="container">
    <div class="row">
      <div class="column">
        <div class="panel panel-default">
          <div class="panel-heading">{{ $company->company_name }}</div>
          <div class="panel-body">
            <p>{{ $company->company_note }}</p>
          </div>
        </nav>
      </div>
    </div>
    <div class="col">
      <nav class="panel panel-default">
        <div class="panel-heading">面接予定</div>
        <div class="panel-body">
            <a href="{{ route('interviews.create', ['id' => $company->id]) }}" class="btn btn-default btn-block">
              面接予定を登録する
            </a>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th>タイトル</th>
                <th>面接日時</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($interviews as $interview)
              <tr>
                <td>{{ $interview->stage->body }}</td>
                  <td>{{ $interview->formatted_schedule }}</td>
                  <td><a href="{{ route('interviews.edit', ['id' => $interview->company_id, 'interview_id' => $interview->id]) }}">編集</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
      </nav>
    </div>
  </div>
</div>
@endsection