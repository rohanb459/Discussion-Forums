    <div class="container">
        <div class="row">

            <div class="col-lg-6 offset-lg-3">

                <div class="cardbox shadow-lg bg-white">

                    <div class="cardbox-heading">
                        <!-- START dropdown-->

                        <div class="media m-0">
                            <div class="d-flex mr-3">
                                <a href=""><img class="img-fluid rounded-circle" src={{$post->user->userInfo->photo}} alt="User"></a>
                            </div>
                            <div class="media-body">
                                <p class="m-0">{{$post->user->userInfo->firstName." ".$post->user->userInfo->lastName}}</p>
                                <small><span><i class="icon ion-md-pin"></i> {{$post->user->userInfo->location." ".$post->user->userInfo->country}}</span></small>
                                <small><span><i class="icon ion-md-time"></i> {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</span></small>
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
                        <button class="del-button" data-post-id="{{$post->id}}" id="del-button">Delete</button>
                        <button class="res-button" data-post-id="{{$post->id}}" id="res-button">Resolve </button>
                    </div><!-- cardbox-base -->


                </div><!-- cardbox -->

            </div><!-- col-lg-6 -->


        </div><!-- row -->
    </div><!-- container -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Select all delete buttons
            var deleteButton = document.getElementById('del-button');
            // Attach click event listener to each delete button
                deleteButton.addEventListener('click', function(event) {

                    // Retrieve the post ID associated with the clicked button
                    var postId = deleteButton.getAttribute('data-post-id');
                    console.log(postId)
                    // Confirm deletion with user (optional)
                    // var confirmDelete = confirm('Are you sure you want to delete this post?');
                    confirmDelete = true
                    if (confirmDelete) {
                        // Send an AJAX request to delete the specific post
                        fetch(`/delete/posts/${postId}`, {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                'Content-Type': 'application/json',
                                'Accept': 'application/json'
                            }
                        })
                        .then(response => {
                            if (response.ok) {
                                console.log('Post deleted successfully');
                                // Optionally, update UI (remove post from DOM, etc.)
                                // Example: deleteButton.closest('.cardbox').remove();
                            } else {
                                console.error('Failed to delete post');
                            }
                        })
                        .catch(error => {
                            console.error('Error occurred:', error);
                        });
                    }
                });
            });
        
    </script>



    {{-- <p>Inside post blade{{$post->user->userInfo}}</p> --}}
