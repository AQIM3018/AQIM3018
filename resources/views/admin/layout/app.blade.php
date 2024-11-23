<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Grammar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS for Sub-dropdown to the Left -->
    <style>
        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu > .dropdown-menu {
            top: 0;
            right: 100%;
            margin-top: -1px;
            left: auto;
        }

        .dropdown-submenu:hover > .dropdown-menu {
            display: block;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">Happy Grammar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <!-- Dropdown Menu for Materi -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="materiDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Materi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="materiDropdown">
                            <!-- Sub-dropdown for Grammar Tenses on the Left -->
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Grammar Tenses</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Simple Present</a></li>
                                    <li><a class="dropdown-item" href="#">Simple Past</a></li>
                                    <li><a class="dropdown-item" href="#">Simple Future</a></li>
                                </ul>
                            </li>
                            <!-- Other Materi -->
                            <li><a class="dropdown-item" href="#">Vocabulary</a></li>
                            <li><a class="dropdown-item" href="#">Pronunciation</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url ('/biodata')}}">Game</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Script for Sub-dropdown Behavior -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const dropdownSubmenus = document.querySelectorAll('.dropdown-submenu');

            dropdownSubmenus.forEach(function (submenu) {
                submenu.addEventListener('mouseover', function () {
                    const dropdown = submenu.querySelector('.dropdown-menu');
                    if (dropdown) dropdown.style.display = 'block';
                });

                submenu.addEventListener('mouseout', function () {
                    const dropdown = submenu.querySelector('.dropdown-menu');
                    if (dropdown) dropdown.style.display = 'none';
                });
            });
        });
    </script>
</body>
</html>
