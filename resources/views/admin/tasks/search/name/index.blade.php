@extends('admin.layouts.master')

@section('page-title', 'TODO-查詢')

@section('page-content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">工作紀錄後端查詢</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">操作人員:&nbsp; <b>{{$name}}</b> &nbsp;的搜尋結果..</li>
        </ol>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">操作人員</th>
                <th scope="col">專案名稱</th>
                <th scope="col">專案紀錄內容</th>
                <th scope="col">建立時間</th>
                <th scope="col">最新修改時間</th>
                <th scope="col">備註</th>
            </tr>
            </thead>
            <tbody>
            @if($empty!='yes')
            @foreach($tasks as $task)
                <tr>
                    <th scope="row" style="width: 50px">{{ $task->id }}</th>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->created_at }}</td>

                    <td>{{ $task->updated_at }}</td>

                    <td>{{ $task->note }}</td>

                </tr>
            @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection

@section('page-style')
    <style>
        .sb-sidenav-menu a:nth-child(3){
            background-color: #0069ff !important;
            color:white !important;
        }
    </style>
    <script>

    </script>
@endsection
