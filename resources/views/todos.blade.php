@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body" id="add">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New todo Form -->
        <form action="{{ url('todo') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- todo name -->
            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Todo Name</label>

                <div class="col-sm-4">
                    <input type="text" name="name" id="todo-name" class="form-control">
                </div>
            </div>

            <!-- todo description -->
            <div class="form-group">
                <label for="description" class="col-sm-3 control-label">Description</label>

                <div class="col-sm-6">
                    <input type="textarea" name="description" id="todo-description" class="form-control">
                </div>
            </div>

            <!-- Add Todo Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Todo
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Current todos -->
    @if (count($todos) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Things to do
            </div>

            <div class="panel-body">
                <table class="table table-striped todo-table table-hover">

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($todos as $todo)
                            <tr>
                                <!-- todo Name -->
                                <td class="table-text">
                                    <div>{{ $todo->name }}</div>
                                </td>

                                <td>
                                   <!-- SHOW Button -->
                                    <td>
                                        <form action="{{ url('todo/'.$todo->id) }}" method="GET">
<!--                                            {{ csrf_field() }}-->
<!--                                            {{ method_field('SHOW') }}-->

                                            <button type="submit" class="btn btn-secondary">
                                                <i class="fa fa-trash"></i> Show
                                            </button>
                                        </form>
                                    </td>
                                    <!-- Delete Button -->
                                    <td>
                                        <form action="{{ url('todo/'.$todo->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" class="btn btn-secondary btn-delete">
                                                <i class="fa fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
