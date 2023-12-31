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


    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/assets/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <style>
          .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
    }

    .switch input[type="checkbox"] {
      opacity: 0;
      width: 0;
      height: 0;
    }

    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }

    input[type="checkbox"]:checked + .slider {
      background-color: #2196F3;
    }

    input[type="checkbox"]:checked + .slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }

    </style>


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
              orders
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
  <h2 class="card-header text-center">order</h2>
  <p class="text-center">Total orders: {{ $orders->total() }}</p>
  <div class="card-body">
    <div class="search mt-2 mb-5">
      <div class="buttons mb-2">
        {{-- <a href="#" type="button" class="btn btn-outline-danger btn-sm">Archieve <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAjZJREFUSEvVlU1rE1EUhp8zBeMHJgtRLEQoCgqNCLpyIVYRpLhQUCkiuHMhFErnJogo1YALkXTu0OAvcKEbCy78Al0VFFQUQbQupCCCIBGRbBpIMkcmxNo0zcyodOHdnve+z33PnTNXWOElK+xPLEA97yAi38SYt39zmHiAtQ+Aw0CJanVCisXGn4CSAF4Du9umzxEZFtf9kRQSCVDf70f1S4eZ6ktEhsSY+SSQaIDn3UBktMtI9aLk89f+CaDWuoDtYfJdjNkQ1rRczlKv75J8PryrrrVsAvX946hOR54wCAakUPik1k4Co4jkxHXnlu7pAujU1E6azRfAmkiAyKC47qxa+xAYBqbFmJORAC0WV5FOh19NLra/qdR6Go1+ms0PgNPSB0FOCoX3i/d2JFDfP4PqzVhzeIPjnCMIbgFbF/SqFySfv94bYO194EgCQBVId9+oPBbXDYdyYXUmsPYzkF1Ur7SNUgmgoWROjNkWBagBv81ETqM6BuxNCJgXY9YmTRCQSmWo1SYQOZ8Q8FWM2RwFuAOcaAsqYswmnZwcxHHeJQQ8FWP29QZ43iFEnrQFTbLZlIyMNNXau8CxWIjIZXHdqz0BYUGtvQ2caokcZ0jGx2e0XN5Io/EK2BIBqSCyfemftnuSS6V19PXNAHuAZ2Sz+1spfH8A1Xs9hrAOHBVjHkVO8q+iFourSacLwAEg7OuVVrpw0jOZMVTPAjuA8JWbBS6JMR+XSxf74MT2PUbw/wN+AmTpvRlizY8RAAAAAElFTkSuQmCC"/></a> --}}
    </div>
    <form action="{{ route('orders.search') }}" method="GET" class="form-inline">
    @csrf
    <div class="input-group">
        <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
        <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31" name="search" value="{{ request('search') }}">
        <button type="submit" class="btn btn-primary ml-2">Search</button>
    </div>
</form>
    </div>
    <div class="table-responsive text-nowrap">
    <a href="{{ route('export.new-orders') }}" class="btn btn-primary">Export Orders</a>

      <table class="table">
        <thead>
          <tr>
            <th>id</th>
            <th>Area</th>
            <th>Address</th>
            <th>Customer Name</th>
            <th>Customer Phone</th>
            <th>Tracking Number</th>
            <th>Is Paid?</th>
            <th>Total Price</th>
            <th>Ordered At</th>
            <th>STATUS</th>
            <th>Done?</th>
            <th class="text-center">Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach ($orders as $order)
            <tr id="deleteRow{{$order->id}}">
              <td>{{ $order->id }}</td>
              <td>{{ $order->area_name }}</td>
              <td>{{ $order->shipping_address }}</td>
              <td>{{ $order->user_name }}</td>
              <td>{{ $order->user_phone }}</td>
              <td>{{ $order->tracking_number }}</td>
              <td>
                <input
                data-id="{{ $order->transaction_status }}"
                class="toggle-class-paid form-check-input"
                type="checkbox"
                data-toggle="toggle"
                data-onstyle="success"
                data-offstyle="danger"
                data-on="Done"
                data-off="Not Done"
                {{ $order->transaction_status ? 'checked' : '' }}
                onclick="paid({{ $order->id }})"
              >
              </td>
              <td>{{ $order->total_price }}</td>
              <td>{{ $order->created_at }}</td>
              <td>  <button id="statusBtn{{$order->id}}" class="btn btn-sm status-btn @if ($order->status == 'pending') btn-primary @elseif ($order->status == 'shipped') btn-warning @elseif ($order->status == 'delivered') btn-success @endif" onclick="showStatusModal({{$order->id}})">
    {{$order->status}}
  </button></td>
              <td>
                  <input
                    data-id="{{ $order->id }}"
                    class="toggle-class form-check-input  "
                    type="checkbox"
                    data-toggle="toggle"
                    data-onstyle="success"
                    data-offstyle="danger"
                    data-on="Done"
                    data-off="Not Done"
                    {{ $order->is_done ? 'checked' : '' }}
                  >
              </td>
              <td class="text-center">
                <div class="btn-group">
                  <form action="/admin/order/{{$order->id}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <a href="/admin/order/{{$order->id}}/products" type="button" class="btn btn-outline-secondary btn-sm">Products</a>
                    <button type="button" onclick="showConfirmationModal({{$order->id}})" class="btn btn-outline-danger btn-sm">Delete</button>
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
          <li class="page-item {{ $orders->onFirstPage() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $orders->url(1) }}" aria-label="First">
              <span aria-hidden="true">&laquo;&laquo;</span>
              <span class="sr-only">First</span>
            </a>
          </li>

          <!-- Previous Page Link -->
          <li class="page-item {{ $orders->onFirstPage() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $orders->previousPageUrl() }}" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>

          <!-- Pagination Links -->
          @php
              $totalPages = $orders->lastPage();
              $currentPage = $orders->currentPage();
              $visiblePages = 5; // Number of visible pages (adjust as needed)
              $halfVisible = floor($visiblePages / 2);
              $startPage = max(min($currentPage - $halfVisible, $totalPages - $visiblePages + 1), 1);
              $endPage = min($startPage + $visiblePages - 1, $totalPages);
          @endphp

          @for ($page = $startPage; $page <= $endPage; $page++)
            <li class="page-item {{ $page == $orders->currentPage() ? 'active' : '' }}">
              <a class="page-link" href="{{ $orders->url($page) }}">{{ $page }}</a>
            </li>
          @endfor

          <!-- Next Page Link -->
          <li class="page-item {{ $orders->currentPage() == $orders->lastPage() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $orders->nextPageUrl() }}" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>

          <!-- Last Page Link -->
          <li class="page-item {{ $orders->currentPage() == $orders->lastPage() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $orders->url($orders->lastPage()) }}" aria-label="Last">
              <span aria-hidden="true">&raquo;&raquo;</span>
              <span class="sr-only">Last</span>
            </a>
          </li>

        </ul>
      </nav>
    </div>

    <!-- Page x of y -->
    <div class="d-flex justify-content-center">
      <p>Page {{ $orders->currentPage() }} of {{ $orders->lastPage() }}</p>
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
        <p>Are you sure you want to delete this orders?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" id="confirmDeleteBtn" class="btn btn-danger">Delete</button>
      </div>
    </div>
  </div>
</div>

<!-- Status Modal -->
<div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="statusLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="confirmationModalLabel">Order Status.</h4>
      </div>

      <div class="modal-footer text-center" style="justify-content: center;">
        <div><button type="button" id="pending" class="btn btn-outline-primary">pending</button></div>
      </div>
      <div class="modal-footer text-center" style="justify-content: center;">
        <div><button type="button" id="shipped" class="btn btn-outline-warning">shipped</button></div>
      </div>
      <div class="modal-footer text-center" style="justify-content: center;">
        <div><button type="button" id="delivered" class="btn btn-outline-success">Delivered</button></div>
      </div>
      <div class="modal-footer text-center" style="justify-content: center;">
        <div class=" text-left"><button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button></div>
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

    function showStatusModal(ProductId) {
      // console.log(ProductId);

        var modal = $('#statusModal');
        var pindingBtn = modal.find('.btn-outline-primary');
        var shippedBtn = modal.find('.btn-outline-warning');
        var deliveredBtn = modal.find('.btn-outline-success');
        var cancelBtn = modal.find('.btn-danger');



        cancelBtn.off('click').on('click', function() {
          modal.modal('hide');
        });


        pindingBtn.off('click').on('click', function() {
          PendingOrder(ProductId);
          console.log("oddddddd");

          modal.modal('hide');
        });

        shippedBtn.off('click').on('click', function() {
          shippedOrder(ProductId);
          modal.modal('hide');
        });

        deliveredBtn.off('click').on('click', function() {
          DeliveredOrder(ProductId);
          modal.modal('hide');
        });

        modal.modal('show');
      }

      function PendingOrder(ProductId) {
        $.ajax({
          url: '/admin/pending-order/' + ProductId,
          type: 'GET',
          data: {
            _token: '{{ csrf_token() }}'
          },
          success: function() {
            $('#statusBtn' + ProductId)
              .removeClass('btn-warning btn-success')
              .addClass('btn-primary')
              .text('Pending');
            console.log(ProductId);
          },
          error: function() {
            $('#pending').text('Pending');
          }
        });
      }

      function shippedOrder(ProductId) {
        $.ajax({
          url: '/admin/shipped-order/' + ProductId,
          type: 'GET',
          data: {
            _token: '{{ csrf_token() }}'
          },
          success: function() {
            $('#statusBtn' + ProductId)
              .removeClass('btn-primary btn-success')
              .addClass('btn-warning')
              .text('Shipped');
            console.log(ProductId);
          },
          error: function() {
            $('#pending').text('Pending');
          }
        });
      }


      function DeliveredOrder(ProductId) {
        $.ajax({
          url: '/admin/delivered-order/' + ProductId,
          type: 'GET',
          data: {
            _token: '{{ csrf_token() }}'
          },
          success: function() {
            $('#statusBtn' + ProductId)
              .removeClass('btn-primary btn-warning')
              .addClass('btn-success')
              .text('Delivered');
            console.log(ProductId);
          },
          error: function() {
            $('#pending').text('Pending');
          }
        });
      }


      function showConfirmationModal(ProductId) {
        var modal = $('#confirmationModal');
        var cancelBtn = modal.find('.btn-secondary');
        var confirmBtn = modal.find('#confirmDeleteBtn');

        cancelBtn.off('click').on('click', function() {
          modal.modal('hide');
        });

        confirmBtn.off('click').on('click', function() {
          deleteProduct(ProductId);
          modal.modal('hide');
        });

        modal.modal('show');
      }

      function deleteProduct(ProductId) {
        $.ajax({
          url: '/admin/order/' + ProductId,
          type: 'DELETE',
          data: {
            _token: '{{ csrf_token() }}'
          },
          success: function() {
            $('#deleteRow' + ProductId).remove();
          },
          error: function() {
            $('#deleteRow' + ProductId).remove();
          }
        });
      }

$(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0;
        var order_id = $(this).data('id');

        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/admin/order/' + order_id + '/done',
            data: {'status': status, 'user_id': order_id},
            success: function(data){
              console.log(url)
            }
        });
    })
  })
  function paid(PrderId) {
            $('.toggle-class-paid').change(function() {
                $.ajax({
                type: "GET",
                url: '/admin/paid-order/' + PrderId,
                });
            });
        }
</script>


    </script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
