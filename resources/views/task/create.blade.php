@extends('layouts.layout')

@section('content')

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Создать задачу</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('task.index') }}">Задачи</a></li>
                            <li class="breadcrumb-item active">Создать задачу</li>
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
                    <form action="{{route('task.index')}}" method="POST" class="w-25">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Task title</label>
                            <input type="text" name="title" class="form-control" placeholder="Введите задачу">
                            @error('title')
                            <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Responsible</label>
                            <select class="form-control" name="responsible_id" id="responsible_id">
                                <option value="">Выберите исполнителя</option>
                                @foreach($users as $responsible)
                                    <option value="{{ $responsible->id }}">{{ $responsible->name }}</option>
                                @endforeach
                            </select>
                            @error('responsible_id')
                            <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Problem</label>
                            <select class="form-control" name="problem_id" id="problem_id">
                                <option value="">Выберите проблему</option>
                                @foreach($problems as $problem)
                                    <option value="{{ $problem->id }}">{{ $problem->title }}</option>
                                @endforeach
                            </select>
                            @error('problem_id')
                            <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deadline</label>
                            <input type="date" name="deadline" class="" placeholder="Deadline">
                            @error('deadline')
                            <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">VCB</label>
                            <select class="form-control" name="board_id" id="board_id">
                                <option value="">Выберите доску ДВУ</option>
                                @foreach($boards as $board)
                                    <option value="{{ $board->id }}">{{ $board->title }}</option>
                                @endforeach
                            </select>
                            @error('board_id')
                            <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="w-50">
                            <input type="submit" class="btn btn-block btn-primary" value="Add task">
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

@endsection
