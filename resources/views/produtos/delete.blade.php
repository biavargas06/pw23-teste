@extends('includes.base')
 @section('title', 'Apagar')

@section('content')
<h2>Apagar produto</h2>
<p>Você está prestes a apagar {{ $prod->name }}.</p>
<p>Tem certeza de que quer fazer isso?</p>

<form action="{{ route('produtos.deleteForReal', $prod->id) }}" method="post"> @csrf
    @method('delete')

    <input type="submit" value="Pode apagar!">

</form>
@endsection
