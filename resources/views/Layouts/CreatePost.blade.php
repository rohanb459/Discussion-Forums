<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Create New Post</title>
    <link rel="stylesheet" href="{{secure_asset('css/CreatePostStyles.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FontAweome CDN Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <section class="post">
                <header>Create Post</header>
                <form action={{route("addNewPost")}} method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="content">
                        <img class="rounded" src={{ $userInfo->photo }} alt="user profile picture">
                        <div class="details">
                            <p>{{ $userInfo->firstName . ' ' . $userInfo->lastName }}</p>
                        </div>
                    </div>
                    <textarea name="caption" placeholder="What's on your mind, {{ $userInfo->firstName }}?" spellcheck="false" required></textarea>
                    <div class="preview">
                        <img id="file-ip-1-preview"
                            style="display: block; margin:auto; width: 250px;height: fit-content;">
                    </div>
                    <div class="options">
                        <label for="file-ip-1">Upload Image</label>
                        <input type="file" name="imageUpload" id="file-ip-1" accept=".png, .jpg, .jpeg" onchange="showPreview(event);">
                    </div>
                    <button type="submit">Post</button>
                </form>
            </section>
        </div>
    </div>
    <script>
        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>
</body>

</html>
