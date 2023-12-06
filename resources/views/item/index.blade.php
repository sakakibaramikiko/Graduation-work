@extends('adminlte::page')

@section('title', '商品一覧')

@section('content_header')
    {{-- <h4>商品一覧</h4> --}}
@stop

@section('content')
<!-- 編集成功時のメッセージ -->
@if ( session('message') )
    <div class="alert alert-success" role="alert">{{ session('message') }}</div>
@endif

<div class="card-header">
    <h2 class="card-title">GIFT&ensp;LIST</h2> 
</div>
<div class=container> 
    <div class="row">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">商品一覧</h3>
                <div class="card-tools"> 
                    <div class="input-group input-group-sm">
                        <div class="input-group-append">
                            <a href="{{ url('items/add') }}" class="btn btn-link"><u>商品登録画面へ</u></a>
                            <a href="{{ url('/') }}" class="btn btn-link"><u>HOME</u></a>
                        </div>
                    </div>
                </div>
            </div>     
            <div class="card-body table-responsive p-0">
                <div class="items">
                    <table class="table table-hover text-nowrap" style="width: 100%;">
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
                        <tbody class="tbody">
                        @foreach($items as $item)
                            <tr>
                                <td class="td">{{ $item->id }}</td>
                                <td><img src="{{ $item->img_name }}" alt="{{ $item->img_name }}" class="img" style="max-height: 100PX; max-width: 100px;"></td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->type }}</td>
                                <td>¥ {{ number_format($item->total_price) }}</td>
                                <td>{{ $item->detail }}</td>                                
                                <td>
                                    <form action="{{ url('items/edit/' . $item->id) }}" method="get">
                                    @csrf
                                        <button type="submit" class="btn btn-outline-info mb-2">編集</button>
                                    </form>
                                    <form action="{{ url('items/delete/' . $item->id) }}" method="post" onsubmit="return confirm('登録データを削除します。削除してもよろしいですか。')">
                                    @csrf
                                        <button type="submit" class="btn btn-outline-warning">削除</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div> 
</div>  
@stop

@section('css')
@stop

@section('js')
@stop
