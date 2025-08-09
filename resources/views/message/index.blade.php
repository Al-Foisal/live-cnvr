<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
    <title>Chatting Application</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="{{ asset('chat/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('chat/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('chat/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('chat/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('chat/css/emojionearea.min.css') }}">

    <link rel="stylesheet" href="{{ asset('chat/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('chat/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('chat/css/responsive.css') }}">
</head>

<body>

    <!--==================================
        Chatting Application Start
    ===================================-->
    <section class="wsus__chat_app">

        @include('message.user-list')

        @include('message.message-body')

        @include('message.user-details')

    </section>
    <!--==================================
        Chatting Application End
    ===================================-->


    <!--jquery library js-->
    <script src="{{ asset('chat/js/jquery-3.7.1.min.js') }}"></script>
    <!--bootstrap js-->
    <script src="{{ asset('chat/js/bootstrap.bundle.min.js') }}"></script>
    <!--font-awesome js-->
    <script src="{{ asset('chat/js/Font-Awesome.js') }}"></script>
    <script src="{{ asset('chat/js/slick.min.js') }}"></script>
    <script src="{{ asset('chat/js/venobox.min.js') }}"></script>
    <script src="{{ asset('chat/js/emojionearea.min.js') }}"></script>

    <!--main/custom js-->
    <script src="{{ asset('chat/js/main.js') }}"></script>

</body>

</html>
