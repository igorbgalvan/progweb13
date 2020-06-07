@extends('layouts.app')

@section('content')
<div class="container-body-all">
    <div class="boxes">
        <div class="left-box-blured">
            <div class="box-title">
                <span>Contato</span>
            </div>

            <div class="box-message-contact">
                <span>Telefone: 0800-SE-PRESERVE<br><br><br>E-mail: preserve@preserve.com</span>
            </div>

        </div>
        <div class="right-box-blured">
            <div class="box-title">
                <span>Fale Conosco</span>
            </div>

            <div class="container">
                <from>
                    <input type="text" id="email" name="email" placeholder="Seu E-mail">

                    <textarea id="subject" name="subject" placeholder="Sua Mensagem" style="height:100px"></textarea>

                    <input type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection