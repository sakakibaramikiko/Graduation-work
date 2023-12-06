@extends('adminlte::page')

@section('title', 'GIFT&ensp;25thAnniversary')

@section('content_header')
    <h1>GIFT &ensp;25th&thinsp; Anniversary</h1>

@stop

@section('content')
    <p>special  &thinsp; present  &thinsp; for  &thinsp; you</p>
    <div class="row">
        <div class="card m-3" style="width: 16rem;">
            <a href="{{ url('items') }}"><img src="{{ asset('img/blue-box.png')}}" class="card-img-top" alt="GIFT" style="max-height: 250PX; max-width: 250px;"></a>
            <div class="card-body">
                <a href="{{ url('items') }}"><h5 class="card-title">Jewelry | ジュエリー</h5></a> 
                <p class="card-text"><br>Tiffany & Co. | Cartier | BVLGARI | MIKIMOTO | Van Cleef & Arpels </p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">リング<br>ネックレス/ピアス<br>時計</li>
            </ul>
        </div>
        <div class="card m-3" style="width: 16rem;">
            <a href="{{ url('items') }}"><img src="{{ asset('img/pink-box.png') }}" class="card-img-top" alt="GIFT"  style="max-height: 250PX; max-width: 250px;"></a>
            <div class="card-body">
                <a href="{{ url('items') }}"><h5 class="card-title">Perfume | 香水</h5></a>
                <p class="card-text"><br> KENZO | CHANEL | HERMES | Yves Saint Laurent | DIOR | Chloe </p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">パルファム<br>オードパルファム<br>オードトワレ</li>
            </ul>
        </div>
        <div class="card m-3" style="width: 16rem;">
            <a href="{{ url('items') }}"><img src="{{ asset('img/flower-box.png') }}" class="card-img-top" alt="GIFT" style="max-height: 250PX; max-width: 250px;"></a>
            <div class="card-body">
                <a href="{{ url('items') }}"><h5 class="card-title">Flower | フラワー</h5></a>
                <p class="card-text"><br> nicolai bergmann | Angelie| hanakanzashi | BLOSSOM  </p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">フラワーボックス<br>ブーケ<br>プリザーブドフラワー</li>
            </ul>
        </div>
        <div class="card m-3" style="width: 16rem;">
            <a href="{{ url('items') }}"><img src="{{ asset('img/cake-box.png') }}" class="card-img-top" alt="GIFT" style="max-height: 250PX; max-width: 250px;"></a>
            <div class="card-body">
                <a href="{{ url('items') }}"><h5 class="card-title">Christmas | クリスマス</h5></a>
                <p class="card-text"><br> qu'il fait bon | poche-du-reve | maman et fille | L'AVENUE </p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">ケーキ<br>コスメ<br>イルミネーション</li>
            </ul>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/item.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
