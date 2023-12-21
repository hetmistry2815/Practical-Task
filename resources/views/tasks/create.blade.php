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
                    <div>Add-Tasks
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
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Add Tasks</h5>
                        <form method="POST" action="{{ route('tasks.store') }}">
                            @csrf
                            <div class="position-relative row form-group"><label for="title" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" id="title" name="title" required placeholder="Please Enter The Task Title" class="form-control">
                                </div>
                            </div>
                            <div class="position-relative row form-group"><label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea id="description" name="description" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="position-relative row form-group"><label for="due_date" class="col-sm-2 col-form-label">Date Of Joining</label>
                                <div class="col-sm-10">
                                    <input type="date" id="due_date" name="due_date" class="form-control" placeholder="Please Enter Due Date" required>
                                </div>
                            </div>
                            <div class="position-relative row form-check">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit"  class="btn btn-secondary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('extra-js')

@endsection
