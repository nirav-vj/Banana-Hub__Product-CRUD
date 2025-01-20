<!DOCTYPE html>
<!-- Source Codes By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Ragister Form</title>
    <link rel="icon" type="image"
        href="https://icons.iconarchive.com/icons/alecive/flatwoken/512/Apps-Google-Drive-Forms-icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Montserrat", sans-serif;
        }

        body {
            width: 100%;
            min-height: 100vh;
            padding: 0 10px;
            display: flex;
            background: linear-gradient(120deg, #4bb9fd, #fd9b9b);
            justify-content: center;
            align-items: center;
        }

        /* Login form styling */
        .login_form {
            width: 100%;
            max-width: 435px;
            background: linear-gradient(120deg, #abddfc, #f7c3c3);
            border-radius: 6px;
            padding: 41px 30px;
            box-shadow: 0 50px 50px rgba(0, 0, 0, 0.20);
        }

        .login_form h3 {
            font-size: 30px;
            text-align: center;
        }

        /* Input field styling */
        form .input_box input {
            width: 100%;
            height: 57px;
            border: 1px solid #DADAF2;
            border-radius: 5px;
            outline: none;
            background: #F8F8FB;
            font-size: 17px;
            padding: 0px 20px;
            margin-bottom: 25px;
            transition: 0.2s ease;

        }

        a:hover {
            text-decoration: underline;
        }

        /* Login button styling */
        form button {
            width: 100%;
            height: 56px;
            border-radius: 5px;
            border: none;
            outline: none;
            background: #626CD6;
            color: #fff;
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 28px;
        }

        form button:hover {
            background: #4954D0;
            color: black;
        }
    </style>
</head>

<body>
    <div class="login_form">
        <form action="{{ url('/password/update') }}" method="post">
            @csrf
            <h3>Update Password</h3><br><br>
            <div class="input_box">
                <label for="password">Curent Password</label>
                <input type="password" placeholder="Curent Password" name="password">
            </div>
            <div class="input_box">
                <label for="new_password">New Password</label>
                <input type="password" name="new_password" id="new-password" placeholder="New Password">
            </div>
            <div class="input_box">
                <div>
                    <label for="password_confirmation">Password Confirmation</label>
                </div class="password">
                <input type="password" name="password_confirmation" id="confirmation-password"
                    placeholder="Password Confirmation">
            </div><br>
            <button type="submit">Submit</button>
            {{--  <p class="sign_up"> Don`t have an account? <a href="{{url('/home')}}">Sign up</a></p>  --}}
        </form>
    </div>
</body>

</html>
