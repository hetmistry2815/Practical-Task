@extends('layouts.app')

@section('main-contents')

    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-graph text-success">
                        </i>
                    </div>
                    <div>Show-Tasks
                    </div>
                </div>
                <div class="page-title-actions">
                    <div class="d-inline-block dropdown">
                        <a href="{{ route('tasks.index') }}" aria-haspopup="true" aria-expanded="false" class="btn-shadow btn btn-info">
                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                            <i class="fa fa-user fa-w-20"></i>
                                        </span>
                            Tasks
                        </a>
                    </div>
                </div>    </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="media flex-wrap w-100 align-items-center">
                            <div class="media-body ml-3">
                                <a href="javascript:void(0)">{{ $task->title }}</a>
                            </div>
                            <div class="text-muted small ml-3">
                                <div>Due Date.: <strong>{{ date('d-M-Y',strtotime($task->due_date)) }}</strong></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p>
                            {{ $task->description }}
                        </p>
                    </div>
                    <div class="card-footer d-flex flex-wrap justify-content-between align-items-center px-0 pt-0 pb-3">
                        <div class="px-4 pt-3">

                            <form method="POST" action="{{ route('tasks.destroy', $task->id) }}" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this task?')">Delete</button>
                            </form>
                        </div>
                        <div class="px-4 pt-3">
                            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">
                                <i class="ion ion-md-create"></i>&nbsp; Edit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('extra-js')

@endsection
