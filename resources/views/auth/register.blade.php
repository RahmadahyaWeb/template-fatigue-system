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
                            <h3 class="text-center">Create your account!</h3>
                            <hr class="my-5" />

                            <form action="{{ route('register') }}" method="POST">
                                <div class="row mb-3">
                                    @csrf
                                    <input type="hidden" name="user_mail" value={{ $user_mail }}>
                                    <input type="hidden" name="user_name" value={{ $user_name }}>
                                    <div class="col-12 mb-3">
                                        <label for="number">Phone Number</label>
                                        <input type="number" id="number" name="number"
                                            placeholder="Phone Number" />
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="address">Address</label>
                                        <input type="text" id="address" name="address" placeholder="Address" />

                                    </div>
                                    <div class="col-12 mt-3" style="display: grid">
                                        <button class="btn btn-primary" type="submit">Register</button>
                                    </div>
                                </div>
                            </form>
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
