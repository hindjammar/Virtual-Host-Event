<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href="{{ asset('styles/nav.css') }}">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <nav class="nav">
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
        <label class="logo">EventVibes</label>
        
            <ul>
                <li><a class="active" href="/">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#events">Events</a></li>
                <li><a href="#about">About</a></li>
                <li>
                    <a href="/">
                        @if (Route::has('login'))
                            @auth
                        </a>
                    </li>
                    <li> <a href="{{ url('/prof') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Profil</a>

                    </li>
                    <li>
                    @else
                        <a href="{{ route('login') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                        @if (Route::has('register'))
                    </li>
                    <li> <a href="{{ url('addU') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    </li>
                @endauth

                @endif
            </ul>

            
    </nav>
    <header></header>
    
</body>

</html>
