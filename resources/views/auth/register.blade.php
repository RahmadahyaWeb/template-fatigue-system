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
    @livewire('register', ['user_mail' => $user_mail, 'user_name' => $user_name])
</body>

</html>
