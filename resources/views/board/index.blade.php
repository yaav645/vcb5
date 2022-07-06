@extends('layouts.layout')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Доски визуального управления</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
                        <li class="breadcrumb-item active">ДВУ</li>
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
                    <a href="{{route('board.create')}}" class="btn btn-block btn-primary">Создать доску</a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline">
                        <thead>
                        <tr align="center">
                            <th class="col-1">ID</th>
                            <th>VCBoard</th>
                            <th class="col-1">Company</th>
                            <th class="col-1">Admin</th>
                            <th class="col-1">Level</th>
                            <th class="col-1">Action</th>
                            <th class="col-1">Created at</th>
                            <th class="col-1">Updated at</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($boards as $board)
                            <tr class="odd">
                                <td align="center" class="dtr-control">{{$board->id}}</td>
                                <td>{{$board->title}}</td>
                                <td style="text-align:center">{{$board->company['title']}}</td>
                                <td style="text-align:center">{{$board->admin['name']}}</td>
                                <td style="text-align:center">{{$board->board_level}}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{route('board.show', $board->id)}}" class="mr-3">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{route('board.edit', $board->id)}}" class="mr-3 text-success">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{route('board.delete', $board->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="border-0 bg-transparent">
                                                <i class="fas fa-trash-alt text-danger" role="button"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                                <td align="center">{{$board->created_at}}</td>
                                <td align="center">{{$board->updated_at}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <div>
                        {{ $boards->links() }}
                    </div>

                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
