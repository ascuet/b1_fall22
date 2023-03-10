<!DOCTYPE html>
<html lang="en">
    <head>
        @include('website.includes.head')
    </head>
    <body>
        <!-- Responsive navbar-->
        @include('website.includes.nav')
        <!-- Page Content-->
        
        @yield('content')
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('website/js/scripts.js') }}"></script>
    </body>
</html>
