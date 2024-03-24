
@extends('layouts.app')
<body>
   @section('main')
  <div class="home-page">
      <form class="form" action="/register" method="post">
        <div class="worktime">
           <p class="userlogin">さん。 お疲れ様です</p>
        </div>
        <div class="home">
        <a href="/" class='work-rest'>
          勤務開始
        </a>
        <a href="/" class="work-rest">
          勤務終了
        </a>
        <a href="/" class='work-rest'>
          休憩開始
        </a>
        <a href="/" class="work-rest">
          休憩終了
       </a>
      </div>
    </form>
    </div>
      @endsection
   
</body>