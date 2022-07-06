@extends('layouts.layout')

@section('content')

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit problem</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit problem</li>
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
                    <form action="{{route('problem.update', $problem->id)}}" method="POST" class="w-25">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label class="form-label">Problem title</label>
                            <input type="text" name="title" class="form-control" value="{{$problem->title}}">
                            @error('title')
                            <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Owner</label>
                            <select class="form-control" name="owner_id" id="owner_id">
                                <option value="">Выберите Заказчика</option>
                                @foreach($users as $owner)
                                    <option @if($owner->id === $problem->owner_id) selected @endif value="{{ $owner->id }}">{{ $owner->name }}</option>
                                @endforeach
                            </select>
                            @error('owner_id')
                            <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Срок выполнения</label>
                            <input type="date" name="deadline" class="" value="{{$problem->deadline}}">
                            @error('deadline')
                            <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Смещение сроков</label>
                            <input type="number" name="deadline_shift" class="form-control" value="{{$problem->deadline_shift}}">
                            @error('deadline_shift')
                            <div class="text-danger"><strong>{{ $message }}</strong></div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">VCB</label>
                            <select class="form-control" name="board_id" id="board_id">
                                <option value="">Выберите доску</option>
                                @foreach($boards as $board)
                                    <option @if($board->id === $problem->board_id) selected @endif value="{{ $board->id }}">{{ $board->title }}</option>
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
