@extends('layouts.layout')

@section('content')

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавить проблему</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('board.index') }}">Доски</a></li>
                            <li class="breadcrumb-item active">Добавить</li>
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
                            <input type="text" name="title" class="form-control" placeholder="Наименование проблемы">
                            @error('title')
                            <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Owner</label>
                            <select class="form-control" name="owner_id" id="owner_id">
                                <option value="">Выберите Заказчика</option>
                                @foreach($users as $owner)
                                    <option value="{{ $owner->id }}">{{ $owner->name }}</option>
                                @endforeach
                            </select>
                            @error('owner_id')
                            <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Срок выполнения</label>
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
                            <input type="submit" class="btn btn-block btn-primary" value="Добавить">
                        </div>
                    </form>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

@endsection
