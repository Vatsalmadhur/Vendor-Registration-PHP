<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Dashboard</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            height: auto;
            width: 100vw;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            /* overflow: hidden; */
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            flex-wrap: wrap;
            width: 100vw;
            /* max-width: 1200px; */
            /* border: 2px solid red;    */
        }
        h1 {
            margin-bottom: 20px;
        }
        .vendor {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
            width: auto;
            min-width:95vw;
            padding: 10px;
            background-color: #fff;
            border: 1px solid blue;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
        }
        .vendor p {
            margin: 0;
            /* border: 2px solid red; */
            width:100px;
            height: auto;
            word-wrap: break-word;
        }
        .vendor button {
            padding: 5px 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .vendor button:hover {
            background-color: #0056b3;
        }
        .hidden{
            visibility: hidden;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Vendor Dashboard</h1>
        <div class="vendor">
                    <p class="id"><strong>ID</strong> </p>
                    <p class="name"><strong>Name</strong> </p>
                    <p class="dob"><strong>DOB</strong> </p>
                    <p class="phone_number"><strong>Phone Number</strong>  </p>
                    <p class="email"><strong>Email</strong></p>
                    <p class="father_name"><strong>Father's Name</strong></p>
                    <p class="date_from"><strong>Date From</strong></p>
                    <p class="date_to"><strong>Date To</strong></p>
                    <p class="company_name"><strong>Company Name</strong></p>
                    <p class="directorate"><strong>Directorate</strong> </p>
                    <p class="police_verification_cert"><strong>Police Verification</strong> </p>
                    <p class="company_grant_cert"><strong>Company Grant</strong> </p>
                    <p class="photo"><strong>Photo</strong></p>
                    <button class="hidden">Generate PDF</button>
                </div>
        <?php if (!empty($vendors) && is_array($vendors)): ?>
            <?php foreach ($vendors as $vendor): ?>
                <div class="vendor">
                    <p class="id"><?= esc($vendor['id']) ?></p>
                    <p class="name"><?= esc($vendor['name']) ?></p>
                    <p class="dob"><?= esc($vendor['dob']) ?></p>
                    <p class="phone_number"><?= esc($vendor['phone_number']) ?></p>
                    <p class="email"><?= esc($vendor['email']) ?></p>
                    <p class="father_name"><?= esc($vendor['father_name']) ?></p>
                    <p class="date_from"><?= esc($vendor['date_from']) ?></p>
                    <p class="date_to"><?= esc($vendor['date_to']) ?></p>
                    <p class="company_name"><?= esc($vendor['company_name']) ?></p>
                    <p class="directorate"><?= esc($vendor['directorate']) ?></p>
                    <p class="police_verification_cert"><?= esc($vendor['police_verification_cert']) ?></p>
                    <p class="company_grant_cert"><?= esc($vendor['company_grant_cert']) ?></p>
                    <p class="photo"><?= esc($vendor['photo']) ?></p>
                    <button onclick="window.location.href='<?= site_url('generatepdf?id=' . $vendor['id']) ?>'">Generate PDF</button>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <h1>Data not found</h1>
        <?php endif; ?>
    </div>
</body>

</html>
