<!DOCTYPE html>
<html lang="en">

<body>
    
@include('categoryadmin.layouts.sidebar')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

    @yield('content')

    @include('categoryadmin.layouts.footer')
</body>
</html>