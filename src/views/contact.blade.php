<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact us</title>
</head>
<body>

    @if(session()->has('success'))
        <div class="alert alert-success"> {{ session()->get('success') }} </div>
    @endif

    @if(session()->has('failed'))
        <div class="alert alert-danger"> {{ session()->get('failed') }} </div>
    @endif

    
    <h1>Contact Us</h1>

    <form action="{{ route('contact') }}" method="post">

        {{ csrf_field() }}

        <input type="text" name="name" placeholder="your name">

        <input type="email" name="email" placeholder="your email address">

        <textarea name="message"  cols="30" rows="10" placeholder="your message"></textarea>

        <button type="submit" value="submit">submit</button>

    </form>

</body>
</html>