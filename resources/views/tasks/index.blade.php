@extends('layouts.app')

@section('main-contents')

    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-medal icon-gradient bg-tempting-azure">
                        </i>
                    </div>
                    <div>Tasks
                    </div>
                </div>
                <div class="page-title-actions">
                    <div class="d-inline-block dropdown">
                        <a href="{{ route('tasks.create') }}" aria-haspopup="true" aria-expanded="false" class="btn-shadow btn btn-info">
                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                            <i class="fa fa-plus fa-w-20"></i>
                                        </span>
                            Add Task
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>
                            <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dropdown-toggle btn btn-primary">Action</button>
                            <div role="menu" aria-hidden="true" class="dropdown-menu"><h6 class="dropdown-header">Action</h6>
                                <a href="{{ route('tasks.show', $task->id) }}" class="dropdown-item">Show</a>
                                <a href="{{ route('tasks.edit', $task->id) }}" class="dropdown-item">Edit</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('extra-js')

@endsection
