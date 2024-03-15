@include('includes.BootstrapCss')
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
            <form action="">
              <!-- Photo -->
              <fieldset>      
                <div class="avatar-upload">
                  <div class="avatar-edit">
                      <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                      <label for="imageUpload">
                      </label>
                  </div>
                  <div class="avatar-preview">
                      <div id="imagePreview" style="background-image: url('http://i.pravatar.cc/500?img=7');">
                      </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <div class="grid-35">
                  <label for="fname">First Name</label>
                </div>
                <div class="grid-65">
                  <input type="text" id="fname" tabindex="1" />
                </div>
              </fieldset>
              <fieldset>
                <div class="grid-35">
                  <label for="lname">Last Name</label>
                </div>
                <div class="grid-65">
                  <input type="text" id="lname" tabindex="2" />
                </div>
              </fieldset>
              <!-- Description about User -->
              <fieldset>
                <div class="grid-35">
                  <label for="description">About you</label>
                </div>
                <div class="grid-65">
                  <textarea name="" id="" cols="30" rows="auto" tabindex="3"></textarea>
                </div>
              </fieldset>
              <!-- Location -->
              <fieldset>
                <div class="grid-35">
                  <label for="location">Location</label>
                </div>
                <div class="grid-65">
                  <input type="text" id="location" tabindex="4" />
                </div>
              </fieldset>
              <!-- Country -->
              <fieldset>
                <div class="grid-35">
                  <label for="country">Country</label>
                </div>
                <div class="grid-65">
                  <input type="text" id="country" tabindex="5" />
                </div>
              </fieldset>
              <!-- Email -->
              <fieldset>
                <div class="grid-35">
                  <label for="email">Email Address</label>
                </div>
                <div class="grid-65">
                  <input type="email" id="email" tabindex="6" />
                </div>
              </fieldset>
      
              <fieldset>
                <input type="button" class="Btn cancel" value="Cancel" />
                <input type="submit" class="Btn" value="Save Changes" />
              </fieldset>
      
            </form>
          </div>
        </div>
      </div>
  </div>
</div>
  @include('includes.BootstrapScripts')
  <script src="{{asset('js/EditProfile.js')}}"></script>
<!-- http://www.smashingmagazine.com/2013/08/08/release-livestyle-css-live-reload/ -->