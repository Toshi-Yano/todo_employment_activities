@extends('layout')

@section('content')
<div class="panel-heading">面接予定</div>
{{ $company->company_name }}

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

@endsection