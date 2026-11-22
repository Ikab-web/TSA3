<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') · Tasks for Today</title>
    <style>
        :root{font-family:Inter,ui-sans-serif,system-ui,-apple-system,"Segoe UI",sans-serif;color:#192520;background:#f3f6f2;font-synthesis:none}*{box-sizing:border-box}body{margin:0;min-height:100vh}.shell{max-width:1040px;margin:auto;padding:28px 22px 56px}.nav{display:flex;align-items:center;justify-content:space-between;gap:18px;margin-bottom:58px}.brand{font-weight:800;letter-spacing:-.04em;font-size:1.25rem;color:#183c30;text-decoration:none}.navlinks{display:flex;gap:8px;flex-wrap:wrap}.navlinks a{color:#54645c;text-decoration:none;padding:9px 13px;border-radius:999px;font-size:.92rem}.navlinks a:hover,.navlinks a.active{background:#dfeae0;color:#204c39}.eyebrow{text-transform:uppercase;letter-spacing:.14em;font-size:.73rem;font-weight:750;color:#49805f}.hero{max-width:680px;margin-bottom:30px}.hero h1{font-size:clamp(2.5rem,7vw,4.6rem);line-height:1.02;letter-spacing:-.065em;margin:12px 0 14px}.hero p,.muted{color:#66766d;line-height:1.65}.panel{background:#fff;border:1px solid #e4eae3;border-radius:20px;padding:24px;box-shadow:0 12px 38px #183c300a}.panel-head{display:flex;justify-content:space-between;align-items:center;gap:10px;margin-bottom:14px}.panel h2{margin:0;font-size:1.15rem}.count{background:#edf4ed;color:#356248;border-radius:999px;padding:6px 10px;font-size:.8rem;font-weight:700}.task{display:grid;grid-template-columns:1fr auto;gap:14px;align-items:center;padding:17px 0;border-top:1px solid #edf0ec}.task:first-of-type{border-top:0}.task h3{margin:0 0 5px;font-size:1rem}.task small{color:#78857d}.badge{font-size:.75rem;border-radius:999px;padding:6px 10px;background:#f2f3ee;color:#5f6b61;white-space:nowrap}.badge.completed{background:#e4f3e8;color:#317347}.badge.in-progress{background:#fff1d8;color:#8b641f}.empty{padding:28px 4px;color:#718077}.profile-grid{display:grid;grid-template-columns:110px 1fr;gap:24px;align-items:center}.avatar{width:100px;height:100px;border-radius:28px;background:#dcecdf;display:grid;place-items:center;color:#326448;font-size:2rem;font-weight:800}.profile-grid h1{margin:0 0 6px;letter-spacing:-.04em}.footer{margin-top:38px;color:#91a097;font-size:.83rem}@media(max-width:600px){.nav{align-items:flex-start;flex-direction:column;margin-bottom:40px}.task{grid-template-columns:1fr}.profile-grid{grid-template-columns:1fr}}
    </style>
</head>
<body><div class="shell">
    <nav class="nav"><a class="brand" href="{{ route('welcome') }}">Today<span style="color:#82a982">.</span></a><div class="navlinks">
        <a class="{{ request()->routeIs('welcome') ? 'active' : '' }}" href="{{ route('welcome') }}">Today</a>
        <a class="{{ request()->routeIs('tasks.*') ? 'active' : '' }}" href="{{ route('tasks.index') }}">All tasks</a>
        <a class="{{ request()->routeIs('profile') ? 'active' : '' }}" href="{{ route('profile') }}">Profile</a>
        <a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
    </div></nav>
    @yield('content')
    <footer class="footer">Tasks for Today Management System · IT0049 TSA3</footer>
</div></body></html>
