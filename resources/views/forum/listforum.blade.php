@extends('layout.app')
@section('content')

<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
       
        <tbody>
            <tr>
                <td>1</td>
                <td>abc</td>
                <td><a href="{{ action('ForumController@detailforum') }}"><span class="badge badge-primary">view</span></a> | <a onclick="return confirm('Are you sure you want to delete?')" href=""><span class="badge badge-danger">delete</span></a> </td>
            </tr>    
        </tbody>
       
    </table>
        </div>
    </div>
</div>
@endsection