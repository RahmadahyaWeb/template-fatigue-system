<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css" />

    <title>Login</title>
</head>

<body>
    <main>
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center" style="min-height: 100vh">
                <div class="col-4">
                    <div class="card">
                        <div class="card__content">
                            <h2>YOUT SYSTEM NAME</h2>
                            <p>Please login to your account and get started!</p>
                            <hr class="my-5" />

                            <form action="{{ route('login') }}" method="POST">
                                <div class="row mb-3">
                                    @csrf
                                    <div class="col-12 mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" id="email"
                                            class="@error('email') is-invalid @enderror" name="email"
                                            placeholder="Email" value="{{ old('email') }}" />

                                        @error('email')
                                            <div>
                                                <small class="error-text">{{ $message }}</small>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="password">Password</label>
                                        <input type="password" id="password" name="password"
                                            class="@error('password') is-invalid @enderror" placeholder="Password" />

                                        @error('password')
                                            <div>
                                                <small class="error-text">{{ $message }}</small>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-12 mt-3" style="display: grid">
                                        <button class="btn btn-primary">Login</button>
                                    </div>
                                </div>
                            </form>

                            <div class="row">
                                <div class="col-12" style="display: grid;">
                                    <button type="button" class="btn btn-outline">
                                        <i class="ri-google-fill"></i>
                                        Login with Google
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-12 text-center">
                            <p>Powered by <br> <b><i>Fatigue System</i></b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
