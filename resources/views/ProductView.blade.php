@extends('layouts.app')

@section('content')
    <div class="col-lg-7 mx-auto">
        <div class="card border-0 shadow">
            <div class="card-body p-5">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8"></div>
                        <div class="col-sm-4">
                            <button type="button" id="btnAddNew" class="btn btn-info add-new addNew"><i class="fa fa-plus"></i> Add New</button>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered" id="productList">
                    <thead>
                    <tr>
                        <th scope="col">ListOrder</th>
                        <th scope="col">ProductCode</th>
                        <th scope="col">ProductName</th>
                        <th scope="col">ProductType</th>
                        <th scope="col">UseFlag</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody class="tblDataProduct">
                        <tr style="display: none">
                            <td class="clone">
                                <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                                <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                            </td>
                        </tr>
{{--                    @foreach ($data as $dataItm)--}}
{{--                        <tr>--}}
{{--                            <td class="listOrder">{{$dataItm->listorder}}</td>--}}
{{--                            <td class="productCode">{{$dataItm->productcode}}</td>--}}
{{--                            <td class="productName">{{$dataItm->productname}}</td>--}}
{{--                            <td class="productType">{{$dataItm->producttype}}</td>--}}
{{--                            <td class="userFlag"><input type="text"  aria-label="Text input with radio button" id="useflag" value="{{$dataItm->useflag}}"></td>--}}
{{--                            <td>--}}
{{--                                <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>--}}
{{--                                <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>--}}
{{--                                <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="./jquery.min.js"></script>
    <script src="{{ asset('js/product.js') }}"></script>
    <link href="/css/product.css" rel="stylesheet">
@stop

