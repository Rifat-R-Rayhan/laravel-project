<!DOCTYPE html>
<html lang='{{ str_replace('_', '-', app()->getLocale()) }}'>
<head>
    <x-sg-meta />
    <x-sg-title/>
    <x-sg-favicon />
    <x-sg-style />
</head>

<body>

    <x-sg-navbar />

    <div class="page-content pt-0">
        <x-sg-sidebar />

        <!-- Main content -->
        <div class="content-wrapper">

            <div class="content">
                {{ $slot }}
            </div>
        </div>
        <!-- / Main content -->
    </div>


    <x-sg-js />
    <x-sg-footer />
</body>
</html>
