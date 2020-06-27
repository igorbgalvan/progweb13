@extends('layouts.app')

@section('content')
<div class="body2">
    <a class="title10">Endereços</a>

    <div class="enderecosBoxesView">
        @foreach ($addresses as $address)
            
        
        <div class="boxEnderecoView">
            <div class="box-endereco-text-view">
                <a><?=strtoupper( $address->street). ", " . strtoupper($address->street_number) ?>
                    @if(isset($address->complement)) <br> {{ strtoupper($address->complement) }} @endif <?="<br>". strtoupper($address->city) . ', ' .  strtoupper($address->state) .  "<br>" .
                    strtoupper($address->country) ."<br>".  strtoupper($address->cep) ?></a>
            </div>
            <div class="actions">
                
                <form action="{{ route('address.edit') }}" method="POST">
                    @csrf
                    <input hidden name="address_id" value="{{ $address->address_id }}">
                    <input type="submit" class="atualizarEndereco" name="submit" value="Editar">
                </form>
                
                
                <form action="{{ route('address.destroy') }}" method="POST">
                    @csrf
                    <input hidden name="address_id" value="{{ $address->address_id }}">
                    <input type="submit" class="atualizarEndereco" name="submit" value="Deletar">
                </form>

            </div>
        </div>

        @endforeach
    </div>
    <div class="addAddressView">
        <a title="Mais" href="{{ route('address.create') }}"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a>
    </div>
    <img class= "generic-background" src="/img/generic-background.png" alt="Uma mão segurando uma camisinha embalada.">
</div>
@endsection