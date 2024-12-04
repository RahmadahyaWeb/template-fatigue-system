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

    <button id="open-modal-btn" class="btn btn-confirm">Open Modal</button>
    
    <!-- Modal -->
    <div id="custom-modal" class="modal hidden">
        <div class="modal__content card">
            <div class="modal__header">
                <h2 class="card__title">Modal Title</h2>
                <button class="modal__close" aria-label="Close modal">&times;</button>
            </div>
            <div class="modal__body">
                <p class="card__content">This is the content of the modal. You can add any information or form here.</p>
            </div>
        </div>
    </div>

@endsection
