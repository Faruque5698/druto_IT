@extends('AdminPanel.master')


@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        
        
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between">
                <div><i class="fas fa-table me-1"></i>
                Add Company
            </div>
                
            </div>
            <div class="card-body">
                <form action="{{route('company_update')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="col-12">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $com->name }}"  placeholder="Name">
                            <input type="hidden" class="form-control @error('name') is-invalid @enderror" name="id" value="{{ $com->id }}"  placeholder="Name">
                        </div>
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>
                        <div class="col-12">
                            <textarea type="description" class="form-control @error('description') is-invalid @enderror" name="description"  placeholder="description">{{ $com->description }}</textarea>
                        </div>
                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
             
                    <div class="col-2">
                        <input type="submit" class="form-control btn btn-primary" name="btn" id="btn" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>


@endsection
