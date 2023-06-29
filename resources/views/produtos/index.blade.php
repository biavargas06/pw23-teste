@extends('includes.base')

@section('title', 'Produtos')

@section('content')
 @if (session('sucesso'))
 <div style="background-color: #FC6C85; color:#9F2042">
{{session('sucesso')}}
</div>

 @endif

 <form action="{{ route('produtos') }}" method="post"> @csrf
      <input type="text" name="busca">
      <select name="ord">
          <option value="asc">Crescente</option>
          <option value="desc">Decrescente</option>
      </select>
      <input type="submit" value="Busca">
 </form>

<table border="1" style="border-color:#FC6C85">
    <tr style="color: #E75480">
        <th>Nome</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Editar</th>
        <th>Apagar</th>
    </tr>
    @foreach ($prods as $prod)
        <tr>
        <td> <a class="first-link" href="{{ route ('produtos.view', $prod->id) }}">{{$prod->name}}</a></td>
        <td>R${{ number_format($prod->price, 2, ',', '.')}}</td>
        <td>{{$prod->quantity}}</td>
        <td><a href="{{route('produtos.edit', $prod->id)}}">Edit</a></td>
        <td><a href="{{route('produtos.delete', $prod->id)}}">Apagar</a></td>
    </tr>
    @endforeach

</table>

{{ $prods->links('vendor.pagination.default') }}

<div class="button-container">
<a href="{{ route('produtos.add') }}">Adicionar produto</a>
</div>

@endsection

