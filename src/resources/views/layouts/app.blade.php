<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    @yield('css')
</head>

<body>
    <header class="header">
      <h1 class="header-logo">
         Atte
      </h1>
        <div class="header-list">
          <li class="headerlink"><a href="/">ホーム</a></li>
          <li class="headerlink"><a href="/attendance">日付一覧</a></li>
          <li class="headerlink">ログアウト</li>
       </div>
  </header>
    

    <main class="main">
        @yield('main')
    </main>
</body>