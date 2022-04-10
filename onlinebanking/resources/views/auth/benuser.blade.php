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
                width:70%;
                margin-left: auto;
                margin-right: auto;

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
            .container4 h3{
                display:flex;
                justify-content: center;
            }
        </style>
    </head>
    <body>
        <table class="table">
            <thead>
                <th colspan="6" class="text-center">Benificiary details</th>


            </thead>
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Account Number</th>
                <th>Bank Name</th>
                <th>IFSC</th>
            </thead>

           <tbody>

            @foreach ($members as $member)
                <td>{{ $member->name }}</td>
                <td>{{ $member->email }}</td>
                <td>{{ $member->mobile }}</td>
                <td>{{ $member->accountnum }}</td>
                <td>{{ $member->bankname }}</td>
                <td>{{ $member->ifsc }}</td>



               <tr>



              </tr>
              @endforeach
           </tbody>
         </table>

        </div>

            </div>

        </div>

    </body>
</html>
