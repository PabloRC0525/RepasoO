@extends('layouts.plantilla')
@section('titulo','Registro')
@section('contenido')
<h1 class="display-1 text-center text-danger mt-5">Registro de Libros</h1>
<div class="container"> 
    <div class="card text-center">
      @if(session()->has('confirmación'))
      <script>
          Swal.fire({
              icon: 'success',
              title: 'Confirmación',
              text: '{{ session('confirmación') }}',
          });
      </script>
      @endif
      @if($errors->any())
      @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>{{$error}}</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </div>
      @endforeach
      @endif
        <div class="card-header text-primary fs-4 fw-semibold text-center">
            Introduce los datos del libro:
        </div>

        <div class="card-body">
          <form method="POST" action="/guardarRecuerdo">
            @csrf 
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">ISBN:</label>
              <input type="text" name="txtISBN" class="form-control" value="{{old('txtISBN')}}">
              <p class="text-danger fst-italic">{{$errors->first('txtISBN')}}</p>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Titulo:</label>
                <input type="text" name="txtTitulo" class="form-control" value="{{old('txtTitulo')}}">
                <p class="text-danger fst-italic">{{$errors->first('txtTitulo')}}</p>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Autor:</label>
                <input type="text" name="txtAutor" class="form-control" value="{{old('txtAutor')}}">
                <p class="text-danger fst-italic">{{$errors->first('txtAutor')}}</p>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Páginas:</label>
                <input type="text" name="txtPag" class="form-control" value="{{old('txtPag')}}">
                <p class="text-danger fst-italic">{{$errors->first('txtPag')}}</p>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Editorial:</label>
                <input type="text" name="txtEditorial" class="form-control" value="{{old('txtEditorial')}}">
                <p class="text-danger fst-italic">{{$errors->first('txtEditorial')}}</p>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email editorial:</label>
                <input type="text" name="txtEmail" class="form-control" value="{{old('txtEmail')}}">
                <p class="text-danger fst-italic">{{$errors->first('txtEmail')}}</p>
              </div>
                <div class="col-auto">
                  
        </div>

        <div class="card-footer text-body-secondary">
            <button type="submit" class="btn btn-primary mb-3">Guardar Libro</button>
                </div>
              </form>
        </div>
    </div>
</div>
@endsection