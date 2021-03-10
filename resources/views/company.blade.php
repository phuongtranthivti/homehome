<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/company.css" rel="stylesheet" >

    <title>Company Management</title>
</head>
<body>
<div id="all">
    <div id="first_body">
        Company Management
    </div>
    <br> <br>
    <form action="company" method="post">
        {{ csrf_field() }}
        <label for="cpn"><b>Company</b></label>
        <input id="company" type="text" placeholder="Company code" name="cpn">
        <input type="text" placeholder="Please enter Company name" name="cpn_name"> <br>

        <p>
            <label for="email"><b>Email</b></label>
            <input id="email" type="email" placeholder="Please enter Email" name="email"> <br>
        </p>

        <label for="phone"><b>Phone Number</b></label>
        <input type="text" placeholder="Please enter Phone Number" name="phone"> <br>

    <p>
        <label for="status"><b>Status</b></label>
        <input id="status" type="text" placeholder="Select status" name="status"> <br>
    </p>

    <div id="body_button">
        <button type="button" name="register" style="background-color: #2ab27b"> Register </button>
        <button type="submit" name="search" style="background-color: #2a88bd"> Search </button>
        <button type="button" name="back" style="background-color: black"> Back </button>
    </div>
    </form>
    <div>
        <table style="width:100%">
            <tr>
                <th>Code</th>
                <th>Company Name</th>
                <th>Email</th>
                <th> Phone number</th>
                <th> Status </th>
                <th> Detail </th>
            </tr>
            @foreach($companies as $company)
            <tr>

                <td>{{$company->Code}}</td>
                <td>{{$company->Name}}</td>
                <td>{{$company->Email}}</td>
                <td>{{$company->Phone}}</td>
                <td>{{$company->Status}}</td>
                <td><a href="detail/{{$company->Code}}" >Detail</a></td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
</body>
</html>