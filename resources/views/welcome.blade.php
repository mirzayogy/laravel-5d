<!DOCTYPE html>
<html lang="en">
@include('template.components.head')

<body id="page-top">
    <div id="wrapper">
        @include('template.components.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('template.components.topbar')
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            @include('template.components.footer')
        </div>
    </div>
    @include('template.components.scripts')
</body>
