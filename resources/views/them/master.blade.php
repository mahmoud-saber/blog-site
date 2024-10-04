<!DOCTYPE html>
<html lang="en">
@include('them.partial.head')

<body>
    <!--================Header Menu Area =================-->
    @include('them.partial.header')
    <!--================Header Menu Area =================-->

    <main class="site-main">
        <!--================Hero Banner start =================-->
        @include('them.partial.hero')
        <!--================Hero Banner end =================-->

        <!--================ Blog slider start =================-->
        @yield('content')
        <!--================ End Blog Post Area =================-->
    </main>
    <!--================ Start Footer Area =================-->
    @include('them.partial.footer')
    <!--================ End Footer Area =================-->

    @include('them.partial.scrip')
</body>

</html>
