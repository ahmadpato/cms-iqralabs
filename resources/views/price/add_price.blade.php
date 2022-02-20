@extends('layout.main')
<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    @include('layout.sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

        @include('layout.navbar')
        
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Price</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">Home</a></li>
              <li class="breadcrumb-item">Price</li>
              <li class="breadcrumb-item active" aria-current="page">Add Price</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                </div>
                @if ($message = Session::get('failed'))
                  <div class="alert alert-danger" role="alert">
                  {{ $message }}
                  </div>
                @endif
                <div class="card-body">
                <form action="/price/store" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                    <label for="package_name">Package Name</label>
                    <select class="form-control" id="package_name" name="package_name" required="required">
                        <option value="personal">Personal</option>
                        <option value="family">Family</option>
                        <option value="group">Group</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="">Price</label>
                    <input type="number" class="form-control" name="price" required="required">
                    </div>
                    <div class="form-group">
                        <label for="class_type">Class Type</label>
                        <select class="form-control" id="class_type" name="class_type" required="required">
                            <option value="offline">Offline</option>
                            <option value="online">Online</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="session_type">Session Type</label>
                      <select class="form-control" id="class_type" name="session_type" required="required">
                          <option value="meeting">Metting</option>
                          <option value="monthly">Monthly</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="">Max Student</label>
                        <input type="number" class="form-control" name="max_student" required="required">
                    </div>
                    <div class="form-group">
                        <label for="">Learning Duration (minutes)</label>
                        <input type="number" class="form-control" name="learning_duration" required="required">
                    </div>
                    <div class="form-group">
                    <label for="">Description</label>
                    <textarea id="description" class="form-control" name="description" rows="10" cols="50"></textarea>
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{ URL::previous() }}" class="btn btn-success">Back</a>
                    </div>
                </form>
                </div>
              </div>
            </div>
          </div>
          <!--Row-->
          
          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="/logout" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
  <script>
    var description = document.getElementById("description");
      CKEDITOR.replace(description,{
      language:'en-gb'
    });
    CKEDITOR.config.allowedContent = true;
  </script>

</body>