@extends('layouts.app')

@section('header')
    <div class="container">
        <h2 class="font-weight-bold text-xl text-dark">
            {{ __('Dashboard') }}
        </h2>
    </div>
@endsection

@section('content')
    <div class="py-5">
        <div class="container">
            <div class="card shadow-sm">
                <div class="card-body">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
@endsection
