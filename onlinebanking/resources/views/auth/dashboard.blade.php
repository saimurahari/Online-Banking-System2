<!DOCTYPE html>
<html>
    <head>
        <title>Home|TSM Banking</title>
    </head>
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        .container h3{
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
            <a class="nav-item nav-link active" href="#">Home</span></a>
            <a class="nav-item nav-link" href="#">About</a>
            <a class="nav-item nav-link" href="#">Contact</a>
            <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">{{ $data->name }}</a>

            <a class="nav-item nav-link" href="logout">Logout</a>
          </div>
        </div>
      </nav>
      <div class="container">
          <h3>Welcome to TSM Banking System</h3>
          <div class="box-container">
              <h4>Transfer Money on one click</h4>
              <p>Send or receive money with zero fees, straight from your bank account to almost anyone. You can send or receive money even if your contact is not on Google Pay. Split lunch with a friend, pay the rent, or send money to mom. Recharge your mobile in a tap and finish with those monthly bills on Google Pay. Now you’re free to go shopping - online, or in a store. We’ve got you covered with easy access to past transactions, so you’re always in control. Use it wherever you see UPI or Google Pay. Earn scratch cards and other rewards as you use Google Pay worth up to ₹1,00,000*. You don’t need to hunt for coupon codes. If you win, your rewards go straight into your bank account. Pay and receive money instantly using your existing bank accounts. No more reloading mobile wallet balances or withdrawal fees. It’s your money, made simple. Google Pay works with all banks that support BHIM UPI.</p>
          </div>
          <div class="button-container">
              <a href = "new-bank-account" class="btn btn-info">New account</a>
              <a href="existinghome" class="btn btn-success">Login Net account</a>
          </div>
      </div>
</body>
