@extends('layouts.app')

@section('content')
<div class="editPlansBody">
    <a class="editPlansFormTitle">Editar Plano</a>

    @foreach ($plans as $plan)
        <form class="editPlansForm" method="POST" action="{{ route('plan.update') }}">
            @csrf
            <input hidden name="plan_id" value="{{ $plan->plan_id}} ">
            <input type="text" name="plan_name" id="plan_name" value="{{ $plan->plan_name }}">
            <input type="text" name="price" id="price" value="{{ $plan->price }}">
            <textarea type="text" name="description" id="Description"
                style="height:100px">{{ $plan->description }}</textarea>
            <input type="submit" value="Atualizar Plano">
        <form>

    @endforeach

</div>
@endsection