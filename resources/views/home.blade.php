@extends('adminlte::page')

@section('title', 'GIFT 25thAnniversary')

@section('content_header')
    <h1>GIFT 25thAnniversary</h1>

@stop

@section('content')
    <p>special present for you</p>
    <div class="row">
        <div class="card m-3" style="width: 17rem;">
            <img src="{{ asset('img/blue-box.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><br><br>Jewelry | ジュエリー</h5>
                <p class="card-text"><br>Tiffany & Co. / Cartier / BVLGARI / MIKIMOTO /</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">リング<br>ネックレス/ピアス<br>時計</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Card link</a>
            </div>
        </div>
        <div class="card m-3" style="width: 17rem;">
            <img src="{{ asset('img/pink-box.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Perfume | 香水</h5>
                <p class="card-text"><br>KENZO / Chloe / CHANEL / HERMES / Yves Saint Laurent / DIOR / SHIRO /</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">パルファム<br>オードパルファム<br>オードトワレ</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Card link</a>
            </div>
        </div>
        <div class="card m-3" style="width: 17rem;">
            <img src="{{ asset('img/flower-box.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Flower | フラワー</h5>
                <p class="card-text"><br>nicolai bergmann / hibiyakadan / fragrance / English garden/ nirakuen </p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">フラワーボックス<br>ブーケ<br>プリザーブドフラワー</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Card link</a>
            </div>
        </div>
        <div class="card m-3" style="width: 17rem;">
            <img src="{{ asset('img/cake-box.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Christmas | クリスマス</h5>
                <p class="card-text"><br>quilfaitbon / poche-du-reve / maman et fille / TOOTH TOOTH / L'AVENUE /</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">ケーキ<br>コスメ<br>イルミネーション</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Card link</a>
            </div>
    </div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
