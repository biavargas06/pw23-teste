@extends('includes.base')

@section('title', 'Produtos')

@section('content')

<table border="1" style="border-color:#FC6C85">
    <tr style="color: #E75480">
        <th>Nome</th>
        <th>Preço</th>
        <th>Quantidade</th>
    </tr>
    @foreach ($prods as $prod)
        <tr>
        <td>{{$prod->name}}</td>
        <td>R${{ number_format($prod->price, 2, ',', '.')}}</td>
        <td>{{$prod->quantity}}</td>
    </tr>
    @endforeach

</table>
<a href="{{ route('produtos.add') }}">Adicionar produto</a>

<style>
    table {
        border-collapse: collapse;
        width: 100%;
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

    a {
        display: inline-block;
        margin-top: 10px;
        padding: 10px;
        background-color: #FC6C85;
        color: white;
        text-decoration: none;
        border-radius: 4px;
    }

    a:hover {
        background-color: #E75480;
    }
</style>
@endsection

