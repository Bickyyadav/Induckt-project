<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="./assets/css/styles.min.css" />
  <script src="https://kit.fontawesome.com/3c52d6d952.js" crossorigin="anonymous"></script>

  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>

  <style>
    .tab {
      font-size: 17px;
      margin-bottom: 2%;
      cursor: pointer;
      font-family: 'Urbanist', sans-serif;
    }
    .rainbow-line {
      height: 4px;
      background: linear-gradient(107.3deg, #6E38E0 13.39%, #FF5F36 77.64%);
      position: relative;
      top: -3px; /* Adjust this value to fit the line with your tabs */
      margin-top: 1%;
      margin-bottom: 1%;
      margin-left: -1%;
      margin-right: -1%;
      border-radius: 50px;
    }

    .table-wrapper {
      overflow-x: auto;
    }

    .table-head{
      font-family: 'Urbanist', sans-serif;
    }

    .table {
      width: 100%;
      border-collapse: collapse;
    }

    .table th, .table td {
      /* border: 1px solid #ddd; */
      padding: 8px;
    }

    .table th {
      /* background-color: #f2f2f2; */
    }

    .table tr:nth-child(even) {
      /* background-color: #f2f2f2; */
    }

    .table tr:hover {
      background-color: #ddd;
    }

    /* Style for select button */
    .tag-select {
        border-radius: 50px;
        padding: 5px;
        /* background-color: #f0f0f0;  */
        color: #fff; 
        border: none;
        cursor: pointer;
    }

    /* Style for dropdown options */
    .tag-select option {
        padding: 5px;
    }

    /* Style for selected option */
    .tag-select option:checked {
        background-color: #007bff; /* Change background color of selected option */
        color: #fff; /* Change text color of selected option */
    }

    
    .pagination > .active > a, .pagination > .active > a:focus, .pagination > .active > a:hover, .pagination > .active > span, .pagination > .active > span:focus, .pagination > .active > span:hover {
        z-index: 3;
        color: #fff;
        cursor: default;
        background-color: #DC3545;
        border-color: #DC3545;
    }
  </style>

</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?php include "./includes/sidebar.php";?>
    <!--  Sidebar End -->

    <!--  Main wrapper -->
    <div class="body-wrapper">

      <!--  Header Start -->
      <?php #include "./includes/header.php";?>
      <!--  Header End -->

      <div class="container-fluid">
        <div class="container-fluid">
          <div class="row">
            <h1 style="padding-bottom:1%;">Dashboard</h1>
            <div class="col-md-2">
              <div class="card" style="background-color:#F51202; padding:1%;">
                <div class="card-body">
                  <h2 class="card-title" style="color:white;">Total Application</h2>
                  <h1 style="color:white;">120</h1>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="card" style="background-color:#007DFC; padding:1%;">
                <div class="card-body">
                  <h2 class="card-title" style="color:white;">New Application</h2>
                  <h1 style="color:white;">10</h1>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3" style="padding-top:2%;">
          <h1 class="m-3">Applications</h1>
          <button id="addNewButton" class="btn" style="border-radius: 50px; padding: 10px 20px; background-color: #1E1E1E; color: white;">March 2023</button>
          
        </div>

        <div class="row">
          <div class="col-md-12 table-head">
            <span class="tab m-3 active" onclick="selectTab(this)" data-target="startup">Startup</span>
            <span class="tab m-3" onclick="selectTab(this)" data-target="investor">Investor</span>
            <span class="tab m-3" onclick="selectTab(this)" data-target="ecosystem">Ecosystem Partner</span>
          </div>
        </div>

        <div class="rainbow-line" id="rainbow-line"></div>

        <div class="table-wrapper">
          <!-- Startup Table -->
          <table class="table table-class startup-table table-section" id="startup-table" style="display: table;">
            <tbody class="startup-section">
              <tr class="table-head startup-head" style="background-color:#E9E9E9;">
                <th>Sl. No</th>
                <th>Name</th>
                <th>Type</th>
                <th>Startup Name</th>
                <th>Website</th>
                <th>Linkedin Profile</th>
                <th>Email Id</th>
                <th>Mobile Number</th>
                <th>Contact Mode</th>
                <th>Add Tags</th>
                <th>Action</th>

              </tr>
              <tr class="startup-rows">
                <td>1</td>
                <td>Karan Gupta</td>
                <td>Founder</td>
                <td>Wormos</td>
                <td>Wormos.com</td>
                <td>www.linkedin.com/wormos</td>
                <th>hello@wormos.com</th>
                <th>9783029837</th>
                <th>call</th>
                <th class="button-dropdown">
                    <select class="tag-select">
                        <option value="" selected disabled style="color: black !important;">---Select Tag---</option>
                        <option value="approved" class="btn btn-success">Approved</option>
                        <option value="rejected" class="btn btn-danger">Rejected</option>
                        <option value="process" class="btn btn-primary">Process</option>
                    </select>
                </th>

                <th class="button-dropdown">
                    <i class="far fa-edit"></i> 
                    <span style="margin-right: 20px;"></span> <!-- Add a span element with margin-right -->
                    <i class="fas fa-trash"></i>
                </th>
              </tr>

              <tr class="startup-rows">
                <td>2</td>
                <td>Shiva Kumar</td>
                <td>Founder</td>
                <td>XYZ</td>
                <td>XYZ.com</td>
                <td>www.linkedin.com/wormos</td>
                <th>hello@wormos.com</th>
                <th>9783029837</th>
                <th>email</th>
                <th class="button-dropdown">
                    <select class="tag-select">
                        <option value="" selected disabled style="color: black !important;">---Select Tag---</option>
                        <option value="approved" class="btn btn-success">Approved</option>
                        <option value="rejected" class="btn btn-danger">Rejected</option>
                        <option value="process" class="btn btn-primary">Process</option>
                    </select>
                </th>

                <th class="button-dropdown">
                    <i class="far fa-edit"></i> 
                    <span style="margin-right: 20px;"></span> <!-- Add a span element with margin-right -->
                    <i class="fas fa-trash"></i>
                </th>
              </tr>

              <tr class="startup-rows">
                <td>3</td>
                <td>Tarun Kumar</td>
                <td>Founder</td>
                <td>PQR</td>
                <td>PQR.com</td>
                <td>www.linkedin.com/wormos</td>
                <th>hello@wormos.com</th>
                <th>9783029837</th>
                <th>call</th>
                <th class="button-dropdown">
                    <select class="tag-select">
                        <option value="" selected disabled style="color: black !important;">---Select Tag---</option>
                        <option value="approved" class="btn btn-success">Approved</option>
                        <option value="rejected" class="btn btn-danger">Rejected</option>
                        <option value="process" class="btn btn-primary">Process</option>
                    </select>
                </th>

                <th class="button-dropdown">
                    <i class="far fa-edit"></i> 
                    <span style="margin-right: 20px;"></span> <!-- Add a span element with margin-right -->
                    <i class="fas fa-trash"></i>
                </th>
              </tr>

              <tr class="startup-rows">
                <td>4</td>
                <td>Chavi Sharma</td>
                <td>Founder</td>
                <td>TWS</td>
                <td>TWS.com</td>
                <td>www.linkedin.com/wormos</td>
                <th>hello@wormos.com</th>
                <th>9783029837</th>
                <th>call</th>
                <th class="button-dropdown">
                    <select class="tag-select">
                        <option value="" selected disabled style="color: black !important;">---Select Tag---</option>
                        <option value="approved" class="btn btn-success">Approved</option>
                        <option value="rejected" class="btn btn-danger">Rejected</option>
                        <option value="process" class="btn btn-primary">Process</option>
                    </select>
                </th>

                <th class="button-dropdown">
                    <i class="far fa-edit"></i> 
                    <span style="margin-right: 20px;"></span> <!-- Add a span element with margin-right -->
                    <i class="fas fa-trash"></i>
                </th>
              </tr>

              <tr class="startup-rows">
                <td>5</td>
                <td>Kritika Sharma</td>
                <td>Founder</td>
                <td>ABC</td>
                <td>ABC.com</td>
                <td>www.linkedin.com/wormos</td>
                <th>hello@wormos.com</th>
                <th>9783029837</th>
                <th>Whatsapp</th>
                <th class="button-dropdown">
                    <select class="tag-select">
                        <option value="" selected disabled style="color: black !important;">---Select Tag---</option>
                        <option value="approved" class="btn btn-success">Approved</option>
                        <option value="rejected" class="btn btn-danger">Rejected</option>
                        <option value="process" class="btn btn-primary">Process</option>
                    </select>
                </th>

                <th class="button-dropdown">
                    <i class="far fa-edit"></i> 
                    <span style="margin-right: 20px;"></span> <!-- Add a span element with margin-right -->
                    <i class="fas fa-trash"></i>
                </th>
              </tr>
              
              <tr class="startup-rows">
                <td>6</td>
                <td>Avinash Sharma</td>
                <td>Founder</td>
                <td>KLM</td>
                <td>KLM.com</td>
                <td>www.linkedin.com/wormos</td>
                <th>hello@wormos.com</th>
                <th>9783029837</th>
                <th>call</th>
                <th class="button-dropdown">
                    <select class="tag-select">
                        <option value="" selected disabled style="color: black !important;">---Select Tag---</option>
                        <option value="approved" class="btn btn-success">Approved</option>
                        <option value="rejected" class="btn btn-danger">Rejected</option>
                        <option value="process" class="btn btn-primary">Process</option>
                    </select>
                </th>

                <th class="button-dropdown">
                    <i class="far fa-edit"></i> 
                    <span style="margin-right: 20px;"></span> <!-- Add a span element with margin-right -->
                    <i class="fas fa-trash"></i>
                </th>
              </tr>

              <tr class="startup-rows">
                <td>7</td>
                <td>Ram  Kishan</td>
                <td>Founder</td>
                <td>PVR</td>
                <td>PVR.com</td>
                <td>www.linkedin.com/wormos</td>
                <th>hello@wormos.com</th>
                <th>9783029837</th>
                <th>email</th>
                <th class="button-dropdown">
                    <select class="tag-select">
                        <option value="" selected disabled style="color: black !important;">---Select Tag---</option>
                        <option value="approved" class="btn btn-success">Approved</option>
                        <option value="rejected" class="btn btn-danger">Rejected</option>
                        <option value="process" class="btn btn-primary">Process</option>
                    </select>
                </th>

                <th class="button-dropdown">
                    <i class="far fa-edit"></i> 
                    <span style="margin-right: 20px;"></span> <!-- Add a span element with margin-right -->
                    <i class="fas fa-trash"></i>
                </th>
              </tr>

              
              <!-- Add more rows for Startup -->
            </tbody>
          </table>

          <!-- Investor Table -->
          <table class="table table-class investor-table table-section" id="investor-table" style="display: none;">
            <tbody class="investor-section">
              <tr class="table-head investor-head" style="background-color:#E9E9E9;">
                <th>Sl. No</th>
                <th>Name</th>
                <th>Type</th>
                <th>Designation</th>
                <th>Website</th>
                <th>Linkedin Profile</th>
                <th>Email Id</th>
                <th>Mobile Number</th>
                <th>Contact Mode</th>
                <th>Add Tags</th>
                <th>Action</th>
              </tr>

              <tr class="investor-rows">
                <td>1</td>
                <td>Karan Gupta</td>
                <td>Individual</td>
                <td>Director</td>
                <td>Wormos.com</td>
                <td>www.linkedin.com/wormos</td>
                <th>hello@wormos.com</th>
                <th>9783029837</th>
                <th>call</th>
                <th class="button-dropdown">
                    <select class="tag-select">
                        <option value="" selected disabled style="color: black !important;">---Select Tag---</option>
                        <option value="approved" class="btn btn-success">Approved</option>
                        <option value="rejected" class="btn btn-danger">Rejected</option>
                        <option value="process" class="btn btn-primary">Process</option>
                    </select>
                </th>

                <th class="button-dropdown">
                    <i class="far fa-edit"></i> 
                    <span style="margin-right: 20px;"></span> <!-- Add a span element with margin-right -->
                    <i class="fas fa-trash"></i>
                </th>
              </tr>

              <tr class="investor-rows">
                <td>2</td>
                <td>Shiva Kumar</td>
                <td>Founder</td>
                <td>XYZ</td>
                <td>XYZ.com</td>
                <td>www.linkedin.com/wormos</td>
                <th>hello@wormos.com</th>
                <th>9783029837</th>
                <th>email</th>
                <th class="button-dropdown">
                    <select class="tag-select">
                        <option value="" selected disabled style="color: black !important;">---Select Tag---</option>
                        <option value="approved" class="btn btn-success">Approved</option>
                        <option value="rejected" class="btn btn-danger">Rejected</option>
                        <option value="process" class="btn btn-primary">Process</option>
                    </select>
                </th>

                <th class="button-dropdown">
                    <i class="far fa-edit"></i> 
                    <span style="margin-right: 20px;"></span> <!-- Add a span element with margin-right -->
                    <i class="fas fa-trash"></i>
                </th>
              </tr>

              <tr class="investor-rows">
                <td>3</td>
                <td>Tarun Kumar</td>
                <td>Founder</td>
                <td>PQR</td>
                <td>PQR.com</td>
                <td>www.linkedin.com/wormos</td>
                <th>hello@wormos.com</th>
                <th>9783029837</th>
                <th>call</th>
                <th class="button-dropdown">
                    <select class="tag-select">
                        <option value="" selected disabled style="color: black !important;">---Select Tag---</option>
                        <option value="approved" class="btn btn-success">Approved</option>
                        <option value="rejected" class="btn btn-danger">Rejected</option>
                        <option value="process" class="btn btn-primary">Process</option>
                    </select>
                </th>

                <th class="button-dropdown">
                    <i class="far fa-edit"></i> 
                    <span style="margin-right: 20px;"></span> <!-- Add a span element with margin-right -->
                    <i class="fas fa-trash"></i>
                </th>
              </tr>

              <tr class="investor-rows">
                <td>4</td>
                <td>Chavi Sharma</td>
                <td>Founder</td>
                <td>TWS</td>
                <td>TWS.com</td>
                <td>www.linkedin.com/wormos</td>
                <th>hello@wormos.com</th>
                <th>9783029837</th>
                <th>call</th>
                <th class="button-dropdown">
                    <select class="tag-select">
                        <option value="" selected disabled style="color: black !important;">---Select Tag---</option>
                        <option value="approved" class="btn btn-success">Approved</option>
                        <option value="rejected" class="btn btn-danger">Rejected</option>
                        <option value="process" class="btn btn-primary">Process</option>
                    </select>
                </th>

                <th class="button-dropdown">
                    <i class="far fa-edit"></i> 
                    <span style="margin-right: 20px;"></span> <!-- Add a span element with margin-right -->
                    <i class="fas fa-trash"></i>
                </th>
              </tr>

              <tr class="investor-rows">
                <td>5</td>
                <td>Kritika Sharma</td>
                <td>Founder</td>
                <td>ABC</td>
                <td>ABC.com</td>
                <td>www.linkedin.com/wormos</td>
                <th>hello@wormos.com</th>
                <th>9783029837</th>
                <th>Whatsapp</th>
                <th class="button-dropdown">
                    <select class="tag-select">
                        <option value="" selected disabled style="color: black !important;">---Select Tag---</option>
                        <option value="approved" class="btn btn-success">Approved</option>
                        <option value="rejected" class="btn btn-danger">Rejected</option>
                        <option value="process" class="btn btn-primary">Process</option>
                    </select>
                </th>

                <th class="button-dropdown">
                    <i class="far fa-edit"></i> 
                    <span style="margin-right: 20px;"></span> <!-- Add a span element with margin-right -->
                    <i class="fas fa-trash"></i>
                </th>
              </tr>
              
              <tr class="investor-rows">
                <td>6</td>
                <td>Avinash Sharma</td>
                <td>Founder</td>
                <td>KLM</td>
                <td>KLM.com</td>
                <td>www.linkedin.com/wormos</td>
                <th>hello@wormos.com</th>
                <th>9783029837</th>
                <th>call</th>
                <th class="button-dropdown">
                    <select class="tag-select">
                        <option value="" selected disabled style="color: black !important;">---Select Tag---</option>
                        <option value="approved" class="btn btn-success">Approved</option>
                        <option value="rejected" class="btn btn-danger">Rejected</option>
                        <option value="process" class="btn btn-primary">Process</option>
                    </select>
                </th>

                <th class="button-dropdown">
                    <i class="far fa-edit"></i> 
                    <span style="margin-right: 20px;"></span> <!-- Add a span element with margin-right -->
                    <i class="fas fa-trash"></i>
                </th>
              </tr>

              <tr class="investor-rows">
                <td>7</td>
                <td>Ram  Kishan</td>
                <td>Founder</td>
                <td>PVR</td>
                <td>PVR.com</td>
                <td>www.linkedin.com/wormos</td>
                <th>hello@wormos.com</th>
                <th>9783029837</th>
                <th>email</th>
                <th class="button-dropdown">
                    <select class="tag-select">
                        <option value="" selected disabled style="color: black !important;">---Select Tag---</option>
                        <option value="approved" class="btn btn-success">Approved</option>
                        <option value="rejected" class="btn btn-danger">Rejected</option>
                        <option value="process" class="btn btn-primary">Process</option>
                    </select>
                </th>

                <th class="button-dropdown">
                    <i class="far fa-edit"></i> 
                    <span style="margin-right: 20px;"></span> <!-- Add a span element with margin-right -->
                    <i class="fas fa-trash"></i>
                </th>
              </tr>

             
              <!-- Add more rows for Ecosystem Partner -->
            </tbody>
          </table>

          <!-- Ecosystem Partner Table -->
          <table class="table table-class ecosystem-table table-section" id="ecosystem-table" style="display: none;">
            <tbody class="ecosystem-section">
              <tr class="table-head ecosystem-head" style="background-color:#E9E9E9;">
                <th>Sl. No</th>
                <th>Name</th>
                <th>Organization Type</th>
                <th>Linkedin Profile</th>
                <th>Email Id</th>
                <th>Mobile Number</th>
                <th>Investment Mode</th>
                <th>Add Tags</th>
                <th>Action</th>
              </tr>

              <tr class="ecosystem-rows">
                <td>1</td>
                <td>Karan Gupta</td>
                <td>Founder</td>
                <td>www.linkedin.com/wormos</td>
                <th>hello@wormos.com</th>
                <th>9783029837</th>
                <th>xyz</th>
                <th class="button-dropdown">
                    <select class="tag-select">
                        <option value="" selected disabled style="color: black !important;">---Select Tag---</option>
                        <option value="approved" class="btn btn-success">Approved</option>
                        <option value="rejected" class="btn btn-danger">Rejected</option>
                        <option value="process" class="btn btn-primary">Process</option>
                    </select>
                </th>

                <th class="button-dropdown">
                    <i class="far fa-edit"></i> 
                    <span style="margin-right: 20px;"></span> <!-- Add a span element with margin-right -->
                    <i class="fas fa-trash"></i>
                </th>
              </tr>

              <tr class="ecosystem-rows">
                <td>2</td>
                <td>Shiva Kumar</td>
                <td>Founder</td>
                <td>www.linkedin.com/wormos</td>
                <th>hello@wormos.com</th>
                <th>9783029837</th>
                <th>abc</th>
                <th class="button-dropdown">
                    <select class="tag-select">
                        <option value="" selected disabled style="color: black !important;">---Select Tag---</option>
                        <option value="approved" class="btn btn-success">Approved</option>
                        <option value="rejected" class="btn btn-danger">Rejected</option>
                        <option value="process" class="btn btn-primary">Process</option>
                    </select>
                </th>

                <th class="button-dropdown">
                    <i class="far fa-edit"></i> 
                    <span style="margin-right: 20px;"></span> <!-- Add a span element with margin-right -->
                    <i class="fas fa-trash"></i>
                </th>
              </tr>
              <tr class="ecosystem-rows">
                <td>3</td>
                <td>Tarun Kumar</td>
                <td>Founder</td>
                <td>www.linkedin.com/wormos</td>
                <th>hello@wormos.com</th>
                <th>9783029837</th>
                <th>xyz</th>
                <th class="button-dropdown">
                    <select class="tag-select">
                        <option value="" selected disabled style="color: black !important;">---Select Tag---</option>
                        <option value="approved" class="btn btn-success">Approved</option>
                        <option value="rejected" class="btn btn-danger">Rejected</option>
                        <option value="process" class="btn btn-primary">Process</option>
                    </select>
                </th>

                <th class="button-dropdown">
                    <i class="far fa-edit"></i> 
                    <span style="margin-right: 20px;"></span> <!-- Add a span element with margin-right -->
                    <i class="fas fa-trash"></i>
                </th>
              </tr>
              <tr class="ecosystem-rows">
                <td>4</td>
                <td>Chavi Sharma</td>
                <td>Founder</td>
                <td>www.linkedin.com/wormos</td>
                <th>hello@wormos.com</th>
                <th>9783029837</th>
                <th>abc</th>
                <th class="button-dropdown">
                    <select class="tag-select">
                        <option value="" selected disabled style="color: black !important;">---Select Tag---</option>
                        <option value="approved" class="btn btn-success">Approved</option>
                        <option value="rejected" class="btn btn-danger">Rejected</option>
                        <option value="process" class="btn btn-primary">Process</option>
                    </select>
                </th>

                <th class="button-dropdown">
                    <i class="far fa-edit"></i> 
                    <span style="margin-right: 20px;"></span> <!-- Add a span element with margin-right -->
                    <i class="fas fa-trash"></i>
                </th>
              </tr>
              <tr class="ecosystem-rows">
                <td>5</td>
                <td>Kritika Sharma</td>
                <td>Founder</td>
                <td>www.linkedin.com/wormos</td>
                <th>hello@wormos.com</th>
                <th>9783029837</th>
                <th>xyz</th>
                <th class="button-dropdown">
                    <select class="tag-select">
                        <option value="" selected disabled style="color: black !important;">---Select Tag---</option>
                        <option value="approved" class="btn btn-success">Approved</option>
                        <option value="rejected" class="btn btn-danger">Rejected</option>
                        <option value="process" class="btn btn-primary">Process</option>
                    </select>
                </th>

                <th class="button-dropdown">
                    <i class="far fa-edit"></i> 
                    <span style="margin-right: 20px;"></span> <!-- Add a span element with margin-right -->
                    <i class="fas fa-trash"></i>
                </th>
              </tr>
              <tr class="ecosystem-rows">
                <td>6</td>
                <td>Avinash Sharma</td>
                <td>Founder</td>
                <td>www.linkedin.com/wormos</td>
                <th>hello@wormos.com</th>
                <th>9783029837</th>
                <th>xyz</th>
                <th class="button-dropdown">
                    <select class="tag-select">
                        <option value="" selected disabled style="color: black !important;">---Select Tag---</option>
                        <option value="approved" class="btn btn-success">Approved</option>
                        <option value="rejected" class="btn btn-danger">Rejected</option>
                        <option value="process" class="btn btn-primary">Process</option>
                    </select>
                </th>

                <th class="button-dropdown">
                    <i class="far fa-edit"></i> 
                    <span style="margin-right: 20px;"></span> <!-- Add a span element with margin-right -->
                    <i class="fas fa-trash"></i>
                </th>
              </tr>
              <tr class="ecosystem-rows">
                <td>7</td>
                <td>Ram Kishan</td>
                <td>Founder</td>
                <td>www.linkedin.com/wormos</td>
                <th>hello@wormos.com</th>
                <th>9783029837</th>
                <th>xyz</th>
                <th class="button-dropdown">
                    <select class="tag-select">
                        <option value="" selected disabled style="color: black !important;">---Select Tag---</option>
                        <option value="approved" class="btn btn-success">Approved</option>
                        <option value="rejected" class="btn btn-danger">Rejected</option>
                        <option value="process" class="btn btn-primary">Process</option>
                    </select>
                </th>

                <th class="button-dropdown">
                    <i class="far fa-edit"></i> 
                    <span style="margin-right: 20px;"></span> <!-- Add a span element with margin-right -->
                    <i class="fas fa-trash"></i>
                </th>
              </tr>
             
              <!-- Add more rows for Ecosystem Partner -->
            </tbody>
          </table>

        </div>
   
        <div class="d-flex align-items-center justify-content-end mb-3">
            <p class="m-2">Display</p>
            <!-- Show Numbers Of Rows -->
            <input class="form-control" type="number" name="state" id="maxRows" style="width: 65px;">

            <ul class="pagination" style="margin-left:1%;">
                <li data-page="prev">
                    <span>&lt;<span class="sr-only">(current)</span></span>
                </li>
                <li data-page="next" id="prev">
                    <span>&gt;<span class="sr-only">(current)</span></span>
                </li>
            </ul>
        </div>

      </div>
    </div>
  </div>

  <!-- Select Add Tag Buttons  -->
  <script>
      // JavaScript to change select button color according to selected option
      document.addEventListener("DOMContentLoaded", function() {
          var rowTypes = ['.startup-rows', '.investor-rows', '.ecosystem-rows'];

          rowTypes.forEach(function(rowType) {
              var rows = document.querySelectorAll(rowType);

              rows.forEach(function(row) {
                  var select = row.querySelector('.tag-select');

                  // Check if there's a selected option stored in local storage for this row
                  var storedOption = localStorage.getItem('selectedOption_row_' + row.dataset.rowId);
                  if (storedOption) {
                      select.value = storedOption;
                      applyButtonColor(select);
                  }

                  // Event listener for change event
                  select.addEventListener('change', function() {
                      applyButtonColor(select);
                      // Store the selected option in local storage for this row
                      localStorage.setItem('selectedOption_row_' + row.dataset.rowId, select.value);
                  });
              });
          });

          // Function to apply button color
          function applyButtonColor(select) {
              var selectedOption = select.options[select.selectedIndex];
              var optionClass = selectedOption.getAttribute('class');
              var buttonClasses = optionClass.split(' ');
              for (var i = 0; i < buttonClasses.length; i++) {
                  if (buttonClasses[i].startsWith('btn-')) {
                      var color = buttonClasses[i].substring(4); // Extract color from class name
                      select.style.backgroundColor = '';
                      select.style.color = '';
                      select.classList.remove('btn-success', 'btn-danger', 'btn-primary'); // Remove all button classes
                      select.classList.add('btn', 'btn-' + color); // Add appropriate button class
                      break; // Exit loop after finding the color class
                  }
              }
          }
      });
  </script>




  <!-- Table Tab Section  -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Set the first tab as active by default
      var firstTab = document.querySelector('.tab.active');
      selectTab(firstTab);
    });

    function selectTab(tab) {
      // Remove 'active' class from all tabs
      var tabs = document.querySelectorAll('.tab');
      tabs.forEach(function(tab) {
        tab.classList.remove('active');
        tab.style.fontWeight = 'normal'; // Reset font weight
        tab.style.color = '#898989'; // Set font color to black for inactive tabs
      });

      // Add 'active' class to the clicked tab
      tab.classList.add('active');
      tab.style.color = '#000'; // Set font color to black for active tab

      // Position the rainbow line below the clicked tab
      positionRainbowLine(tab);

      // Hide all table sections
      var tableSections = document.querySelectorAll('.table-wrapper .table-section');
      tableSections.forEach(function(table) {
        table.style.display = "none";
      });

      // Show the corresponding table section for the clicked tab
      var target = tab.getAttribute('data-target');
      var activeTable = document.querySelectorAll('.' + target + '-table.table-section');
      activeTable.forEach(function(table) {
        table.style.display = "table";
      });
    }

    function positionRainbowLine(tab) {
      var rainbowLine = document.getElementById('rainbow-line');
      rainbowLine.style.width = tab.offsetWidth + 'px';
      rainbowLine.style.left = tab.offsetLeft + 'px';
    }
  </script>

  <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/sidebarmenu.js"></script>
  <script src="./assets/js/app.min.js"></script>
  <script src="./assets/js/table.js"></script>
  <script src="./assets/libs/simplebar/dist/simplebar.js"></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
	<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script
</body>

</html>