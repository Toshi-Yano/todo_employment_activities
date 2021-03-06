@extends('layout')

@section('styles')
  @include('share.flatpickr.styles')
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <nav class="panel panel-default">
          <div class="panel-heading">面接を追加する</div>
          <div class="panel-body">
            @if($errors->any())
              <div class="alert alert-danger">
                @foreach($errors->all() as $message)
                  <p>{{ $message }}</p>
                @endforeach
              </div>
            @endif
            <form action="{{ route('interviews.create', ['id' => $company_id]) }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="stage_id">選考ステップ</label>
                <select class="form-control" name="stage_id" id="stage_id" >
                  @foreach($stages as $stage)
                  <option value={{$stage->id}} @if(old('stage_id') == $stage->id) selected @endif>{{$stage->body}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="schedule">面接日時</label>
                <input type="text" class="form-control" name="schedule" id="schedule" value="{{ old('schedule') }}" />
              </div>
              <div class="form-group">
                <label for="interview_note">メモ</label>
                <input type="text" class="form-control" name="interview_note" id="interview_note" value="{{ old('interview_note') }}" />
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
  @include('share.flatpickr.scripts')
@endsection
