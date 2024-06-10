@extends('layout.mainAdmin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Comments</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Post</th>
                            <th>User</th>
                            <th>Comment</th>
                            <th>Created At</th>
                            <th>Actions</th>
                            </tr>
                    </thead>

                </table>
        </div>
    </div>
</div>                           
@endsection