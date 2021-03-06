<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js">
    </script>
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/a076d05399.js">
    </script>
    <style type="text/css">
      .btn_modal_bs4{
    		display: none;
    	}
    </style>
    <title>
      Document
    </title>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">
            Link 1
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            Link 2
          </a>
        </li>
      </ul>
      <!-- Navbar text-->
      <span class="navbar-text">
        Navbar text
      </span>
    </nav>
    <div class="container-fluid pb-4 pt-4">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nam suscipit quam eligendi adipisci deserunt illum delectus labore, saepe tempora animi et vel sed velit in, illo fugiat, culpa sequi!	Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nam suscipit quam eligendi adipisci deserunt illum delectus labore, saepe tempora animi et vel sed velit in, illo fugiat, culpa sequi!	Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nam suscipit quam eligendi adipisci deserunt illum delectus labore, saepe tempora animi et vel sed velit in, illo fugiat, culpa sequi!	Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nam suscipit quam eligendi adipisci deserunt illum delectus labore, saepe tempora animi et vel sed velit in, illo fugiat, culpa sequi!	Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat nam suscipit quam eligendi adipisci deserunt illum delectus labore, saepe tempora animi et vel sed velit in, illo fugiat, culpa sequi!
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-3">
          <ul class="list-group li_elemento">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Inbox
              <span class="badge badge-primary badge-pill">
                12
              </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Ads
              <span class="badge badge-primary badge-pill">
                50
              </span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Junk
              <span class="badge badge-primary badge-pill">
                99
              </span>
            </li>
          </ul>
        </div>
        <div class="col-9">
          <h3>
            titulo
          </h3>
          <p>
          </p>
          <i class="fas fa-pencil-alt">
          </i>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <!-- Button to Open the Modal -->
      <button class="btn btn-primary btn_modal_bs4" data-target="#myModal" data-toggle="modal" type="button">
        Open modal
      </button>
      <!-- The Modal -->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">
                Modal Heading
              </h4>
              <button class="close" data-dismiss="modal" type="button">
                ??
              </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body cuerpo">
              Modal body..
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
              <button class="btn btn-secondary" data-dismiss="modal" type="button">
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="./js/index.js" type="text/javascript">
    </script>
  </body>
</html>
