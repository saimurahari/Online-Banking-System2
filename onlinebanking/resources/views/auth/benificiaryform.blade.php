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
            <a class="nav-item nav-link active" href="existinghome">Home</span></a>
            <a class="nav-item nav-link" href="#">About</a>
            <a class="nav-item nav-link" href="#">Contact</a>
            <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">{{ $data->name }}</a>

            <a class="nav-item nav-link" href="logout">Logout</a>
          </div>
        </div>
      </nav>
      <div class="container">
          <h2>Add Benificiary</h2>
          <form action={{ url('benficiary-user')}} method="get">
            @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            @csrf
          <div class="form-group">
            <label for="holdername">Account Holder Name</label>
            <input type="text" name="holdername" class="form-control" id="exampleInputPassword1" value="{{ $data->fullname }}" placeholder="Holder Name" readonly>
          </div>

            <div class="form-group">
                <label for="accholder">Account Holder</label>
                <input type="text" name="accholder" class="form-control" id="exampleInputPassword1" value="{{ $data->accountnum }}" readonly>
              </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
              </div>
            <div class="form-group">
              <label for="mobile">Mobile</label>
              <input type="text" class="form-control" name="mobile" id="mobile"  placeholder="Mobile No.">

            </div>
            <div class="form-group">
                <label for="accnum">Account Number</label>
                <input type="text" name="accnum" class="form-control" id="profile" placeholder="Account Number" >
              </div>
              <div class="form-group">
                <label for="bankname">Bank Name</label>
                <input type="text" class="form-control" id="bankname" name="bankname" placeholder="Bank Name" value="TSM Banking" readonly>

              </div>
              <div class="form-group">
                <label for="ifsc">IFSC</label>
                <input type="text" class="form-control" id="ifsc" name="ifsc" placeholder="IFSC" value="TSM0123456" readonly>
              </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
          </form>
      </div>
</body>
