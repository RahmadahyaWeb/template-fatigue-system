@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-4 mb-3">
            <div class="card">
                <h2 class="card__title">Card 1</h2>
                <p class="card__content">Content for card 1</p>
            </div>
        </div>

        <div class="col-4 mb-3">
            <div class="card">
                <h2 class="card__title">Card 2</h2>
                <p class="card__content">Content for card 2</p>
            </div>
        </div>

        <div class="col-4 mb-3">
            <div class="card">
                <h2 class="card__title">Card 3</h2>
                <p class="card__content">Content for card 3</p>
            </div>
        </div>
    </div>
@endsection
