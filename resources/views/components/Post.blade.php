    <div class="container">
        <div class="row">

            <div class="col-lg-6 offset-lg-3">

                <div class="cardbox shadow-lg bg-white">

                    <div class="cardbox-heading">
                        <!-- START dropdown-->
                        <div class="dropdown float-right">
                            <button class="btn btn-flat btn-flat-icon" type="button" data-toggle="dropdown" aria-expanded="false">
                                <em class="fa fa-ellipsis-h"></em>
                            </button>
                            <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu" style="position: absolute; transform: translate3d(-136px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                                <a class="dropdown-item" href="#">Hide post</a>
                                <a class="dropdown-item" href="#">Stop following</a>
                                <a class="dropdown-item" href="#">Report</a>
                            </div>
                        </div><!-- dropdown -->
                        <div class="media m-0">
                            <div class="d-flex mr-3">
                                <a href=""><img class="img-fluid rounded-circle" src={{$userInfo->photo}} alt="User"></a>
                            </div>
                            <div class="media-body">
                                <p class="m-0">{{$userInfo->firstName." ".$userInfo->lastName}}</p>
                                <small><span><i class="icon ion-md-pin"></i> {{$userInfo->location." ".$userInfo->country}}</span></small>
                                <small><span><i class="icon ion-md-time"></i> 1 hour ago</span></small>
                            </div>
                        </div><!-- media -->
                    </div><!-- cardbox-heading -->

                    <div class="cardbox-item">
                        <div>
                            {{$post->caption}}
                        </div>
                        <img class="img-fluid" src={{$post->photo}} alt="Image">
                    </div><!-- cardbox-item -->
                    <div class="cardbox-base">
                        <ul class="float-right">
                            <li><a><i class="fa fa-comments"></i></a></li>
                            <li><a><em class="mr-5">46</em></a></li>
                            <li><a><i class="fa fa-share-alt"></i></a></li>

                        </ul>
                        <ul>
                            <li><a><i class="fa fa-thumbs-up"></i></a></li>
                            <li><a><span>242 Likes</span></a></li>
                        </ul>
                    </div><!-- cardbox-base -->
                    <div class="cardbox-comments">
                        <span class="comment-avatar float-left">
                            <a href=""><img class="rounded-circle" src="https://images.pexels.com/photos/2811087/pexels-photo-2811087.jpeg" alt="..."></a>
                        </span>
                        <div class="search">
                            <input placeholder="Write a comment" type="text">
                            <button><i class="fa fa-camera"></i></button>
                        </div><!-- Search -->
                    </div><!-- cardbox-like -->

                </div><!-- cardbox -->

            </div><!-- col-lg-6 -->


        </div><!-- row -->
    </div><!-- container -->
