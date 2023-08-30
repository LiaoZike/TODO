@extends('admin.layouts.master')

@section('page-title', 'Dashboard')

@section('page-content')
<div class="container-fluid px-4">
    <h1 class="mt-4">主控台</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">主控台</li>
    </ol>
    <!-- Main Content -->
</div>

@endsection

@section('page-style')
    <style>
        .sb-sidenav-menu a:nth-child(1){
            background-color: #0069ff !important;
            color:white !important;
        }
    </style>
@endsection
