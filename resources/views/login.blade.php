<html lang="zxx">

<head>
    <title>Student Login Form Form Responsive Widget Template :: w3layouts</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords"
        content="Student Login Form Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">

    <!-- //Meta-Tags -->
    <!-- Stylesheets -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!--// Stylesheets -->
    <!--online fonts-->
    <link href="//fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <!--//online fonts-->

</head>


<meta name="robots" content="noindex">
<link rel="stylesheet" href="/assests/css/font-awesome.min.css">



<h1>Student Login Form</h1>
<!---728x90--->
<div class="w3ls-login box">
    <img src="{{ asset('images/student_teacher.png') }}" alt="logo_img">
    <!-- form starts here -->
    <form action="#" method="post" >
        @csrf
        <div class="agile-field-txt">
            <input type="email" name="email" placeholder="Your email" >
            @error('email')
            <div class="text-danger"> {{ $message }} </div>

            @enderror
        </div>
        <div class="agile-field-txt">
            <input type="password" name="password" placeholder="password"  id="myInput">
            <div class="agile_label">
                <input id="check3" name="check3" type="checkbox" value="show password">
                @error("password")
                <div class="text-danger"> {{ $message }} </div>
                @enderror
                <label class="check" for="check3">Remember me</label>
            </div>
        </div>
        <div class="w3ls-bot">
            <input type="submit" value="LOGIN">
        </div>
    </form>
</div>
<!-- //form ends here -->
<!---728x90--->
<!--copyright-->
<div class="copy-wthree">
    <p>© 2018 Student Login Form. All Rights Reserved.| Design by
        <a href="http://w3layouts.com/" target="_blank">W3layouts</a>
    </p>
</div>
<!--//copyright-->
