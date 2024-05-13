@include('includes.BootstrapCss')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2">
            <div class="green-box">
                <h4>{{$user->role}}</h4>
            </div>
            <x-navbar></x-navbar>
        </div>

        <div class="col-lg-9" id="scrollable-content">
            <section class="profile-feed">
            @if($posts->isEmpty())
                <div class="warn-message">No Active Queries 😢</div>
            @else

                @foreach ($posts as $post )
                {{-- <p>here is the post {{$post}}</p> --}}
                {{-- <br> --}}
                    <x-post :post="$post" ></x-post>
                @endforeach
            @endif
            </section>
        </div>

    </div>
</div>
@include('includes.BootstrapScripts')

