<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-/assets-path="..//assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>PartsNoon | Dashboard</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="/assets/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/assets/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/assets/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="..//assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/assets/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->



    <!-- Helpers -->
    <script src="/assets/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="..//assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        @include('admin.statics.sidebar')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
          class="layout-navbar container-fluid navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center mt-3" id="navbar-collapse">
              <h4 class="">
                Categories
              </h4>
              <!-- Search -->
              <div class="navbar-nav align-items-center">

              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">{{Auth::user()->name}}</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>

                      <div class="dropdown-divider"></div>
                    <li>
                      <a class="dropdown-item" href="/admin/logout">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item lh-1 me-3">
                  <p>
                    {{Auth::user()->name}}
                    <br>
                    <span class="text-success">
                      {{Auth::user()->role}}
                    </span>
                  </p>
                  <p></p>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-fluid flex-grow-1 container-p-y">
              <!-- Layout Demo -->




<div class="card">
  <h2 class="card-header text-center">Categories</h2>
  <p class="text-center">Total Categories: {{ $categories->total() }}</p>
  <div class="card-body">
    <div class="search mt-2 mb-5">
      <div class="buttons mb-2">
        <a href="/admin/category/create" type="button" class="btn btn-outline-primary btn-sm">+ Add Category</a>
        {{-- <a href="#" type="button" class="btn btn-outline-danger btn-sm">Archieve <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAjZJREFUSEvVlU1rE1EUhp8zBeMHJgtRLEQoCgqNCLpyIVYRpLhQUCkiuHMhFErnJogo1YALkXTu0OAvcKEbCy78Al0VFFQUQbQupCCCIBGRbBpIMkcmxNo0zcyodOHdnve+z33PnTNXWOElK+xPLEA97yAi38SYt39zmHiAtQ+Aw0CJanVCisXGn4CSAF4Du9umzxEZFtf9kRQSCVDf70f1S4eZ6ktEhsSY+SSQaIDn3UBktMtI9aLk89f+CaDWuoDtYfJdjNkQ1rRczlKv75J8PryrrrVsAvX946hOR54wCAakUPik1k4Co4jkxHXnlu7pAujU1E6azRfAmkiAyKC47qxa+xAYBqbFmJORAC0WV5FOh19NLra/qdR6Go1+ms0PgNPSB0FOCoX3i/d2JFDfP4PqzVhzeIPjnCMIbgFbF/SqFySfv94bYO194EgCQBVId9+oPBbXDYdyYXUmsPYzkF1Ur7SNUgmgoWROjNkWBagBv81ETqM6BuxNCJgXY9YmTRCQSmWo1SYQOZ8Q8FWM2RwFuAOcaAsqYswmnZwcxHHeJQQ8FWP29QZ43iFEnrQFTbLZlIyMNNXau8CxWIjIZXHdqz0BYUGtvQ2caokcZ0jGx2e0XN5Io/EK2BIBqSCyfemftnuSS6V19PXNAHuAZ2Sz+1spfH8A1Xs9hrAOHBVjHkVO8q+iFourSacLwAEg7OuVVrpw0jOZMVTPAjuA8JWbBS6JMR+XSxf74MT2PUbw/wN+AmTpvRlizY8RAAAAAElFTkSuQmCC"/></a> --}}
    </div>
      <form action="{{ route('categories.search') }}" method="GET" class="form-inline">
      @csrf
        <div class="input-group">
          <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
          <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31" name="search" value="{{ old('search') }}">
          <button type="submit" class="btn btn-primary ml-2">Search</button>
        </div>
      </form>
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Image</th>
            <th class="text-center">Actions</th> <!-- Updated column heading -->
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach ($categories as $category)
            <tr id="deleteRow{{$category->id}}">
              <td>{{ $category->id }}</td>
              <td>{{ $category->name }}</td>
              <td>{{ $category->description }}</td>
              <td>
                <img src="{{ asset("storage/".$category->image)}}" alt="" style="max-height: 100px; border-radius: 5px">
              </td>
              <td class="text-center"> <!-- Updated table cell -->
                <div class="btn-group">
                  <form action="/admin/category/{{$category->id}}" method="POST">
                    @method('DELETE')
                    @csrf
                  <a href="/admin/category/products/{{$category->id}}" type="button" class="btn btn-outline-primary btn-sm">Products</a> <!-- Added btn-sm class -->
                  <a href="/admin/category/{{$category->id}}/edit" type="button" class="btn btn-outline-primary btn-sm">Edit</a> <!-- Added btn-sm class -->
                  <button type="button" onclick="showConfirmationModal({{$category->id}})" class="btn btn-outline-danger btn-sm">Delete</button>
                </form>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="d-flex justify-content-center mb-1 mt-4">
      <nav aria-label="Page navigation">
        <ul class="pagination">

          <!-- First Page Link -->
          <li class="page-item {{ $categories->onFirstPage() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $categories->url(1) }}" aria-label="First">
              <span aria-hidden="true">&laquo;&laquo;</span>
              <span class="sr-only"></span>
            </a>
          </li>

          <!-- Previous Page Link -->
          <li class="page-item {{ $categories->onFirstPage() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $categories->previousPageUrl() }}" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only"></span>
            </a>
          </li>

          <!-- Pagination Links -->
          @php
              $totalPages = $categories->lastPage();
              $currentPage = $categories->currentPage();
              $visiblePages = 5; // Number of visible pages (adjust as needed)
              $halfVisible = floor($visiblePages / 2);
              $startPage = max(min($currentPage - $halfVisible, $totalPages - $visiblePages + 1), 1);
              $endPage = min($startPage + $visiblePages - 1, $totalPages);
          @endphp

          @for ($page = $startPage; $page <= $endPage; $page++)
            <li class="page-item {{ $page == $categories->currentPage() ? 'active' : '' }}">
              <a class="page-link" href="{{ $categories->url($page) }}">{{ $page }}</a>
            </li>
          @endfor

          <!-- Next Page Link -->
          <li class="page-item {{ $categories->currentPage() == $categories->lastPage() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $categories->nextPageUrl() }}" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only"></span>
            </a>
          </li>

          <!-- Last Page Link -->
          <li class="page-item {{ $categories->currentPage() == $categories->lastPage() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $categories->url($categories->lastPage()) }}" aria-label="Last">
              <span aria-hidden="true">&raquo;&raquo;</span>
              <span class="sr-only"></span>
            </a>
          </li>

        </ul>
      </nav>
    </div>

    <!-- Page x of y -->
    <div class="d-flex justify-content-center">
      <p>Page {{ $categories->currentPage() }} of {{ $categories->lastPage() }}</p>
    </div>

  </div>
</div>


<!-- Confirmation Modal -->
<div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmationModalLabel">Confirm Deletion</h5>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this category?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" id="confirmDeleteBtn" class="btn btn-danger">Delete</button>
      </div>
    </div>
  </div>
</div>








              <!--/ Layout Demo -->
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="mb-2 mb-md-2" style="text-align: center;">
                ©
                <script>
                  document.write(new Date().getFullYear());
                </script>
                , powered by
                <a href="https://wa.me/201112377882" target="_blank" class="footer-link fw-bolder">Nassef</a>,
                all rights reserved.
              </div>
          </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js /assets/vendor/js/core.js -->
    <script src="/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/assets/vendor/libs/popper/popper.js"></script>
    <script src="/assets/vendor/js/bootstrap.js"></script>
    <script src="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="/assets/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="/assets/js/main.js"></script>

    <!-- Page JS -->
    <script>
      function showConfirmationModal(categoryId) {
        var modal = $('#confirmationModal');
        var cancelBtn = modal.find('.btn-secondary');
        var confirmBtn = modal.find('#confirmDeleteBtn');

        cancelBtn.off('click').on('click', function() {
          modal.modal('hide');
        });

        confirmBtn.off('click').on('click', function() {
          deleteCategory(categoryId);
          modal.modal('hide');
        });

        modal.modal('show');
      }

      function deleteCategory(categoryId) {
        $.ajax({
          url: '/admin/category/' + categoryId,
          type: 'DELETE',
          data: {
            _token: '{{ csrf_token() }}'
          },
          success: function() {
            $('#deleteRow' + categoryId).remove();
          },
          error: function() {
            $('#deleteRow' + categoryId).remove();
          }
        });
      }
    </script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
