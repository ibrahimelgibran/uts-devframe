<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="https://www.iegcodestore.my.id/ieg.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: black;
            
        }

        .container {
            max-width: 800px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1,
        h2 {
            color: #333;
        }

        p {
            color: #666;
        }

        .header {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 10rem;
            padding: 10px 0;
        }

        .header nav {
            display: flex;
            justify-content: center;
            /* Mengubah menjadi center */
            align-items: center;
            gap: 10px;
        }

        .header nav a {
            padding: 10px 20px;
            border-radius: 0.375rem;
            color: #000;
            /* Mengubah warna teks menjadi hitam */
            transition: color 0.3s;
            text-decoration: none;
        }

        .header nav a:hover {
            color: rgba(0, 0, 0, 0.7);
        }

        @media (min-width: 1024px) {
            .header {
                grid-template-columns: repeat(3, minmax(0, 1fr));
                align-items: center;
            }
        }

        .grid {
            display: grid;
        }

        .grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .items-center {
            align-items: center;
        }

        .gap-2 {
            gap: 0.5rem;
        }

        .py-10 {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem;
        }

        .lg\:grid-cols-3 {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        .flex {
            display: flex;
        }

        .flex-1 {
            flex: 1;
        }

        .justify-end {
            justify-content: flex-end;
        }

        .rounded-md {
            border-radius: 0.375rem;
        }

        .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem;
        }

        .py-2 {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .text-black {
            color: #000;
        }

        .hover\:text-black\/70:hover {
            color: rgba(0, 0, 0, 0.7);
        }

        .focus\:outline-none:focus {
            outline: none;
        }

        .dark\:text-white {
            color: #fff;
        }

        .dark\:hover\:text-white\/80:hover {
            color: wheat;
        }

        .dark\:focus-visible\:ring-white:focus-visible {
            outline-color: #fff;
        }

        @media (min-width: 1024px) {
            .lg\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }
    </style>
</head>

<body>
    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3" style=" align-items: center; display:flex; justify-content: center;">
        @if (Route::has('login'))
        <nav class="-mx-3 flex flex-1 justify-end">
            @auth
            <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-wheat/80 dark:focus-visible:ring-white">
                Dashboard
            </a>
            @else
            <a href="/" class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Home
            </a>

            <a href="{{ route('about') }}" class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                About
            </a>

            <a href="/#team" class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Team
            </a>

            <a href="{{route('servis')}}" class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Service
            </a>

            <a href="{{ route('contact') }}" class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                contact
            </a>

            <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Login
            </a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Register
            </a>
            @endif
            @endauth
        </nav>
        @endif
    </header>

    <div class="container">
        <h1>Contact</h1>
        <hr>
        <?php
        $team_name = "Feel Free To Contact Me📨";
        ?>
        <h2><?php echo $team_name; ?></h2>
        <button type="button" class="btn btn-primary"><a href="https://mail.google.com/mail/u/0/?fs=1&to=ibrahimelgibran17@gmail.com&su=Your%20Subject&body=Your%20Messages&tf=cm" style="color: #fff; text-decoration:none">Email Here! 👈🏻</a></button>
    </div>

    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
  made with ❤️ by
  <a href="http://ibrahimelgibran.com">iegcode :')</a>
  <style>
    footer {
      background-color: #fff;
      color: black;
      text-align: center;
      font-size: 17px;
      margin-left: -30px;
      padding: 20px;
      position: fixed;
      bottom: 0;
      width: 100%;
    }

    @media (max-width: 768spx) {
      footer {
        margin-left: 0; /* Reset margin-left */
      }
    }
  </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>