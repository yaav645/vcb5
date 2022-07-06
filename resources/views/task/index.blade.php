@extends('layouts.layout')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Задачи</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
                        <li class="breadcrumb-item active">Задачи</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2 mb-3">
                    <a href="{{route('task.create')}}" class="btn btn-block btn-primary">Создать задачу</a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline">
                        <thead>
                        <tr align="center">
                            <th class="col-1">ID</th>
                            <th>Task</th>
                            <th class="col-1">Responsible</th>
                            <th class="col-1">Problem</th>
                            <th class="col-1">Deadline</th>
                            <th class="col-1">VCB</th>
                            <th class="col-1">Deadline shift</th>
                            <th class="col-1">Action</th>
                            <th class="col-1">Created at</th>
                            <th class="col-1">Updated at</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tasks as $task)
                            <tr class="odd">
                                <td align="center" class="dtr-control">{{$task->id}}</td>
                                <td>{{$task->title}}</td>
                                <td align="center">{{$task->responsible['name']}}</td>
                                <td align="center">{{$task->problem['title']}}</td>
                                <td align="center">{{ date('d.m.y', strtotime($task->deadline)) }}</td>
                                <td style="text-align:center">{{$task->board['title']}}</td>
                                <td style="text-align:center">{{$task->deadline_shift}}</td>

                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{route('task.show', $task->id)}}" class="mr-3">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{route('task.edit', $task->id)}}" class="mr-3 text-success">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{route('task.delete', $task->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="border-0 bg-transparent">
                                                <i class="fas fa-trash-alt text-danger" role="button"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                                <td align="center">{{$task->created_at}}</td>
                                <td align="center">{{$task->updated_at}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <div>
                        {{ $tasks->links() }}
                    </div>

                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
