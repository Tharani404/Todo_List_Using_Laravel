@extends('layout.app') {{-- 'app.blade.php' meke relative pth ek --}} 

@section('content') {{-- yield ek dapu name ek methn call krnw --}} 
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="title-page">Home Page</h1>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .title-page{
            padding-top: 7vh; {{-- vh means view height --}}
            font-size: 3rem;
            color: rgb(74, 194, 74);
        }
    </style>
@endpush