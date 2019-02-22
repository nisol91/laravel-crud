@extends('app');
@section('title')
    {{ $title }}
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Laravel Crud</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <ul>
                @foreach ($montagne as $montagna)
                <li>
                    <h2>
                        Nome: {{ $montagna['Nome'] }},
                        Nazione: {{ $montagna['Nazione'] }},
                        Altitudine: {{ $montagna->Altitudine }} m,
                        {{-- posso usare entrmbe le notazioni -> o [] --}}
                    </h2>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection



