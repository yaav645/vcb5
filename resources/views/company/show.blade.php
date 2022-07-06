@extends('layouts.layout')

@section('content')

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Компания</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('company.index') }}">Компании</a></li>
                            <li class="breadcrumb-item active">Подробнее</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @include('includes.smallboxes')
                <div class="col-12">
                    <form action="{{route('company.store')}}" method="POST" class="w-25">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Наименование компании</label>
                            <div>
                            {{$company->title}}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Описание компании</label>
                            <div>
                            {{$company->description}}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Администратор</label>
                            <div>
                            {{$company->admin_id}}
                            </div>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <div class="col-2 mb-3">
                        <a href="{{route('company.edit', $company->id)}}" class="btn btn-block btn-primary">Редактировать</a>
                    </div>
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

@endsection
