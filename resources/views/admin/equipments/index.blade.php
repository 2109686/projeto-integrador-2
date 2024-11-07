@extends('admin.layouts.app')

@section('title', 'Fórum')

<div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Voltar para o menu principal') }}
    </x-nav-link>
    <x-nav-link :href="route('equipments.new')" :active="request()->routeIs('equipments.new')">
        {{ __('Adicionar registro') }}
    </x-nav-link>
</div>

{{-- @section('header')
    @include('admin.services.partials.header', compact('services'))
@endsection --}}

@section('content')
    <!--
        Essa forma a blade dá um echo.
        \{\!\! $services \!\!\}
        Usar com cuidado pois essa forma não previne ataques do tipo xss

        A forma mais segura é utilizando \{\{ $services \}\}
    -->

    @include('admin.equipments.partials.content')

    {{-- <x-pagination :paginator="$services" :appends="$filters" /> --}}
@endsection
