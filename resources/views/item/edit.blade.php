@extends('adminlte::page')

@section('title', '商品登録')

@section('content_header')
    <h1>商品編集</h1>
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
            <form action="{{ url('items/update/'. $item->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- 商品画像の現在の表示 -->
                <div>
                    <div class="" style="width: 20%;">
                        <div class="form-group">
                            <label for="current_img">現在の商品画像</label><br>
                                @if($item->img_name)
                                    <img src="{{ $item->img_name }}" alt="Current Product Image" class="card-img-top">
                                @else
                                    <p>現在登録されている画像はありません</p>
                                @endif
                        </div>
                    </div>
                    <!-- 画像削除用のチェックボックス -->
                    <div class="form-group">
                        <label for="delete_image">画像を削除する</label>
                        <input type="checkbox" name="delete_image" id="delete_image">
                    </div>
                </div>
                <div class="card card-body" style="width: 100%">
                    <!-- 新しい画像を選択するフォームフィールド -->
                    <div class="form-group">
                        <label for="img_name">新しい商品画像</label>
                        <input type="file" class="form-control-file" name="img_name" id="img_name">
                            @if($errors->has('img_name'))
                                <p class="text-danger">{{ $errors->first('img_name') }}</p>
                            @endif
                    </div>
                    <div class="form-group">
                        <label for="name" class="placeholder-header">商品名</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}">
                    </div>
                    <div class="form-group">
                        <label>種別</label>
                            <select class="form-control" name="type">
                                <option></option>
                                <option value="Jewelry | ジュエリー" @if($item->type=="Jewelry | ジュエリー") selected @endif>Jewelry | ジュエリー</option>
                                <option value="Perfume | 香水" @if($item->type=="Perfume | 香水") selected @endif>Perfume | 香水</option>
                                <option value="Flower | フラワー" @if($item->type=="Flower | フラワー") selected @endif>Flower | フラワー</option>
                                <option value="Christmas | クリスマス" @if($item->type=="Christmas | クリスマス") selected @endif>Christmas | クリスマス</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="total_price">価格</label>
                            <input type="text" class="form-control" id="total_price" name="total_price" value="{{ $item->total_price }}">
                    </div>
                    <div class="form-group">
                        <label for="detail">詳細</label>
                            <input type="text" class="form-control" id="detail" name="detail" value="{{ $item->detail }}">
                    </div>  
                    <div class="form-group">
                        <button type="submit" class="btn btn-info w-25">商品データを更新する</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop

@section('css')
@stop

@section('js')
@stop


