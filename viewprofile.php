<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/viewprofile.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
    <form>

        <div class="mb-3">
            <label for="InputProfilePhoto" class="form-label"></label>
            <img id="previewImage" class="profile-preview" src="https://via.placeholder.com/150">
             <h5><b>My Profile</b></h5>
            <input type="file" class="form-control" id="InputProfilePhoto" accept="image/*">
        </div>

        <div class="mb-3">
            <label for="InputBio" class="form-label">Bio</label>
            <input type="text" class="form-control" id="InputBio">
        </div>

        <div class="mb-3">
            <label for="InputFullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="InputFullName" aria-describedby="FullName">
        </div>

        <div class="mb-3">
            <label for="InputEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="InputEmail">
        </div>

        <div class="mb-3">
            <label for="InputGender" class="form-label">Gender</label>
            <input type="gender" class="form-control" id="InputGender">
        </div>

        <div class="mb-3">
            <label for="InputPhoneNumber" class="form-label">Phone Number</label>
            <input type="number" class="form-control" id="InputPhoneNumber">
        </div>
        
        <div class="mb-3">
            <label for="InputDateOfBirth" class="form-label">Date of Birth</label>
            <input type="date of birth" class="form-control" id="InputDateofBirth">
        </div>

        <div class="mb-3">
            <label for="InputUsername" class="form-label">Username</label>
            <input type="text" class="form-control" id="InputUsername">
        </div>

        <div class="mb-3">
            <label for="InputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="InputAddress">
        </div>

        <div class="mb-3">
            <label for="InputCity" class="form-label">City</label>
            <input type="text" class="form-control" id="InputCity">
        </div>

        <div class="mb-3">
            <label for="InputState" class="form-label">State</label>
            <input type="text" class="form-control" id="InputState">
        </div>

        <div class="mb-3">
            <label for="InputPostcode" class="form-label">Postcode</label>
            <input type="number" class="form-control" id="InputPostcode">
        </div>

        <div class="mb-3">
            <label for="InputCountry" class="form-label">Country</label>
            <input type="text" class="form-control" id="InputCountry">
        </div>

        <div class="mb-3">
            <label for="InputOccupation" class="form-label">Occupation</label>
            <input type="text" class="form-control" id="InputOccupation">
        </div>

        <div class="d-inline-flex">
        <button type="button" class="btn">Done</button>
        </div>

        <div class="d-inline-flex" style="margin-top: 10px;">
        <a href="authentication.php" class="btn-logout">Log Out</a>
        </div>

       <script>
            const profilePhoto = document.getElementById('InputProfilePhoto');
            const previewImage = document.getElementById('previewImage');
            const doneButton = document.querySelector('.d-inline-flex button');

            let currentImageData = ""; 


            profilePhoto.addEventListener('change', function(event) {
                const reader = new FileReader();
            reader.onload = function () {
                previewImage.src = reader.result;
                currentImageData = reader.result; // simpan sementara
            }
    
            if(event.target.files[0]) {
            reader.readAsDataURL(event.target.files[0]);
            }
            });


            doneButton.addEventListener('click', function() {
                if(currentImageData !== "") {
                localStorage.setItem('profileImage', currentImageData); // pastikan gambar tersimpan
                }
    
                localStorage.setItem('bio', document.getElementById('InputBio').value);
                localStorage.setItem('fullName', document.getElementById('InputFullName').value);
                localStorage.setItem('email', document.getElementById('InputEmail').value);
                localStorage.setItem('gender', document.getElementById('InputGender').value);
                localStorage.setItem('phoneNumber', document.getElementById('InputPhoneNumber').value);
                localStorage.setItem('dateOfBirth', document.getElementById('InputDateofBirth').value);
                localStorage.setItem('username', document.getElementById('InputUsername').value);
                localStorage.setItem('address', document.getElementById('InputAddress').value);
                localStorage.setItem('city', document.getElementById('InputCity').value);
                localStorage.setItem('state', document.getElementById('InputState').value);
                localStorage.setItem('postcode', document.getElementById('InputPostcode').value);
                localStorage.setItem('country', document.getElementById('InputCountry').value);
                localStorage.setItem('occupation', document.getElementById('InputOccupation').value);

                alert("Profile saved!");
                });


        window.onload = function() {
            if(localStorage.getItem('profileImage')) {

                previewImage.src = localStorage.getItem('profileImage');
                document.getElementById('InputBio').value = localStorage.getItem('bio');
                document.getElementById('InputFullName').value = localStorage.getItem('fullName');
                document.getElementById('InputEmail').value = localStorage.getItem('email');
                document.getElementById('InputGender').value = localStorage.getItem('gender');
                document.getElementById('InputPhoneNumber').value = localStorage.getItem('phoneNumber');
                document.getElementById('InputDateofBirth').value = localStorage.getItem('dateOfBirth');
                document.getElementById('InputUsername').value = localStorage.getItem('username');
                document.getElementById('InputAddress').value = localStorage.getItem('address');
                document.getElementById('InputCity').value = localStorage.getItem('city');
                document.getElementById('InputState').value = localStorage.getItem('state');
                document.getElementById('InputPostcode').value = localStorage.getItem('postcode');
                document.getElementById('InputCountry').value = localStorage.getItem('country');
                document.getElementById('InputOccupation').value = localStorage.getItem('occupation');
                currentImageData = localStorage.getItem('profileImage'); // simpan balik sementara
                }
                };
</script>




</body>
</html>