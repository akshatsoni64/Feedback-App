<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Feedback Form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="https://www.pinclipart.com/picdir/big/108-1089780_business-insurance-form-checklist-icon-transparent-background-clipart.png" type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('app.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <h2 class="mt-3 text-center text-white font-effect-fire">Feedback Form</h2>
            <div class="row">
                <div class="col p-5">
                    <div class="row">
                        {{ $counter = 0 }}
                        @foreach($data as $row)
                            @if($counter % 2 == 0)
                                </div>
                                <div class="row mt-3">
                            @endif
                            <div class="col">
                                <div class="card bg-opacity p-4 border border-light shadow-lg">                                
                                    <h1 class="display-3 text-center"><i class="fa fa-user" aria-hidden="true"></i></h1>
                                    <div class="row text-center">
                                        <div class="col">{{ $row['fname'] }} {{ $row['lname'] }}</div>
                                    </div>                                
                                    <div class="row text-center">
                                        <div class="col">{{ $row['contact_no'] }}</div>
                                        <div class="col">{{ $row['house_no'] }}</div>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col">{{ $row['email'] }}</div>
                                    </div>
                                    <div class="card-body text-center collapse border border-white mt-3" id="content{{ $row['id'] }}">
                                        <p class="card-text">{{ $row['feedback'] }}</p>
                                    </div>                                
                                    <div class="text-right mt-4 mr-3">
                                        <a href="#content{{ $row['id'] }}" class="btn btn-sm btn-outline-info rounded-circle" data-toggle="collapse" style="width:auto">
                                            <i class="fa fa-eye display-1" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            {{ $counter++ }}
                        @endforeach
                    </div>
                </div>
                <div id="fb-form" class="col-4 collapse">
                    <form class="bg-opacity border rounded-lg m-3 mt-5 p-4" action="{{ route('store') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="text" name="fname" id="fname"class="form-control" placeholder="First Name">
                            <input type="text" name="lname" id="lname"class="form-control" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" id="email"class="form-control" placeholder="Email">
                        </div>                
                        <div class="input-group mb-3">
                            <input type="text" name="house_no" id="house_no"class="form-control" placeholder="House No.">
                            <input type="text" name="contact_no" id="contact_no"class="form-control" placeholder="Contact No.">
                        </div>
                        <div class="form-group">
                            <textarea name="feedback" id="feedback"class="form-control" rows="5" id="comment" placeholder="Feedback"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-outline-light" type="submit">Add</button>                                
                        </div>
                    </form>
                </div>
                <div class="fixed-bottom d-flex flex-row-reverse">
                    <div>
                        <a href="#fb-form" class="btn btn-light rounded-lg mb-3 mr-3" data-toggle="collapse" id="pop-form">
                            <!-- <i class="fa fa-plus p-1" aria-hidden="true"></i> -->Add Feedback
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
