@extends('adminlte::page')

@section('title', '商品一覧')

@section('content_header')
    <h1>商品一覧</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">商品一覧</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm">
                            <div class="input-group-append">
                                <a href="{{ url('items/add') }}" class="btn btn-default">商品登録</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                <div class="items">
                    <table class="table table-hover text-nowrap" style="width: 100%; height: 50%;">
                        <thead> 
                            <tr>
                                <th>ID</th>
                                <th>画像</th>
                                <th>商品名</th>
                                <th>種別</th>
                                <th>価格</th>
                                <th>詳細</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td><img src="{{ $item->img_name }}" alt="{{ $item->img_name }}" class="img-small"></td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->type }}</td>
                                <td>¥ {{ number_format($item->total_price) }}</td>
                                <td>{{ $item->detail }}</td>                                
                                <td>
                                    {{-- <a href="{{ url('items/edit/'.$item->id) }}" class="btn btn-default">編集</a> --}}
                                    <a href="{{ url('items/delete/' .$item->id) }}" class="btn btn-outline-danger" onsubmit="return window.confirm('登録データを削除します。削除してもよろしいですか。')">削除</a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
@stop

@section('js')
@stop
