@extends('layouts.master')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#!">Drixo</a></li>
                        <li class="breadcrumb-item active">Tags</li>
                    </ol>
                </div>
                <h5 class="page-title">Tags</h5>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="mb-4">
                                    <span class="badge badge-default"> Add Tag </span>
                                </h2>
                                @include('components.alert')
                                {{-- <div class="alert alert-danger mb-2" role="alert">
                                    <strong>Error:</strong>
                                    and try submitting
                                    again. 2222
                                </div> --}}
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="d-block">Name</label>
                                        <input class="form-control" type="text"  placeholder="Name Tag..."
                                            name="nameTag">
                                    </div> 
                                    {{-- <div class="form-group">
                                        <label class="d-block">Image</label>
                                        <input type="file" name="image" accept="image/*">
                                    </div> --}}
                                    <button name="btn-add" type="submit" class="btn btn-success waves-effect waves-light float-right">
                                        Add
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <h2 class="mb-4">
                                    <span class="badge badge-default"> Tags </span>
                                </h2>

                                {{-- <div class="alert alert-success mb-4" role="alert">
                                    <strong>Success:</strong>
                                    and try submitting
                                    again.
                                </div> --}}
                                <div class="d-flex justify-content-between mb-4" style="width: 100%">
                                    <div>
                                        <a href="/admin/tags/list-hide" class="btn btn-danger mo-mb-2" data-toggle="tooltip"
                                            data-placement="left" title=""
                                            data-original-title="List Tags Hiden">
                                            <i class="mdi mdi-playlist-remove"></i>
                                        </a>
                                    </div>
                                    @include('components.table.search')
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                {{-- <th>Image</th> --}}
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-group-divider">
                                            @foreach ($data as $item)
                                            <tr>
                                                    
                                                <td scope="row">{{$item['id']}}</td>
                                                <td>{{$item['nameTag']}}</td>
                                                {{-- <td>
                                                    <img src="/assets/uploads/gir2.jpg" alt="" width="80"
                                                        height="80"
                                                        style=" object-fit: cover;
                                                                border-radius: 4px;
                                                                box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.2);
                                                              ">
                                                </td> --}}
                                                <td>
                                                    <a 
                                                        href="/admin/tags/edit/{{$item['id']}}"
                                                        class="btn btn-warning waves-effect waves-light"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""
                                                        data-original-title="Edit"
                                                    >
                                                        <i class="ion-edit"></i>
                                                    </a>

                                                    <a  href='/admin/tags/hide/{{$item['id']}}'
                                                        class='btn btn-danger waves-effect waves-light'
                                                        data-toggle='tooltip'
                                                        data-placement='top'
                                                        title=''
                                                        data-original-title='Hide'
                                                        onclick="return confirm('Hide ??')"
                                                    >
                                                        <i class="mdi mdi-eye-off"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="mt-4 d-flex justify-content-between">
                                    @include('components.table.show-row')
                                    @include('components.table.pagination')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
