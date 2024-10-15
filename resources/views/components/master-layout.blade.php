<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Công ty xây dựng Nghĩa Gia Phát</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    @vite(['resources/css/app.css'])
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
</head>

<body>
    <main class="main">
        @auth
        <div class="p-3 px-md-4 mb-3 border-bottom shadow-sm header-area">
            <div class="container d-flex flex-row flex-md-row align-items-center justify-content-between">
                <nav class="my-2 my-md-0 mr-md-3">
                    <a class="p-2 text-white" href="/admin/projects">Dự án</a>
                    <a class="p-2 text-white" href="/admin/recruitments">Tin Tuyển dụng</a>
                    <a class="p-2 text-white" href="/admin/proposals">Yêu cầu báo giá</a>
                </nav>
                <ul class="navbar-nav px-3">
                    <li class="nav-item text-nowrap">
                        <a class="nav-link text-white" href="/admin/logout">Đăng xuất</a>
                    </li>
                </ul>
            </div>
        </div>
        @endauth
        {{ $slot }}
    </main>
</body>

</html>
