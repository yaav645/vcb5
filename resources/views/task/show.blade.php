@extends('layouts.layout')

@section('content')


        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Task</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Task</li>
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
                    <form action="{{route('task.store')}}" method="POST" class="w-25">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Наименование задачи</label>
                            <div>
                            {{$task->title}}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Заказчик</label>
                            <div>
                                {{$task->responsible_id}}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Проблема</label>
                            <div>
                                {{$task->problem_id}}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Срок решения</label>
                            <div>
                                {{$task->deadline}}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Смещения сроков</label>
                            <div>
                                {{$task->deadline_shift}}
                            </div>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <div class="col-2 mb-3">
                        <a href="{{route('task.edit', $task->id)}}" class="btn btn-block btn-primary">Редактировать</a>
                    </div>
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

@endsection
