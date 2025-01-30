<!DOCTYPE html>
<html>

<head>
    <title>Vendor Registration</title>

    <link rel="stylesheet" href="css/form.css">
</head>

<body>
    <div class="outer">
        <h1 class="heading">Vendor Registration Form</h1>
        <div class="formOuter">
            <form action="/register/save" method="post" enctype="multipart/form-data" class="formBox" >
                <!-- <div class="formBox"> -->

                    <div class="personal">
                        <h2>Personal Details</h2>
                        <label for="name">Name:</label><br>
                        <input type="text" id="name" name="name" placeholder="Enter the full name" required><br><br>

                        <label for="dob">Date of Birth (DOB):</label><br>
                        <input type="date" id="dob" name="dob" required><br><br>

                        <label for="phone_number">Phone Number:</label><br>
                        <input type="text" id="phone_number" name="phone_number" placeholder="xx-xxxxxxxxxx" required><br><br>


                        <label for="email">Email:</label><br>
                        <input type="email" id="email" name="email" placeholder="Enter the email" required><br><br>

                        <label for="father_name">Father's Name:</label><br>
                        <input type="text" id="father_name" name="father_name" placeholder="Enter the Father's name" required><br><br>



                        <label for="company_name">Company:</label><br>
                        <select  name="company_name">

                        <?php if(!empty($companies) && is_array($companies)) :?>
                        <?php foreach($companies as $company) :?>
                                <option value=<?= esc($company['company_name'])?>><?= esc($company['company_name'])?></option>
                         <?php endforeach;?>
                         <?php else : ?>
                         <p>No companies found.</p>
                        <?php endif; ?>
                        </select><br><br>


                    </div>

                    <div class="uploads">
                        <h2>Directorate & Tenure</h2>
                    <label for="directorate">Directorate:</label><br>
                        <input type="text" id="directorate" name="directorate" placeholder="Enter the Directorate" required><br><br>
                        <label for="date_from">Date From:</label><br>
                        <input type="date" id="date_from" name="date_from" required><br><br>

                        <label for="date_to">Date To:</label><br>
                        <input type="date" id="date_to" name="date_to" required><br><br>

                        <h2>Document Upload</h2>

                        <label for="police_verification_cert">Police Verification Certificate</label><br>
                        <input type="file" id="police_verification_cert" name="police_verification_cert" accept="application/pdf"required><br><br>

                        <label for="company_grant_cert">Company Grant Certificate</label><br>
                        <input type="file" id="company_grant_cert" name="company_grant_cert" accept="application/pdf" required><br><br>

                        <label for="photo">Photo:</label>
                        <input type="file" id="photo" name="photo" accept="image/jpeg, image/jpg" required><br><br>
                    </div>
                    <div class="note" >*NOTE: Upload only Pdf's in certificates and only jpg/jpeg in photo</div>
                <button type="submit" class="button">Register</button>

                <!-- </div> -->
            </form>
        </div>
    </div>
</body>

</html>