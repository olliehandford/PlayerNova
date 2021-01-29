@extends('layouts.dashboard')

@section('dashboard_content')
<section>
        <nav class="breadcrumb" aria-label="breadcrumbs">
                <ul>
                    <li><a href="/">PlayerNova</a></li>
                    <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('user.dashboard') }}">{{ $team->name }}</a></li>
                    <li class="is-active"><a href="{{ route('user.dashboard') }}">{{ $server->friendly_name }}</a></li>
                </ul>
            </nav>
            {{ $server }}
@endsection
