@extends('layouts.app')

@section('content')
    <h1>Sidebar Menu</h1>

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

    <div class="card mb-3">
        <div class="card__title">User Information</div>
        <div class="card__content">
            <div class="table-wrapper">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>johndoe@example.com</td>
                            <td>Admin</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jane Smith</td>
                            <td>janesmith@example.com</td>
                            <td>User</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Sam Wilson</td>
                            <td>samwilson@example.com</td>
                            <td>Editor</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card__footer">
            <div class="pagination">
                <button class="pagination__button pagination__prev">Prev</button>
                <button class="pagination__button pagination__next">Next</button>
            </div>
        </div>
    </div>

    <div class="card my-3">
        <div class="card__title">BUTTONS</div>
        <div class="card__content">
            <button class="btn btn-primary mb-3" onclick="showToast('Toast')">
                Toast
            </button>
            <button class="btn btn-primary mb-3" onclick="showToast('Toast')">
                Toast
            </button>
            <button class="btn btn-primary mb-3" onclick="showToast('Toast')">
                Toast
            </button>
        </div>
    </div>

    <div class="card my-3">
        <div class="row">
            <div class="col-6">
                <label for="">Username</label>
                <input type="text" placeholder="Username">
            </div>
            <div class="col-6">
                <label for="">Password</label>
                <input type="password" placeholder="Password">
            </div>
            <div class="col-12 mt-3 d-flex justify-content-end">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
@endsection
