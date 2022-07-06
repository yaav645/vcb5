@extends('layouts.layout')

@section('content')

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Проблемы</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('board.index') }}">Доски</a></li>
                            <li class="breadcrumb-item active">Подробно</li>
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
                    <form action="{{route('problem.store')}}" method="POST" class="w-25">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Наименование проблемы</label>
                            <div>
                            {{$problem->title}}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Заказчик</label>
                            <div>
                            {{$problem->owner_id}}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Срок решения</label>
                            <div>
                            {{$problem->deadline}}
                            </div>
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Доска ДВУ</label>
                            <div>
                            {{$problem->board_id}}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Смещения сроков</label>
                            <div>
                            {{$problem->deadline_shift}}
                            </div>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <div class="col-2 mb-3">
                        <a href="{{route('problem.edit', $problem->id)}}" class="btn btn-block btn-primary">Редактировать</a>
                    </div>
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

@endsection
