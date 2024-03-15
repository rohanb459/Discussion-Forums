<link rel="stylesheet" href="	https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset("css/PostStyles.css")}}">
<script src="	https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="	https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<section class="profile-feed">
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
                                <a href=""><img class="img-fluid rounded-circle" src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg" alt="User"></a>
                            </div>
                            <div class="media-body">
                                <p class="m-0">Emma Robinson</p>
                                <small><span><i class="icon ion-md-pin"></i> London, England</span></small>
                                <small><span><i class="icon ion-md-time"></i> 1 hour ago</span></small>
                            </div>
                        </div><!-- media -->
                    </div><!-- cardbox-heading -->

                    <div class="cardbox-item">
                        <div>
                            some text onver here....
                        </div>
                        <img class="img-fluid" src="https://images.pexels.com/photos/1152994/pexels-photo-1152994.jpeg" alt="Image">
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
</section>