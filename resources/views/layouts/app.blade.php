<!DOCTYPE html>
<html>

@include('layouts.header')

<body class="theme-red">
    
    @include('layouts.pageloader')
    @include('layouts.topbar')
    @include('layouts.navbar')

    <section class="content">
        <div class="container-fluid">
            @yield('page_title')
            @include('layouts.topwidget')
            @yield('page_content')
        </div>
    </section>

    @include('layouts.footer')
</body>

</html>
