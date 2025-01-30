<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            padding: 20px;
            width: 80%;
            margin: auto;
        }

        h1, h2, h3 {
            text-align: center;
        }

        .section {
            margin-bottom: 30px;
        }

        .section h2 {
            border-bottom: 2px solid #000;
            padding-bottom: 5px;
            margin-bottom: 15px;
        }

        .details {
            margin: 0;
            padding: 0;

        }


        .details div {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .details div label {
            font-weight: bold;
            margin-right: 10px;
            flex: 0 0 150px; /* Adjust the width as needed */
        }

        .details div span {
            flex: 1;
        }

        .photo {
            position: absolute;
            right: 70px;
        }

        .photo img {
            width: 150px;
            height: 150px;
            border: 1px solid #000;
        }

        .pdf-section img {
            max-width: 100%;
            margin-bottom: 20px;
        }

        .pdf-section {
            break-inside: avoid;
            page-break-inside: avoid;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php if (!empty($vendor)): ?>
            <h1>Document</h1>
            <div class="section personal">
                <h2>Personal Information</h2>
                <div class="details">
                <div class="photo">
                        <img src="<?= base_url() ?>assets/myImg.jpg" alt="Profile Photo">
                    </div>
                    <div>
                        <label for="name">Name:</label>
                        <span id="name"><?= esc($vendor['name']) ?></span>
                    </div>
                    <div>
                        <label for="dob">Date of Birth:</label>
                        <span id="dob"><?= esc($vendor['dob']) ?></span>
                    </div>
                    <div>
                        <label for="phone_number">Phone Number:</label>
                        <span id="phone_number"><?= esc($vendor['phone_number']) ?></span>
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <span id="email"><?= esc($vendor['email']) ?></span>
                    </div>
                    <div>
                        <label for="father_name">Father's Name:</label>
                        <span id="father_name"><?= esc($vendor['father_name']) ?></span>
                    </div>

                </div>
            </div>

            <div class="section">
                <h2>Employment Information</h2>
                <div class="details">
                    <div>
                        <label for="date_from">Date From:</label>
                        <span id="date_from"><?= esc($vendor['date_from']) ?></span>
                    </div>
                    <div>
                        <label for="date_to">Date To:</label>
                        <span id="date_to"><?= esc($vendor['date_to']) ?></span>
                    </div>
                    <div>
                        <label for="company_name">Company Name:</label>
                        <span id="company_name"><?= esc($vendor['company_name']) ?></span>
                    </div>
                    <div>
                        <label for="directorate">Directorate:</label>
                        <span id="directorate"><?= esc($vendor['directorate']) ?></span>
                    </div>
                </div>
            </div>

            <div class="section">
                <?php if (!empty($police_cert_pdf)): ?>
                    <?php foreach ($police_cert_pdf as $imageBase64): ?>
                        <div class="pdf-section">
                <h2>Police Verification Certificate</h2>

                            <img src="<?= esc($imageBase64) ?>" alt="PDF Page">
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No police verification certificate available.</p>
                <?php endif; ?>
            </div>

            <div class="section">
                <h2>Company Grant Certificate</h2>
                <?php if (!empty($company_cert_pdf)): ?>
                    <?php foreach ($company_cert_pdf as $imageBase64): ?>
                        <div class="pdf-section">
                            <img src="<?= esc($imageBase64) ?>" alt="PDF Page">
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No company grant certificate available.</p>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <h1>Data not found</h1>
        <?php endif; ?>
    </div>
</body>
</html>
