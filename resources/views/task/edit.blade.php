@extends('layouts.layout')

@section('content')

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit task</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit task</li>
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
                    <form action="{{route('task.update', $task->id)}}" method="POST" class="w-25">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label class="form-label">Task title</label>
                            <input type="text" name="title" class="form-control" value="{{$task->title}}">
                            @error('title')
                            <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Responsible</label>
                            <select class="form-control" name="responsible_id" id="responsible_id">
                                <option value="">Выберите исполнителя</option>
                                @foreach($users as $responsible)
                                    <option @if($responsible->id === $task->responsible_id) selected @endif value="{{ $responsible->id }}">{{ $responsible->name }}</option>
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
                                    <option @if($problem->id === $task->problem_id) selected @endif value="{{ $problem->id }}">{{ $problem->title }}</option>
                                @endforeach
                            </select>
                            @error('problem_id')
                            <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deadline</label>
                            <input type="date" name="deadline" class="" value="{{$task->deadline}}">
                            @error('deadline')
                            <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Смещение сроков</label>
                            <input type="number" name="deadline_shift" class="form-control" value="{{$task->deadline_shift}}">
                            @error('deadline_shift')
                            <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">VCB</label>
                            <select class="form-control" name="board_id" id="board_id">
                                <option value="">Выберите доску</option>
                                @foreach($boards as $board)
                                    <option @if($board->id === $task->board_id) selected @endif value="{{ $board->id }}">{{ $board->title }}</option>
                                @endforeach
                            </select>
                            @error('board_id')
                            <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>

                        <div class="col-4">
                            <input type="submit" class="btn btn-block btn-primary" value="Обновить">
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

@endsection
