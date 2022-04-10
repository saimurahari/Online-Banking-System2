<!DOCTYPE html>
<html>
    <head>
        <title>Home|TSM Banking</title>
    </head>
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        .container h2{
            display:flex;
            justify-content: center;
            padding-top:10px;
        }


    </style>
</html>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">TSM Banking</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="dashboard">Home</span></a>
            <a class="nav-item nav-link" href="#">About</a>
            <a class="nav-item nav-link" href="#">Contact</a>
            <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">{{ $data->name }}</a>

            <a class="nav-item nav-link" href="logout">Logout</a>
          </div>
        </div>
      </nav>
      <div class="container">
          <h2>New bank Account</h2>
          <form action="{{ url('bankform') }}" method="post">
            @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            @csrf
          <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" name="fullname" class="form-control" id="exampleInputPassword1" placeholder="Full Name">
          </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile No:</label>
                <input type="text" name="mobile" class="form-control" id="exampleInputPassword1" placeholder="Mobile Number">
              </div>
              <div class="form-group">
                <label for="openblnc">Opening Balance</label>
                <input type="text" name="openbalance" class="form-control" id="exampleInputPassword1">
              </div>
            <div class="form-group">
              <label for="accnum">Account Number</label>
              <input type="text" class="form-control" name="accnum" id="accnum" value="{{ $randomnumber}}" placeholder="accountnum">
              <small>Please Note you account number</small>
            </div>
            <div class="form-group">
                <label for="profile">Profile Photo</label>
                <input type="file" name="profileupload" class="form-control" id="profile" >
              </div>
              <div class="form-group">
                <label for="mpin">MPIN</label>
                <input type="password" class="form-control" id="mpin" name="mpin" placeholder="MPIN" minlength="6" maxlength="6">
                <small>Enter 6 digit Mpin</small>
              </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
          </form>
      </div>
</body>
