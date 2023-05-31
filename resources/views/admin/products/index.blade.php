<!DOCTYPE html>
<html lang="en">
    @include("admin.header")
    <body>
        @include("admin.sidebar")
        <div class="wrapper d-flex flex-column min-vh-100 bg-light">
            <header class="header header-sticky mb-4">
                <div class="container-fluid">
                    <ul class="header-nav float-left d-md-flex">
                        <li class="nav-item"><a class="nav-link" href="#">
                        </a></li>
                    </ul>
                </div>
            </header>
            <div class="body flex-grow-1 px-3">
                <div class="container">
                    <div id="content"></div>
                </div>
            </div>
        </div>
        @include("admin.footer")
    </body>
    <script>
        list("products");
    </script>
</html>