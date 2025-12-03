<!DOCTYPE html>
<html>
<head>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="css/register.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
    <body>
        <div class="container">
         <h1 class="register-heading"><b>REGISTER HERE</b></h1>

        <form>
            <div class="mb-3">
                <label for="InputFullName" class="form-label">Full name</label>
                <input type="email"  class="form-control" id="InputFullName" aria-describedy="fullname">
                <div id="fullname" class="form-test">Insert your full name.</div>
            </div>

            <div class="mb-3">
                <label for="InputPhoneNumber" class="form-label">Phone Number</label>
                <input type="phone number" class="form-control" id="InputPhoneNumber">
            </div>

            <div class="mb-3">
                <label for="InputDateofBirth" class="form-label">Date of Birth</label>
                <input type="date of birth" class="form-control" id="InputDateofBirth">
            </div>

            <div class="mb-3">
                <label for="InputIdentification" class="form-label">Identification Number</label>
                <input type="identification number" class="form-control" id="InputIdentification">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>

    </body> 
</html>