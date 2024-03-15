@include('includes.BootstrapCss')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2">
            <x-navbar></x-navbar>
        </div>
        <div class="col-lg-9" id="scrollable-content">
            <x-post></x-post>
        </div>
    </div>
</div>
@include('includes.BootstrapScripts')

