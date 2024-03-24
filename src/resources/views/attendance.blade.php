@extends('layouts.app')

@section('main')
<div class="login-page">
    <h2 class="date">2023-03-25</h2>
 <form action="/attendance" method="post" name="timeform" >
    @csrf
    <table class="timetable">
        
        <tr>
            <th>名前</th>
            <th>勤務開始</th>
            <th>勤務終了</th>
            <th>休憩時間</th>
            <th>勤務時間</th>
        </tr>
    
     
        <tr>
             <td>鈴木</td>
             <td>10:00:00</td>
             <td>20:00:00</td>
             <td>00:30:00</td>
             <td>09:30:00</td>
        </tr>
        
        <tr>
             <td>松崎</td>
             <td>10:00:00</td>
             <td>20:00:00</td>
             <td>00:30:00</td>
             <td>09:30:00</td>
        </tr>
    </table>
 </form>
 </div>
@endsection