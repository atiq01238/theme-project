<!DOCTYPE html>
<html lang="en">

@include('admin-layout.head-links')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body {
      background: linear-gradient(135deg, #1f4037,);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .card {
      width: 90%;
      max-width: 900px;
      border: none;
      border-radius: 18px;
      overflow: hidden;
      box-shadow: 0 20px 40px rgba(0,0,0,0.2);
    }

    .card-header {
      background: linear-gradient(135deg, #0d6efd, #6610f2);
      color: white;
      font-size: 1.4rem;
      font-weight: bold;
      text-align: center;
      padding: 18px;
    }

    .table thead {
      background: #f1f3f5;
    }

    .table tbody tr:hover {
      background: #f8f9fa;
      transition: 0.2s;
    }

    .badge-id {
      background: #0d6efd;
    }
  </style>
<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        @include('admin-layout.sidebar')
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include('admin-layout.navbar')
            <br>
            <br>
            <br>

            <div class="card">
  
              <div class="card-header">
                Users Data from Database
              </div>

              <div class="card-body p-4">

                <div class="table-responsive">
                  <table class="table align-middle text-center">
                    
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                      </tr>
                    </thead>

                    <tbody>

                       @forelse($users as $user)
                          <tr>
                            <td><span class="badge badge-id">{{ $user->id }}</span></td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                          </tr>
                        @empty
                          <tr>
                            <td colspan="3">No users found</td>
                          </tr>
                        @endforelse
                    </tbody>

                  </table>
                </div>

              </div>
            </div>
            
        </div>
        
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    @include('admin-layout.head-links')
</body>

</html>