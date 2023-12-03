@extends('adminlte::page')

@section('title', '商品登録')

@section('content_header')
    <h1>商品登録</h1>
@stop

@section('content')
<div class=container>
    <div class="row">
        <div class="col-md-10">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card card-primary">
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">商品名</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="商品名">
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label>種別</label>
                                <select class="form-control" name="type">
                                    <option value="" selected disabled>選択してください</option>
                                    <option value="Jewelry | ジュエリー">Jewelry | ジュエリー</option>
                                    <option value="Perfume | 香水">Perfume | 香水</option>
                                    <option value="Flower | フラワー">Flower | フラワー</option>
                                    <option value="Christmas | クリスマス">Christmas | クリスマス</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="total_price">価格</label>
                            <input type="text" class="form-control" id="type" name="total_price" placeholder="価格">
                        </div>
                        <div class="form-group">
                            <label for="detail">詳細</label>
                            <input type="text" class="form-control" id="detail" name="detail" placeholder="詳細説明">
                        </div>
                        <div class="form-group">
                            <label for="img_name">商品画像</label>
                            <input type="file" class="form-control" name="img_name" id="img_name">
                                @if($errors->has('img_name'))
                                    <p class="text-danger">{{ $errors->first('img_name') }}</p>
                                @endif
                        </div> 
                    </div>                                        
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info w-25">商品を登録する</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
@stop

@section('js')
@stop
