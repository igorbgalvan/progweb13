@extends('layouts.app')

@section('content')
<div class="paymentBody">
    <a class="paymentTitle">Qual a forma de pagamento?</a>
    <div class="paymentFields">
        <form>
           <button class="selectPayment">
               <div class="boleto-payment">
                    <i class="fa fa-file-text-o"></i>
                    <p>Boleto</p>
               </div>
                
           </button>

           <button class="selectPayment" formaction="{{ route('card') }}">
                <div class="credit-card-payment">
                    <i class="fa fa-credit-card"></i>
                    <p>Cartão de Crédito</p>
                </div>
           </button>
       
            <!-- <input type=button class="selectPayment" value="Cartão >" formaction="{{ route('card') }}"> -->
            <div class="navegacao">
                <input type=submit class="voltar" value="Voltar" formaction="{{ route('address') }}">
            </div>
        </form>
    </div>
</div>
@endsection