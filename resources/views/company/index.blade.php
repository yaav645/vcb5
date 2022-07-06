@extends('layouts.layout')

@section('content')


    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Компании</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href=" {{ route('main.index') }}">Главная</a></li>
                        <li class="breadcrumb-item active">Компании</li>
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
                    <a href="{{route('company.create')}}" class="btn btn-block btn-primary">Создать компанию</a>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline">
                        <thead>
                        <tr align="center">
                            <th class="col-1">ID</th>
                            <th>Company</th>
                            <th>Description</th>
                            <th>Администратор</th>
                            <th class="col-1">Action</th>
                            <th class="col-1">Created at</th>
                            <th class="col-1">Updated at</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($companies as $company)
                            <tr class="odd">
                                <td align="center" class="dtr-control">{{$company->id}}</td>
                                <td>{{$company->title}}</td>
                                <td>{{$company->description}}</td>
                                <td align="center">{{$company->admin['name']}}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{route('company.show', $company->id)}}" class="mr-3">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{route('company.edit', $company->id)}}" class="mr-3 text-success">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{route('company.delete', $company->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="border-0 bg-transparent">
                                                <i class="fas fa-trash-alt text-danger" role="button"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                                <td align="center">{{$company->created_at}}</td>
                                <td align="center">{{$company->updated_at}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                    <div>
                        {{ $companies->links() }}
                    </div>

                </div>
            </div>
        </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->
@endsection
