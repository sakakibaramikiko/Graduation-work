@extends('adminlte::page')

@section('title', '商品登録')

@section('content_header')
    <h1>商品編集</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-10">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            < li>{{ $error }}</>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card card-primary">
                <form method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">名前</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="名前">
                        </div>

                        <div class="form-group">
                            <label for="type">種別</label>
                            <input type="text" class="form-control" id="type" name="type" placeholder="種別">
                        </div>

                        <div class="form-group">
                            <label for="total_price">価格</label>
                            <input type="text" class="form-control" id="total_price" name="total_price" placeholder="価格">
                        </div>
                    </div>

                        <div class="form-group">
                            <label for="detail">詳細</label>
                            <input type="text" class="form-control" id="detail" name="detail" placeholder="詳細説明">
                        </div>
                    </div>

                    <div class="card-footer d-grid gap-2 col-6 mx-auto">
                        <button type="button" class="btn btn-primary">更新</button>
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


// index.blade 23行目
{{-- <table class="table table-hover text-nowrap">
    <thead>
        <tr>
            <th>ID</th>
            <th>商品名</th>
            <th>種別</th>
            <th>価格</th>
            <th>詳細</th>
            <th>画像</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->type }}</td>
                <td>{{ $item->total_price }}</td>
                <td>{{ $item->detail }}</td>
                <td>{{ $item->views }}</td>
                <td>
                    <a href="{{ url('items/delete/'.$item->id) }}" class="btn btn-default">削除</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>  --}}