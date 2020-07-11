@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <nav class="panel panel-default">
          <div class="panel-heading">会社を登録する</div>
          <div class="panel-body">
            @if($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach($errors->all() as $message)
                    <li>{{ $message }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form action="{{ route('companies.create') }}" method="post">
              @csrf
              <div class="form-group">
                <label for="company_name">会社名</label>
                <input type="text" class="form-control" name="company_name" id="company_name" value="{{ old('company_name') }}" />
                <label for="company_note">メモ</label>
                <input type="text" class="form-control" name="company_note" id="company_note" value="{{ old('company_note') }}" />
                <label for="route_id">応募元</label>
                <input type="text" class="form-control" name="route_id" id="route_id" value="{{ old('route_id') }}" />
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