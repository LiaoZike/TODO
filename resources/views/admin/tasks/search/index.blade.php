@extends('admin.layouts.master')

@section('page-title', 'TODO-工作紀錄列表')

@section('page-content')
    <style>
        tfoot input {
            width: 100%;
            padding: 3px;
            box-sizing: border-box;
        }
    </style>
    <div class="container-fluid px-4">
        <h1 class="mt-4">工作紀錄後端查詢</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">工作紀錄查詢(下方輸入查詢，可有可無)</li>
        </ol>
        <form action="{{ route('admin.tasks.search.show') }}" method="POST">
            @csrf
            <div>
                <label for="name" class="form-label">人員名稱:</label>
                <input id="name" name="name" type="text" class="form-control" placeholder="輸入人員名稱" style="display: inline-block;width: calc(100% - 150px);min-width: 150px">
            </div>
            <div>
                <label for="title" class="form-label">專案名稱:</label>
                <input id="title" name="title" type="text" class="form-control" placeholder="輸入專案名稱" style="display: inline-block;width: calc(100% - 150px);min-width: 150px">
            </div>
            <div>
                <label for="content" class="form-label">專案內容:</label>
                <input id="content" name="content" type="text" class="form-control" placeholder="輸入專案內容" style="display: inline-block;width: calc(100% - 150px);min-width: 150px">
            </div>

            <div>
                <label for="note" class="form-label">備註: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input id="note" name="note" type="text" class="form-control" placeholder="輸入備註" style="display: inline-block;width: calc(100% - 150px);min-width: 150px">
            </div>

            <button type="submit" class="btn btn-success btn-sm" style="width:100%;"><i class="fa-solid fa-magnifying-glass"></i> 查詢</button>
        </form>


        <table id="TaskTable" class="table"  >
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
