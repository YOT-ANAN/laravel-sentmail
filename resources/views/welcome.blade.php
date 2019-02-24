<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sent Mail-Yot-nan Tiaosakun</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body >
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  
    <a class="navbar-brand" href="#"><h1>Sent Mail</h1></a>
   
    </nav>
        
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3" id="form_container">
            @if ($message = Session::get('success'))         
            <div class="alert alert-success" role="alert">
            <strong>{{ $message }}</strong>
            </div>
            @endif
                    <h2>Sent Mail</h2> 
                 
                    <form role="form" action="/send" method="POST" id="reused_form">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="subject"> Subject:</label>
                                <input type="Subject" class="form-control" id="subject" name="subject" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="message"> Message:</label>
                                <textarea class="form-control" type="textarea" name="content" id="content" maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="email">To Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="name"> Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-lg btn-default pull-right" >Send &rarr;</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <p><a>ยศอนันต์ เตี้ยวสกุล รหัสนักศึกษา 5910110270 Section 01</a>
  </nav>
    </body>
  
</html>