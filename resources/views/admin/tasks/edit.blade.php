@extends('admin.layouts.master')

@section('page-title', 'TODO-編輯工作紀錄')

@section('page-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">工作紀錄管理</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">編輯工作紀錄</li>
    </ol>
{{--    <div class="alert alert-danger alert-dismissible" role="alert" id="liveAlert">--}}
{{--        <strong>錯誤！</strong> 請修正以下問題：--}}
{{--        <ul>--}}
{{--            <li>錯誤 1</li>--}}
{{--        </ul>--}}
{{--        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>--}}
{{--    </div>--}}
    <form action="{{ route('admin.tasks.update',$task->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="name" class="form-label">建立人員:</label>
            <input id="name" name="name" type="text" class="form-control" placeholder="請輸入人員名稱" value="{{$task->name}}">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">專案標題:</label>
            <input id="title" name="title" type="text" class="form-control" placeholder="請輸入專案標題" value="{{$task->title}}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">專案紀錄內容:</label>
            <textarea id="content" name="content" class="form-control" rows="10" placeholder="請輸入專案紀錄內容">{{$task->content}}</textarea>
        </div>
        <div class="mb-3">
            <label for="note" class="form-label">備註(note):</label>
            <textarea id="note" name="note" class="form-control" rows="10" placeholder="專案備註">{{$task->note}}</textarea>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary btn-sm">儲存</button>
        </div>
    </form>
</div>
@endsection

@section('page-style')
    <style>
        .sb-sidenav-menu a:nth-child(1){
            background-color: #0069ff !important;
        }
    </style>
@endsection

@section('page-style')
    <style>
        .sb-sidenav-menu a:nth-child(2){
            background-color: #0069ff !important;
            color:white !important;
        }
    </style>
@endsection
