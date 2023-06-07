@extends('includes.base')

@section('title', 'Produtos')

@section('content')
 @if (session('sucesso'))
 <div style="background-color: #FC6C85; color:#9F2042">
{{session('sucesso')}}
</div>

 @endif
<table border="1" style="border-color:#FC6C85">
    <tr style="color: #E75480">
        <th>Nome</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Editar</th>
    </tr>
    @foreach ($prods as $prod)
        <tr>
        <td> <a class="first-link" href="{{ route ('produtos.view', $prod->id) }}">{{$prod->name}}</a></td>
        <td>R${{ number_format($prod->price, 2, ',', '.')}}</td>
        <td>{{$prod->quantity}}</td>
        <td><a href="{{route('produtos.edit', $prod->id)}}">edit</a></td>
    </tr>
    @endforeach

</table>
<div class="button-container">
<a href="{{ route('produtos.add') }}">Adicionar produto</a>
</div>

<style>
    table {
        border-collapse: collapse;
        margin: 0 auto;
        width: 80%;
        max-width: 800px;
        text-align: center;
    }

    table th,
    table td {
        padding: 8px;
        text-align: center;
    }

    table th {
        background-color: #E75480;
        color: white;
    }

    table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .button-container {
        display: flex;
        justify-content: center;
        margin-top: 10px;
    }

    .button-container a {
        display: inline-block;
        padding: 10px;
        background-color: #FC6C85;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        width: 100%;
        max-width: 785px;
        text-align: center;
    }

    .button-container a:hover {
        background-color: #E75480;
        cursor: pointer;
    }

    .first-link {
        color:#E75480;
    }

    .first-link:hover {
        color:  #9F2042;

</style>
@endsection

