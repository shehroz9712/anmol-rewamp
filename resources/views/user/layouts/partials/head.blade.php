<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @if (isset($page) && $page->title)
            {{ $page->title . ' | ' . getTitle() }}
        @else
            {{ getTitle() }}
        @endif
    </title>

    {{-- Description --}}
    <meta name="description" content="{{ isset($page) && $page->meta_description ? $page->meta_description : '' }}">

    {{-- Keywords --}}
    <meta name="keywords" content="{{ isset($page) && $page->meta_keywords ? $page->meta_keywords : '' }}">
    <!--favicon-->
    <link rel="icon" href="{{ getFavicon() }}" type="image/png">
    <!-- loader-->
    @include('user.layouts.partials.cssfiles')
    @yield('css')

    {{ getHeaderScripts() }}

</head>
