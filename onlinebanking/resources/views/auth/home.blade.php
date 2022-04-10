 <!DOCTYPE html>
 <html>
     <head>
         <title>Home</title>
         <link rel="stylesheet" href="dashboard.css">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
         <style>
             .container2 h2{
                 display:flex;
                 justify-content: center;
                 padding-top:10px;
             }
             .table{

                 margin:10px;
                 width:50%;
                 float: left;

             }
             .homeloan h3{
                 display:flex;
                 justify-content: center;
                 padding-top: 20px;

             }
             .homeloan a{
                 width:30%;
                 margin:10px;

             }
         </style>
     </head>
     <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">TSM Banking</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

              <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Home</span></a>
                <a class="nav-item nav-link" href="#">About</a>
                <a class="nav-item nav-link" href="#">Contact</a>

                <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">{{ $data->accountnum }}</a>
                <a class="nav-item nav-link" href="logout">Logout</a>
              </div>
            </div>
          </nav>
         <div class="container2">
             <h2>User Details</h2>
             <h4>Welcome to {{ $data->fullname }}!!</h4>
             <marquee direction="left">Avoid using public computers or public wireless access points for online banking and other activities involving sensitive information when possible.
                Always “sign out” or “log off” of password protected websites when finished to prevent unauthorized access.  Simply closing the browser window may not actually end your session.</marquee>
             <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

                  <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">My Account</span></a>
                    <a class="nav-item nav-link" href="#">My profile</a>
                    <a class="nav-item nav-link" href="/fundtransfer">Fund Transfer</a>
                    <a class="nav-item nav-link" href="/benificiarydetail">Benificiary</a>
                    <a class="nav-item nav-link" href="/check-statement">Check Statement</a>
                    <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Add Fund</a>
                    <a class="nav-item nav-link" href="logout">Logout</a>
                  </div>
                </div>
              </nav>
             <table class="table">
                 <thead>
                     <th colspan="2" class="text-center">Account details</th>

                 </thead>

                <tbody>
                  <tr>

                    <td>Account Number</td>
                    <td>{{ $data->accountnum }}</td>

                  </tr>
                  <tr>

                    <td>Full Name</td>
                    <td>{{ $data->fullname }}</td>

                  </tr>
                  <tr>

                    <td>Mobile</td>
                    <td>{{ $data->mobile }}</td>
                  </tr>
                  <tr>

                    <td>Account Balance</td>
                    <td>{{ $data->balance }}</td>
                  </tr>
                  <tr>

                    <td>Account Type</td>
                    <td>Savings</td>
                  </tr>
                </tbody>
              </table>


         </div>

         <div class="space">

            <div class="homeloan">
                <h3>Apply Easy Home loan!</h3>
                <center>
                <a href="#" class="btn btn-success">Contact our Customer Service</a>
                <a href="#" class="btn btn-success">Chat with Customer Service</a>
                <a href="#" class="btn btn-success">Apply Life Insurance</a>
            </center>
            </div>
        </div>


     </body>
 </html>
