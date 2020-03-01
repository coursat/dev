<div class="dashboard-sidebar">
    <div class="course-info">
      <div class="thumb">
        <img src="{{url('custom')}}/images/inoledge.jpg" class="img-fluid" alt="">
      </div>
      <div class="user-body">
       <h5>
           Inoledge
        </h5>

        <span>@inoledge</span>
      </div>
    </div>
    <div class="dashboard-menu">
      <ul>
        <li class="active"><i class="fas fa-home"></i><a href="dashboard.html">Dashboard</a></li>
        <li><i class="fas fa-user"></i><a href="dashboard-edit-profile.html">Edit Profile</a></li>
        <li><i class="fas fa-file-alt"></i><a href="resume.html">Resume</a></li>
        <li><i class="fas fa-edit"></i><a href="edit-resume.html">Edit Resume</a></li>
        <li><i class="fas fa-heart"></i><a href="dashboard-bookmark.html">Bookmarked</a></li>
        <li><i class="fas fa-check-square"></i><a href="dashboard-applied.html">Applied Job</a></li>
        <li><i class="fas fa-comment"></i><a href="dashboard-message.html">Message</a></li>
        <li><i class="fas fa-calculator"></i><a href="dashboard-pricing.html">Pricing Plans</a></li>
      </ul>
      <ul class="delete">
        <li><i class="fas fa-power-off"></i><a href="#">Logout</a></li>
        <li><i class="fas fa-trash-alt"></i><a href="#" data-toggle="modal" data-target="#modal-delete">Delete Profile</a></li>
      </ul>
      <!-- Modal -->
      <div class="modal fade modal-delete" id="modal-delete" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <h4><i data-feather="trash-2"></i>Delete Account</h4>
              <p>Are you sure! You want to delete your profile. This can't be undone!</p>
              <form action="#">
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Enter password">
                </div>
                <div class="buttons">
                  <button class="delete-button">Save Update</button>
                  <button class="">Cancel</button>
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" checked="">
                  <label class="form-check-label">You accepts our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></label>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
