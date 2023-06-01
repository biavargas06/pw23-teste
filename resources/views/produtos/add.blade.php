@extends('includes.base')

@section('title', 'Produtos - Adicionar')

@section('content')
    <h2>Adicione seu produto</h2>

@if ($errors)
@foreach ( $errors->all() as $err)
{{ $err }} <br>
@endforeach
@endif

   <form action="{{ route('produtos.addSave') }}" method="post"> @csrf
          <input type="text" name="name" placeholder="Nome do produto"><br>
          <input type="number" name="price" step="0.01" placeholder="Preço" min="0"><br>
          <input type="number" name="quantity" placeholder="Quantidade" min="0">
          <hr>
          <input type="submit" value="Gravar">
   </form>

   <style>
    h2 {
        color: #E75480;
    }

    form {
        margin-top: 20px;
        padding: 20px;
        border: 1px solid #FC6C85;
        border-radius: 4px;
    }

    form input[type="text"],
    form input[type="number"],
    form input[type="submit"] {
        display: block;
        margin-bottom: 10px;
        padding: 8px;
        width: 100%;
        border: 1px solid #E75480;
        border-radius: 4px;
    }

    form input[type="submit"] {
        background-color: #FC6C85;
        color: white;
        cursor: pointer;
    }

    form input[type="submit"]:hover {
        background-color: #E75480;
    }
</style>
@endsection
