@extends('layouts.layout')

@section('content')

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактировать ДВУ</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('board.index') }}">Доски</a></li>
                            <li class="breadcrumb-item active">Редактировать</li>
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
                    <form action="{{route('board.update', $board->id)}}" method="POST" class="w-25">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label class="form-label">Наименование ДВУ</label>
                            <input type="text" name="title" class="form-control" value="{{$board->title}}">
                            @error('title')
                            <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Компания</label>
                            <select class="form-control" name="company_id" id="company_id">
                                <option value="">Выберите компанию</option>
                                @foreach($companies as $company)
                                    <option @if($company->id === $board->company_id) selected @endif value="{{ $company->id }}">{{ $company->title }}</option>
                                @endforeach
                            </select>
                            @error('company_id')
                            <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Администратор</label>
                            <select class="form-control" name="admin_id" id="admin_id">
                                <option value="">Выберите администратора</option>
                                @foreach($users as $user)
                                    <option @if($user->id === $board->admin_id) selected @endif value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                            @error('admin_id')
                            <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Уровень ДВУ</label>
                            <input type="text" name="board_level" class="form-control" value="{{$board->board_level}}">
                            @error('board_level')
                            <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="col-4">
                            <input type="submit" class="btn btn-block btn-primary" value="Update">
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

@endsection
