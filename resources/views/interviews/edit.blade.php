@extends('layout')

@section('styles')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <nav class="panel panel-default">
          <div class="panel-heading">面接を編集する</div>
          <div class="panel-body">
            @if($errors->any())
              <div class="alert alert-danger">
                @foreach($errors->all() as $message)
                  <p>{{ $message }}</p>
                @endforeach
              </div>
            @endif
            <form action="{{ route('interviews.edit', ['id' => $interview->company_id, 'interview_id' => $interview->id]) }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="stage_id">段階</label>
                <input type="text" class="form-control" name="stage_id" id="stage_id" value="{{ old('stage_id') ?? $interview->stage_id }}" />
              </div>
              <div class="form-group">
              <label for="schedule">面接日時</label>
                <input type="text" class="form-control" name="schedule" id="schedule" value="{{ old('schedule') }}" />
              </div>
              <div class="text-right">
                <button type="submit" class="btn btn-primary">送信</button>
              </div>
            </form>
          </div>
        </nav>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
  <script src="https://npmcdn.com/flatpickr/dist/l10n/ja.js"></script>
  <script>
    flatpickr(document.getElementById('schedule'), {
      locale: 'ja',
      enableTime: true,
      dateFormat: "Y/m/d H:i:ss",
      minDate: new Date()
    });
  </script>
@endsection