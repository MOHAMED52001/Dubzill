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
              Products
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




              <div class="col-xl">
                <div class="card mb-4">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-4">Edit {{$product->name}} Product</h4>
                    <small class="text-muted float-end">Edit Products</small>
                  </div>
                  <div class="card-body">
                    <form action="/admin/product/{{$product->id}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="_method" value="PUT">
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Name</label>
                        <input type="text" class="form-control" id="basic-default-fullname" placeholder="Product" name="name" value="{{$product->name}}">
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Brand</label>
                        <select id="smallSelect" class="form-select form-select-sm" name="brand_id">
                          <option>select brand</option>
                          @foreach ($brands as $brand)
                          <option value="{{ $brand->id }}">{{$brand->name}}</option>
                          @endforeach
                          @error('brand')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        </select>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Weight</label>
                        <input type="text" class="form-control" id="basic-default-fullname" placeholder="weight" name="weight"  value="{{$product->weight}}">
                        @error('dimensions')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Dimensions</label>
                        <input type="text" class="form-control" id="basic-default-fullname" placeholder="dimensions" name="dimensions"  value="{{$product->dimensions}}">
                        @error('dimensions')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div>
                        <label for="smallSelect" class="form-label">Category</label>
                        <select id="smallSelect" class="form-select form-select-sm" name="category_id">
                          <option value="{{$product->category_id}}">select category</option>
                          @foreach ($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                          @error('category_id')
                          <div class="text-danger">{{ $message }}</div>
                          @enderror
                        </select>
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-message">Description</label>
                        <textarea id="basic-default-message" class="form-control" placeholder="Please type Product Description Here..." name="description"> {{$product->description}}</textarea>
                        @error('description')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Quantity Available</label>
                        <input type="number" class="form-control" id="basic-default-fullname" placeholder="quantity" name="quantity_available"  value="{{$product->quantity_available}}">
                        @error('quantity_available')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-company">image</label>
                        <div id="imagePreview"></div>
                        <input type="file" class="form-control" id="imageInput" name="image[]" accept="image/*" placeholder="Upload Image" onchange="previewImage(event)"  value="{{$product->image}}">
                        @error('image')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div id="dynamicInputsContainer"></div>
                      <button class="btn btn-outline-dark mb-3" type="button" id="addInputButton">+ More Images</button>
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Price</label>
                        <input type="text" class="form-control" id="basic-default-fullname" placeholder="price" name="price"  value="{{$product->price}}">
                        @error('price')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Old Price</label>
                        <input type="text" class="form-control" id="basic-default-fullname" placeholder="old price" name="old_price" value="{{$product->old_price}}">
                        @error('old_price')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">rate</label>
                        <input type="text" class="form-control" id="basic-default-fullname" placeholder="rate" name="rate" value="{{$product->rate}}">
                        @error('rate')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <button type="submit" class="btn btn-primary">Edit Product</button>
                    </form>
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
  function previewImage(event) {
var input = event.target;
var preview = document.getElementById('imagePreview');

if (input.files && input.files[0]) {
var reader = new FileReader();

reader.onload = function (e) {
  preview.innerHTML = '<img src="' + e.target.result + '" alt="Image Preview" class="img-thumbnail">';
};

reader.readAsDataURL(input.files[0]);
} else {
preview.innerHTML = '';
}
}

document.getElementById('addInputButton').addEventListener('click', function() {
  var inputContainer = document.createElement('div');
  inputContainer.className = 'mb-3';

  var label = document.createElement('label');
  label.className = 'form-label';
  label.textContent = 'image';

  var div = document.createElement('div');
  div.id = 'imagePreview';

  var input = document.createElement('input');
  input.type = 'file';
  input.className = 'form-control';
  input.name = 'image[]'; // Set the name attribute to "image[]"
  input.accept = 'image/*';
  input.placeholder = 'Upload Image';
  input.onchange = previewImage;
  input.value = '{{ old("image") }}';

  inputContainer.appendChild(label);
  inputContainer.appendChild(div);
  inputContainer.appendChild(input);

  document.getElementById('dynamicInputsContainer').appendChild(inputContainer);
});

</script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
