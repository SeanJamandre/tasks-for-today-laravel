<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Tasks for Today' }}</title>
    <style>
        :root { font-family: Arial, sans-serif; color: #172033; background: #f4f7fb; }
        * { box-sizing: border-box; } body { margin: 0; }
        nav { background: #172033; padding: 18px 7%; display: flex; justify-content: space-between; align-items: center; gap: 20px; }
        nav a { color: white; text-decoration: none; margin-left: 18px; } nav a:hover { color: #8bd3ff; }
        .brand { font-weight: bold; margin-left: 0; } main { max-width: 1000px; margin: 45px auto; padding: 0 22px; }
        h1 { margin-bottom: 8px; } .muted { color: #667085; }
        .card { background: white; border-radius: 12px; padding: 22px; margin-top: 24px; box-shadow: 0 4px 18px #17203312; }
        .task { display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #e5eaf1; padding: 16px 0; gap: 20px; }
        .task:last-child { border-bottom: 0; } .task-title { font-weight: bold; }
        .badge { border-radius: 20px; padding: 6px 11px; font-size: 12px; text-transform: capitalize; background: #e8f1ff; color: #175cd3; white-space: nowrap; }
        .completed { background: #e7f6ec; color: #16703a; } .in-progress { background: #fff3d6; color: #9a6700; }
        .profile-row { padding: 12px 0; border-bottom: 1px solid #e5eaf1; } .profile-row strong { display: inline-block; width: 120px; }
        footer { text-align: center; color: #667085; padding: 30px; }
        @media (max-width: 600px) { nav { display: block; } nav div { margin-top: 12px; } nav a { margin: 0 15px 0 0; } .task { align-items: flex-start; flex-direction: column; gap: 8px; } }
    </style>
</head>
<body>
    <nav>
        <a class="brand" href="{{ route('welcome') }}">Tasks for Today</a>
        <div>
            <a href="{{ route('welcome') }}">Home</a>
            <a href="{{ route('tasks.index') }}">All Tasks</a>
            <a href="{{ route('profile') }}">Profile</a>
            <a href="{{ route('about') }}">About</a>
        </div>
    </nav>
    <main>@yield('content')</main>
    <footer>Laravel Tasks for Today Management System</footer>
</body>
</html>
