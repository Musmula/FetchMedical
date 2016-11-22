@extends('app')

@section('head')

<style>
    table.table > tbody > tr > td, table.table > thead > tr > th {
        padding-left: 20px;
    }

    @media screen and (max-width: 425px) {
        .name {
            display: none;
        }
    }

    @media screen and (max-width: 375px) {
        .actions {
            display: none;
        }
    }
</style>

@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><h2>Users</h2></div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th class="name">Name</th>
                                <th class="email">Email</th>
                                <th class="actions">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td class="name">{{ $user->name }}</td>
                                    <td class="email"><a href="#linkToProfile">{{ $user->email }}</a></td>
                                    <td class="actions">
                                        <div class="btn-group">
                                            <button class="btn btn-default">
                                                <i class="fa fa-edit"></i>
                                            </button>

                                            <button class="btn btn-default">
                                                <i class="fa fa-eye"></i>
                                            </button>

                                            <button class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div> {{-- Panel end --}}

            <a class="btn btn-primary" href="#">
                <i class="fa fa-plus fa-btn"></i>
                Add
            </a>

        </div>
    </div>
</div>
@endsection
