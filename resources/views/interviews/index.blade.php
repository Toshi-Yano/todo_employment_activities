@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="column">
        <div class="panel panel-default">
          <div class="panel-heading">面接予定</div>
          <table class="table">
            <thead>
              <tr>
                <th>タイトル</th>
                <th>選考</th>
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
          {{ $interviews->links() }}
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
          <table class="table">
            <thead>
              <tr>
                <th>タイトル</th>
                <th>状況</th>
                <th>応募</th>
              </tr>
            </thead>
            <tbody>
              @foreach($companies as $company)
              <tr>
                <td>
                <a href="{{ route('companies.show', ['id' => $company->id]) }}">
                  {{ $company->company_name }}
                </a>
                </td>
                <td>
                  <span class="label">{{ $company->situationName}}</span>
                  <!-- <select>
                    @foreach($situations as $index => $name)
                      <option value="{{ $index }}">{{$name}}</option>
                    @endforeach
                  </select> -->
                </td>
                <td>
                  <span class="label">{{ $company->route->body }}</span>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </nav>
      </div>
    </div>
  </div>
@endsection