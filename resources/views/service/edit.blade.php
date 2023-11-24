@extends('light.table')

@section('title')
Services Service
@endsection

@section('content')

<div class="row">
    <div class="d-flex justify-content-center card my-4 p-3">
        <div class="form-row d-flex justify-content-between">
            <h6 class="text-black text-capitalize ps-3">Update Service</h6>
            <a href="{{url('/serviceview')}}" style="color:white">
                <button class="btn btn-primary mr-3"> Back </button>
            </a>
        </div>
        <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <div class="container">
                                <form action="{{route('serviceupdate', ['id'=> $data->id])}}" method="post" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="container mt-4 card p-3 bg-white">
                                        <div class="form-group col-md-6 required" style="color: black">
                                            <label style="color:Black" for="image">Image</label>
                                            <input type="file" id="image" name="image" class="form-control border border-black border-2" value="{{$data->image??''}}">
                                            <span class="text-danger">
                                            </span>
                                        </div>
                                        <br>

                                        <div class="form-group col-md-6 required">
                                            <label style="color:Black" for="name">Title</label>
                                            <input type="text" id="title" name="title" class="form-control border border-black border-2" value="{{$data->title??''}}">
                                            <span class="text-danger">
                                            </span>
                                        </div>
                                        <br>

                                        <div class="form-group col-md-6 required" style="color: black">
                                            <label style="color:Black" for="position">Description</label>
                                            <input type="text" id="description" name="description" class="form-control border border-black border-2" value="{{$data->description??''}}">
                                            <span class="text-danger">
                                            </span>
                                        </div>
                                        <br>

                                        <div class="form-group col-md-6 required">
                                            <label for="status">Status:</label>
                                            <select id="status" name="status" class="form-control" value="{{$data->status??''}}">
                                                <option value="1" {{$data['status'] == "active" ? 'checked' : ''}}>Active</option>
                                                <option value="0" {{$data['status'] == "inactive" ? 'checked' : ''}}>Inactive</option>
                                            </select>
                                            <span class="text-danger">
                                            </span>
                                        </div>
                                        <div>
                                            <input class="btn btn-primary ml-2" type="submit" value="Submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection