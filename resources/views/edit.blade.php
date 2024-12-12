<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Form</title>
    <link rel="icon" type="image"
        href="https://icons.iconarchive.com/icons/alecive/flatwoken/512/Apps-Google-Drive-Forms-icon.png">
    <style>
        body {
            background: linear-gradient(120deg, #7eccfd, #ff9292);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            position: relative;
            width: 62%;
            height: 70%;
            background: linear-gradient(120deg, #c4e6fc, #f8d1d1da);
            border-radius: 50px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            padding-left: 150px;
            box-shadow: 40px 40px 40px rgba(10, 10, 10, 0.3);
        }

        .logo {
            position: absolute;
            left: 40px;
            top: 50%;
            transform: translateY(-50%);
            height: 600px;
            /* background-color: rgba(119, 136, 153, 0.128); */
            border-radius: 100px;
        }

        .heding {
            color: #018C43;
            margin-left: 570px;
            font: italic small-caps bold 35px/20px Georgia, serif;
            /* margin-bottom: 50px; */
            /* border-bottom: 2px solid; */
        }

        .form-group {
            margin-left: 500px;
            margin-top: -10px;
            margin-bottom: 0px;
            font: italic small-caps bold 20px/20px Georgia, serif;
        }

        .day {
            color: white;
            font: italic small-caps bold 20px/20px Georgia, serif;
        }

        .day:hover {
            color: black;
        }

        .input.typ.checkbox {
            border: 5px solid #018C43;
        }
    </style>
</head>

<body>
    <div class="container" style="display: flex;">
        <div>
            <img class="logo"
                src="https://www.beyondsnack.in/cdn/shop/files/Copy_of_Combo_6_Yellow_Border.jpg?v=1718276058&width=1000"
                alt="Laravel Logo">
        </div>
        <div>
            {{--  {{print_r($errors)}}  --}}
            <form action="/home/update/{{ $data->id }}" enctype="multipart/form-data" method="post"
                style="margin-bottom: 30px;margin-left: 35px;">
                @csrf
                <h1 class="heding">Buyer Information Form</h1><br>
                <div style="margin-bottom: 0px;">
                    <div class="form-group" style="display: flex;gap: 90px;">
                        <div>
                            <label for="name"> First Name : </label><span style="color: #018C43;margin-left: 10px">
                                @error('first_name')
                                    {{ $message }}
                                @enderror
                            </span><br>
                            <input type="text" value="{{ $data->first_name }}" name="first_name"
                                style="width: 250px; height: 25px;border-radius: 5px; border: 2px solid #018C43;">
                        </div>
                        <div>
                            <label for="name"> Last Name : </label><span style="color: #018C43;margin-left: 10px">
                                @error('last_name')
                                    {{ $message }}
                                @enderror
                            </span><br>
                            <input type="text" value="{{ $data->last_name }}" name="last_name"
                                style="width: 250px; height: 25px;border-radius: 5px; border: 2px solid #018C43;"><br><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label><span style="color: #018C43;margin-left: 10px">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span><br>
                        <input type="email" value="{{ $data->email }}" name="email"
                            style="width: 99%; height: 25px;border-radius: 5px; border: 2px solid #018C43;"><br><br>
                    </div>
                    {{--  <label for="file" class="form-group" style="margin-left: 45.2%;margin-top: 10px"> Choose Your File : </label>
                    <input type="file"  name="file"><br>  --}}
                    <div class="form-group" style="margin-left: 500px;margin-top: 3px;">
                        <div style="gap: 10px;margin-top: 5px;">
                            <label for="type_of_banana_Chips">Type of Banana Chips : </label><span
                                style="color: #018C43;margin-left: 10px">
                                @error('type_of_banana_Chips')
                                    {{ $message }}
                                @enderror
                            </span><br>
                            <div style="display: flex; gap: 50px;margin-top: 5px;">
                                <div>
                                    <div>
                                        <div style="display: flex;gap: 12.5%;">
                                            <div>
                                                <input type="radio" name="type_of_banana_Chips"
                                                    value="Coconut Oil and Rock Salt"
                                                    {{ $data['type_of_banana_Chips'] == 'Coconut Oil and Rock Salt' ? 'checked' : '' }}>
                                                <label for="Coconut Oil and Rock Salt">Coconut Oil and Rock Salt</label>
                                            </div>
                                            <div>
                                                <input type="radio" name="type_of_banana_Chips" value="Peri Peri"
                                                    {{ $data['type_of_banana_Chips'] == 'Peri Peri' ? 'checked' : '' }}>
                                                <label for="Peri Peri">Peri Peri</label>
                                            </div>

                                        </div>
                                        <div style="display: flex;gap: 49px;">

                                            <div>
                                                <input type="radio" name="type_of_banana_Chips"
                                                    value="Sour Cream Onion & Parsley"
                                                    {{ $data['type_of_banana_Chips'] == 'Sour Cream Onion & Parsley' ? 'checked' : '' }}>
                                                <label for="Sour Cream Onion & Parsley">Sour Cream Onion &
                                                    Parsley</label>
                                            </div>
                                            <div>

                                                <input type="radio" name="type_of_banana_Chips"
                                                    value="Salt & Black Pepper"
                                                    {{ $data['type_of_banana_Chips'] == 'Salt & Black Pepper' ? 'checked' : '' }}>
                                                <label for="Salt & Black Pepper">Salt & Black Pepper</label>
                                            </div>
                                        </div>

                                        <div style="display: flex;gap: 32.7%;">

                                            <div>
                                                <input type="radio" name="type_of_banana_Chips" value="Original Style"
                                                    {{ $data['type_of_banana_Chips'] == 'Original Style' ? 'checked' : '' }}>
                                                <label for="Original Style">Original Style</label>
                                            </div>
                                            <div>
                                                <input type="radio" name="type_of_banana_Chips" value="Desi Masala"
                                                    {{ $data['type_of_banana_Chips'] == 'Desi Masala' ? 'checked' : '' }}>
                                                <label for="Desi Masala">Desi Masala</label>
                                            </div>
                                        </div>

                                        <div style="display: flex;gap: 24.2%;">

                                            <div>
                                                <input type="radio" name="type_of_banana_Chips"
                                                    value="Hot & Sweet Chilli"
                                                    {{ $data['type_of_banana_Chips'] == 'Hot & Sweet Chilli' ? 'checked' : '' }}>
                                                <label for="Hot & Sweet Chilli">Hot & Sweet Chilli</label>
                                            </div>
                                            <div>
                                                <input type="radio" name="type_of_banana_Chips"
                                                    value="3 Flavour Combo"
                                                    {{ $data['type_of_banana_Chips'] == '3 Flavour Combo' ? 'checked' : '' }}>
                                                <label for="3 Flavour Combo">3 Flavour Combo </label>
                                            </div>
                                        </div>

                                        <div style="display: flex;gap: 28.6%;">

                                            <div>
                                                <input type="radio" name="type_of_banana_Chips"
                                                    value="4 Flavour Combo"
                                                    {{ $data['type_of_banana_Chips'] == '4 Flavour Combo' ? 'checked' : '' }}>
                                                <label for="4 Flavour Combo">4 Flavour Combo</label>
                                            </div>
                                            <div>
                                                <input type="radio" name="type_of_banana_Chips" value="All 6 Flavours"
                                                    {{ $data['type_of_banana_Chips'] == 'All 6 Flavours' ? 'checked' : '' }}>
                                                <label for="All 6 Flavours">All 6 Flavours</label>
                                            </div>
                                        </div>


                                    </div><br>


                                </div><br>
                            </div>
                        </div>
                    </div><br>
                    <div>
                        <label for="file" style="margin-left: 45%" class="form-group">Choose file :
                        </label>
                        <input type="file" value="{{ $data->file }}" name="file">
                        <img src="{{ $data->file }}" alt="no"
                            style="height: 60px; width:60px;object-fit:cover; border-radius:10%;margin-left: -10px;margin-bottom:-24px;"><br><br>
                    </div><br>
                    <div class="form-group" style="display: flex;gap: 90px;">
                        <div>
                            <label for="name">Mobile Number : </label><span
                                style="color: #018C43;margin-left: 10px">
                                @error('mobile_number')
                                    {{ $message }}
                                @enderror
                            </span><br>
                            <input type="text" value="{{ $data->mobile_number }}" name="mobile_number"
                                maxlength="10"
                                style="width: 250px; height: 25px;border-radius: 5px; border: 2px solid #018C43;">
                        </div>
                        <div>
                            <label for="name"> Date : </label><span style="color: r#018c43ed;margin-left: 10px">
                                @error('date')
                                    {{ $message }}
                                @enderror
                            </span><br>
                            <input type="date" value="{{ $data->date }}" name="date"
                                style="width: 250px; height: 25px;border-radius: 5px; border: 2px solid #018C43;"><br><br>
                        </div>
                    </div>
                    <div class="form-group" style="display: flex;gap: 90px;">
                        <div>
                            <label for="name">Pincode : </label><span style="color: #018C43;margin-left: 10px">
                                @error('pincode')
                                    {{ $message }}
                                @enderror
                            </span><br>
                            <input type="text" value="{{ $data->pincode }}" name="pincode" maxlength="6"
                                style="width: 250px; height: 25px;border-radius: 5px; border: 2px solid #018C43;">
                        </div>
                        <div>
                            <label for="name"> Price : </label><span style="color: r#018c43ed;margin-left: 10px">
                                @error('price')
                                    {{ $message }}
                                @enderror
                            </span><br>
                            <input type="text" value="{{ $data->price }}" name="price"
                                style="width: 250px; height: 25px;border-radius: 5px; border: 2px solid #018C43;"><br><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email"> Address :</label><span style="color: #018C43;margin-left: 10px">
                            @error('address')
                                {{ $message }}
                            @enderror
                        </span><br>
                        <input type="text" value="{{ $data->address }}" name="address"
                            style="width: 99%; height: 25px;border-radius: 5px; border: 2px solid #018C43;"><br><br>
                    </div>
                    <div>
                        <input type="submit" value="Update" class="day"
                            style="margin-left: 45.5%; border:none;height: 35px; width:54.5%;background-color: #018C43; border-radius:5px;">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
