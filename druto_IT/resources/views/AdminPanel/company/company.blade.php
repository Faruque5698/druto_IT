@extends('AdminPanel.master')

@section('title')

Company

@endsection

@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Company</li>
        </ol>
        @if(Session::get('message'))

        <div class="alert alert-success">
            <strong>Success!</strong>{{ Session::get('message') }}.
          </div>
                @endif
        
        
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between">
                <div><i class="fas fa-table me-1"></i>
                Company
            </div>
                <a href="{{ route('add_company') }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>description</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($company as $c )
                            
                        
                        <tr>
                            <td>{{ $c->name }}</td>
                            <td>{{ $c->description }}</td>
                           <td>
                               <a href="{{ route('edit_company',['id'=>$c->id]) }}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                                {{-- <a href="" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-danger" ><i class="fa fa-trash"></i></a>   </td>  --}}
                        </tr> 
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>description</th>
                            <th>action</th>
                        </tr>
                        </tfoot>
                </table>
            </div>
        </div>
    </div>
</main>


@endsection
