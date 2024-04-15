<!DOCTYPE html>
<html lang="en">

<head>
    @include("komponenAdmin.css")
</head>

<body>
    @include('komponenAdmin.header')

    @yield('contentA')
    @include('komponenAdmin.footer')
    @include('komponenAdmin.js')
</body>

</html>
