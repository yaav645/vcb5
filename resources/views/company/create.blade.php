@extends('layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Создать компанию</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('company.index') }}">Компании</a></li>
                        <li class="breadcrumb-item active">Создать компанию</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="col-12">
                <form action="{{route('company.store')}}" method="POST" class="w-25">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Название компании</label>
                        <input type="text" name="title" class="form-control" placeholder="Введите название">
                        @error('title')
                        <div class="text-danger"><strong>{{ $message }}</strong></div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Описание компании</label>
                        <textarea name="description" class="form-control" rows="3">{{old('description')}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Администратор компании</label>
                        <select class="form-control" name="admin_id" id="admin_id">
                            <option value="">Выберите администратора</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                        @error('admin_id')
                        <div class="text-danger"><strong>{{ $message }}</strong></div>
                        @enderror
                    </div>
                    <div class="w-50">
                        <input type="submit" class="btn btn-block btn-primary" value="Добавить">
                    </div>
                </form>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
