@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="title-page">My Todo List</h1>
        </div>
   
        <div class="col-lg-12 mt-5">
            <form action= "{{ route('todo.store') }}" method="POST" enctype="multipart/form-data" {{-- enctype is want to upload an image --}}>
                @csrf {{-- secure wen ek wenne --}}
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <input class="form-control" type="text" name='title' placeholder="Enter you task" >
                        </div>
                    </div>
        
                    <div class="col-lg-4">
                        <button type="submit" class="btn btn-outline-primary"> Submit </button>
                    </div>
                </div>
            </form>
        </div>


        <div class="col-lg-12 mt-5  p-3 mb-2 bg-secondary text-white">
            <div class="">
                <table class="table table-striped">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Title</th>
                          <th scope="col">Status</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($tasks as $key => $task)
                        <tr>
                            <th scope="row"> {{ ++$key }}</th> {{-- ++$key = 1,2,..... $key++ = 0,1,2 --}}
                            <td> {{ $task->title }}</td>
                            <td> @if ($task->done == 0)
                                <span class="badge text-bg-warning"> Not Completed</span>
                            @else
                                <span class="badge text-bg-success">Completed</span>
                            @endif</td>

                            <td>
                                <a href="{{ route('todo.delete', $task->id) }}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                <a href="{{ route('todo.done', $task -> id) }}" class="btn btn-success"><i class="fa fa-check-circle" aria-hidden="true" aria-hidden="true"></i></a>
                                <a href="{{ route('todo.udone', $task -> id) }}" class="btn btn-warning"><i class="fa fa-exclamation-triangle" ></i></a>
                            </td>
                          </tr>
                        @endforeach
                        
                      </tbody>
                  </table>
            </div>
        </div>

    </div>
</div>

@endsection

@push('css')
    <style>
        .title-page{
            color: #ef8a06;
            font-size: 3rem;
            padding-top: 5vh;
        }
    </style>
@endpush