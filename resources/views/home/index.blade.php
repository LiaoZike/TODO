
@extends('home.layouts.master')

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
        <h1 class="mt-4">工作紀錄管理</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">工作紀錄管理表</li>
        </ol>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">

            <a class="btn btn-success btn-sm" href="{{ route('tasks.create') }}" style="width:100%;padding:10px 0px;margin-bottom: 40px;">
                <i class="fas fa-circle-plus"></i>
                新增一筆工作紀錄
            </a>
        </div>

        <table id="TaskTable" class="table" >
            <thead >

            <tr>
                <th data-sortable="true" scope="col">#</th>
                <th data-sortable="true" scope="col">操作人員</th>
                <th data-sortable="true" scope="col">專案名稱</th>
                <th data-sortable="true" scope="col">專案紀錄內容</th>
                <th data-sortable="true" scope="col">建立時間</th>
                <th data-sortable="true" scope="col">最新修改時間</th>
                <th data-sortable="true" scope="col">備註</th>
            </tr>
            </thead>

            <tfoot>
            <tr>
                <th>S_ID</th>
                <th>S_Name</th>
                <th>S_Title</th>
                <th>S_Content</th>
                <th>S_StartT</th>
                <th>S_NewT</th>
                <th>S_Note</th>
            </tr>
            </tfoot>
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
    <style>
        table {
            border-collapse: collapse;
        }
        tfoot {
            display: table-row-group;
        }

        #TaskTable{
            border: 1px solid #999;
            border-radius: 5px;
            padding: 10px;
        }

        thead, tbody, tfoot, tr, td, th {
            border-style: none;
        }
        #TaskTable_filter input{
            padding: 2px;
            border-radius: 5px;
        }
    </style>
@endsection

@section('page-style')
    <style>
        .sb-sidenav-menu a:nth-child(1){
            background-color: #0069ff !important;
            color:white !important;
        }
    </style>
    <script>
        $(document).ready(function(){
            new DataTable('#TaskTable', {
                initComplete: function () {
                    this.api()
                        .columns()
                        .every(function () {
                            let column = this;
                            let title = column.footer().textContent;

                            // Create input element
                            let input = document.createElement('input');
                            input.placeholder = title;
                            column.footer().replaceChildren(input);

                            // Event listener for user input
                            input.addEventListener('keyup', () => {
                                if (column.search() !== this.value) {
                                    column.search(input.value).draw();
                                }
                            });
                        });
                }
            });
            $(document).ready(function(){
                $('#TaskTable_filter input').attr('placeholder', 'Search All');
            })
        });

    </script>
@endsection
