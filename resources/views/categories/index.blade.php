@extends('layouts.app')

@section('content')

    <h3>Lista de categorias</h3> 

    <table class="table">
        <thead>
           <tr>
             <th>ID</th>
             <th>categoria</th>
             <th>Estado</th>
             <th>Acciones</th>    
            </tr> 
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->category_name}}</td>
                    <td> 
                        @if ($category->active) 
                            Activa
                        
                        @else 
                            Inactiva
                        @endif
                    </td>  
                    <td>
                       <a class="btn bnt-primary">Editar</a>
                       <a class="btn btn-primary">Eliminar</a>
                    </td>      
                </tr>     
            @endforeach   
        </tbody> 

@endsection