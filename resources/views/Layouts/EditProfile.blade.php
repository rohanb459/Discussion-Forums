@include('includes.BootstrapCss')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<link rel="stylesheet" href="{{asset('css/EditProfileStyles.css')}}">
<div class="container-fluid">
  <div class="row">
      <div class="col-lg-2">
          <x-navbar></x-navbar>
      </div>
      <div class="col-lg-9" id="scrollable-content">
        <div class="profile">
          <div class="content">
            <h1>Edit Profile</h1>
            <form action={{route('save-changes')}} method="POST" enctype="multipart/form-data">
              <!-- Photo -->
              @csrf
              <fieldset>
                <div class="avatar-upload">
                  <div class="avatar-edit">
                      <input type='file' id="imageUpload" name="imageUpload" accept=".png, .jpg, .jpeg" />
                      <label for="imageUpload">
                      </label>
                  </div>
                  <div class="avatar-preview">
                      <div id="imagePreview" style="background-image: url({{$loggedInUser->photo}});">
                      </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <div class="grid-35">
                  <label for="fname">First Name</label>
                </div>
                <div class="grid-65">
                  <input type="text" id="fname" tabindex="1" name="firstName" value={{$loggedInUser->firstName}} />
                </div>
              </fieldset>
              <fieldset>
                <div class="grid-35">
                  <label for="lname">Last Name</label>
                </div>
                <div class="grid-65">
                  <input type="text" id="lname" tabindex="2" name="lastName" value={{$loggedInUser->lastName}} />
                </div>
              </fieldset>
              <!-- Description about User -->
              <fieldset>
                <div class="grid-35">
                  <label for="description">About you</label>
                </div>
                <div class="grid-65">
                  <textarea name="about" id="" cols="30" rows="auto" tabindex="3">{{$loggedInUser->about}}</textarea>
                </div>
              </fieldset>
              <!-- Location -->
              <fieldset>
                <div class="grid-35">
                  <label for="location">Location</label>
                </div>
                <div class="grid-65">
                  <input type="text" id="location" tabindex="4" name="location" value={{$loggedInUser->location}} />
                </div>
              </fieldset>
              <!-- Country -->
              <fieldset>
                <div class="grid-35">
                  <label for="country">Country</label>
                </div>
                <div class="grid-65">
                  <input type="text" id="country" tabindex="5" name="country" value={{$loggedInUser->country}} />
                </div>
              </fieldset>
              <!-- Email -->
              <fieldset>
                <div class="grid-35">
                  <label for="email">Email Address</label>
                </div>
                <div class="grid-65">
                  <input type="email" id="email" tabindex="6" name="email" value={{$loggedInUser->email}} readonly />
                </div>
              </fieldset>

              <fieldset>
                    <button type="submit" class="Btn" value="Save Changes">Submit</button>
              </fieldset>

            </form>
          </div>
        </div>
      </div>
  </div>
</div>
  @include('includes.BootstrapScripts')
  <script src="{{asset('js/EditProfile.js')}}"></script>
  {{-- <script>

    //paste here your copied configuration code
    const firebaseConfig = {
        apiKey: "AIzaSyCQBUc9FMvB3sx_FeRA5OGQ8AWDdwUicvE",
        authDomain: "discussion-forum-be20d.firebaseapp.com",
         projectId: "discussion-forum-be20d",
        storageBucket: "discussion-forum-be20d.appspot.com",
        messagingSenderId: "791840193436",
        appId: "1:791840193436:web:2b0d2d28f02a39d5e12659"
    };

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    console.log(firebase);
    function uploadImage() {
       const ref = firebase.storage().ref();
       const file = document.querySelector("#imageUpload").files[0];
       const name = +new Date() + "-" + file.name;
       const metadata = {
          contentType: file.type
       };
       const task = ref.child(name).put(file, metadata);task
       .then(snapshot => snapshot.ref.getDownloadURL())
       .then(url => {
       console.log(url);
       alert('image uploaded successfully');
       document.querySelector("#imageUpload").src = url;
    })
    .catch(console.error);
    }
 </script> --}}
<!-- http://www.smashingmagazine.com/2013/08/08/release-livestyle-css-live-reload/ -->
