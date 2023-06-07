@extends('includes.base')

@section('title', 'Produtos - Adicionar')

@section('content')
    <h2>Adicione seu produto</h2>

   <form action="{{ url()->current() }}" method="post">

    @csrf
          <input type="text" name="name" placeholder="Nome do produto" value="{{ old ('name', $prod->name ?? '')}}"><br>
          <input type="number" name="price" step="0.01" placeholder="Preço" min="0" value="{{ old ('name', $prod->price ?? '')}}"><br>
          <input type="number" name="quantity" placeholder="Quantidade" min="0" value="{{ old ('name', $prod->quantity ?? '')}}">
          <hr>
          <input type="submit" value="Gravar">
   </form>

@if ($errors)
<div class="error-message">
@foreach ( $errors->all() as $err)
{{ $err }} <br>
@endforeach
</div>
@endif

   <style>
    h2 {
        color: #E75480;
        text-align: center;
    }

    form {
        margin-top: 20px;
        padding: 20px;
        border: 1px solid #FC6C85;
        border-radius: 4px;
        margin: 0 auto;
        width: 40%; /
        max-width: 400px;
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
    .error-message {
            color: red;
            margin-bottom: 10px;
            text-align: center;
            padding: 10px;

        }
</style>
@endsection
