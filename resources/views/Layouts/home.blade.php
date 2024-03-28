@include('includes.BootstrapCss')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2">
            <x-navbar></x-navbar>
        </div>

        <div class="col-lg-9" id="scrollable-content">
            <section class="profile-feed">
            @foreach ($posts as $post )
                <x-post :post="$post" :userInfo="$userInfo" ></x-post>
            @endforeach
            </section>
        </div>

    </div>
</div>
@include('includes.BootstrapScripts')

