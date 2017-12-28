<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">QB Icon Here</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active">
          <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Customers <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li>
                <a  data-toggle="modal" data-target="#myModal">Sales Orders</a>
              </li>
              <li>
                <a href="#">Receive Payments</a>
              </li>
              <li>
                <a href="#">Create Invoices</a>
              </li>
              <li>
                <a href="#">Create Statements</a>
              </li>
            </ul>


                <!-- Modal -->
                  <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Data Trucking Slip</h4>
                        </div>
                        <div class="modal-body">
                          <input type="text" name="" style="border-top : 0;border-left: 0;border-right: 0"/>                   
                          <br/>
                          <label>Customer Name</label>
                          <div class="row">
                            <div class="col-md-6">
                              <input type="text" name="" style="border-top : 0;border-left: 0;border-right: 0"/>              
                              <br/>
                              <label>Plate Number/ GTS Number</label>
                            </div>
                            <div class="col-md-6">
                              <input type="text" name="" style="border-top : 0;border-left: 0;border-right: 0"/>
                              <br/>
                                <label>Date Of DTS Form</label>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                      
                    </div>
                  </div>








          </div>
        </li>
        <li>
          <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Vendors <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li>
                <a href="#">Create Purchase Orders</a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">List <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li>
                <a href="#">Class</a>
              </li>
              <li>
                <a href="#">Item List</a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Banking <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li>
                <a href="#">Make Deposits</a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Company <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li>
                <a href="#">Set Up Users and Roles</a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</body>

</html>