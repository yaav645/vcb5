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
                        <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
                        <li class="breadcrumb-item active">Проблемы</li>
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
                    <a href="{{route('problem.create')}}" class="btn btn-block btn-primary">Добавить проблему</a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline">
                        <thead>
                        <tr align="center">
                            <th class="col-1">ID</th>
                            <th>Problem</th>
                            <th class="col-1">Owner</th>
                            <th class="col-1">Deadline</th>
                            <th class="col-1">VCB</th>
                            <th class="col-1">Deadline shift</th>
                            <th class="col-1">Action</th>
                            <th class="col-1">Created at</th>
                            <th class="col-1">Updated at</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($problems as $problem)
                            <tr class="odd">
                                <td style="text-align:center" class="dtr-control">{{$problem->id}}</td>
                                <td>{{$problem->title}}</td>
                                <td style="text-align:center">{{$problem->owner['name']}}</td>
                                <td style="text-align:center">{{  date('d.m.y', strtotime($problem->deadline)) }}</td>
                                <td style="text-align:center">{{$problem->board['title']}}</td>
                                <td style="text-align:center">{{$problem->deadline_shift}}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{route('problem.show', $problem->id)}}" class="mr-3">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{route('problem.edit', $problem->id)}}" class="mr-3 text-success">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{route('problem.delete', $problem->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="border-0 bg-transparent">
                                                <i class="fas fa-trash-alt text-danger" role="button"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                                <td align="center">{{$problem->created_at}}</td>
                                <td align="center">{{$problem->updated_at}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <div>
                        {{ $problems->links() }}
                    </div>

                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
