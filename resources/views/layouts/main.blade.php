<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent-Books | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href={{asset("assets/css/style.css")}}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.0/js/splide.min.js">
</head>
<style>

</style>

<body>
    <div class="main d-flex flex-column justify-content-between">

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg" style="background-color: #EEEEEE">
            <div class="container">
                <a class="navbar-brand" href="#" style="font-family: 'Times New Roman', Times, serif">
                    <h2>Rent Books</h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                </div>
            </div>
        </nav>
        <!-- end navbar -->

        <!-- content -->
        <div class="body-main h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarSupportedContent">
                    <a href="/dashboard/admin" @if(request()->route()->uri == 'dashboard') class='active' @endif><i
                            class="bi bi-houses"></i> Dashboard</a>
                    <a href="/user" @if(request()->route()->uri == 'user') class='active' @endif> <i
                            class="bi bi-person-fill"></i> User</a>
                    <a href="{{route('content.books')}}" @if(request()->route()->uri == 'books') class='active' @endif><i
                            class="bi bi-book"></i> Books</a>
                    <a href="/category" @if(request()->route()->uri == 'category') class='active' @endif><i
                            class="bi bi-journal-bookmark-fill"></i> Category</a>
                    <a href="/rent-log" @if(request()->route()->uri == 'rent-log') class='active' @endif><i
                            class="bi bi-bookmarks-fill"></i> Rent logs</a>
                    <a href="/logout" class="bi bi-box-arrow-left"> logout</a>
                </div>
                <div class="content col-lg-10">
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- end content -->
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
</body>

</html>
