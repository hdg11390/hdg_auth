<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css"  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css"  href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"  href="{{asset('css/styles.css')}}">
    <title>Document</title>
</head>
<body>

<div class="container">

    <nav class="navbar fixed-top navbar-expand-md navbar-custom navbar-light bg-white ">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="logo horizontal-logo" src="{{asset('images/xsmbanner.jpg')}}" alt="Staghorn logo" style="padding-left:50px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto pr-5" >
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Our Dogs
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <a class="dropdown-item" href="#">Our Boys</a>
                            <a class="dropdown-item" href="#">Our Girls</a>
                            <a class="dropdown-item" href="#">Greeters</a>
                            <a class="dropdown-item" href="#">Retired</a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Rainbow Bridge</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            News/Litters
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            <a class="dropdown-item" href="#">Upcoming Litters</a>
                            <a class="dropdown-item" href="#">Adults Available</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Show News</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

    <main class="py-4">

        @yield('content')

<div class="mx-2">
    <hr>
</div>
    </main>
<footer>
<div class="row">
    <div class="col-lg-4 ftlft">
            <ul class="nobull">
                <li>Our Boys</li>
                <li><a href="girls2.php"> Our Girls</a> </li>
                <li>Greeters</li>
                <li><a href="retired2.php"> Retired</a></li>
                <li>Rainbow Bridge</li>
            </ul>
     </div>
    <div class="col-lg-4 ftcen">
            <img src="{{asset('images/3colours.png')}}" alt=""><br>
            <br>
            <a href="https://whc.ca/green-powered/?aff=3153&amp;gbid=2en" onclick="window.open(this.href, 'popupWindow', 'width=450, height=538, status=no, scrollbars=no, menubar=no'); return false;"><img src="https://s.whc.ca/badges/green-badge-2.svg" width="88" alt="Green Hosting Badge"></a><br>
            Copyright &copy; <?php echo date("Y"); ?> Staghorn Reg'd Labradors. All rights reserved.<br>
    </div>
    <div class="col-lg-4 ftrgt">

            <ul class="nobull">
                <li>Home</li>
                <li>About Us</li>
                <li>Upcoming Litters</li>
                <li>Show News</li>
                <li>Adults Available</li>
            </ul>

    </div>
</div>
</footer>


<script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable( {
            "order":[]
        });

    } );
</script>
<script src="{{asset('js/nav.js')}}"></script>
</body>
</html>
