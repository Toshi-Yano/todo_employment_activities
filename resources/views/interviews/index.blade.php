<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>就職活動管理アプリ</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<header>
  <nav class="my-navbar">
    <a class="my-navbar-brand" href="/">就職活動管理アプリ</a>
  </nav>
</header>
<main>
  <div class="container">
    <div class="row">
      <div class="col">
        <nav class="panel panel-default">
          <div class="panel-heading">フォルダ</div>
          <div class="panel-body">
            <a href="#" class="btn btn-default btn-block">
              フォルダを追加する
            </a>
          </div>
          <div class="list-group">
            @foreach($interviews as $interview)
              <a href="{{ route('interviews.index', ['id' => $interview->id]) }}" class="list-group-item">
                {{ $interview->company->company_name }}
                {{ $interview->company->company_note }}
                {{ $interview->formatted_schedule }}
              </a>
            @endforeach
          </div>
        </nav>
      </div>
      <div class="column">
      </div>
    </div>
  </div>
</main>
</body>
</html>
