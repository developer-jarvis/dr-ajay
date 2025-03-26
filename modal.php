<!-- Modal Body -->
<div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalTitleId">
                    Enquiry
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="modalForm" class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-6">
                            <label for="name">Name*</label>
                            <input type="text" name="name" placeholder="Name" class="form-control" required>
                        </div>
                        <div class="col-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" placeholder="Email" class="form-control">
                        </div>
                        <div class="col-6">
                            <label for="number">Phone Number*</label>
                            <input type="tel" name="number" placeholder="Phone Number" class="form-control" required
                            pattern="\d{10}" maxlength="10" inputmode="numeric"
                            title="Please enter a valid 10-digit phone number."
                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);">
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label">Date</label>
                            <input type="date" name="date" id="dateInput" class="form-control"
                                placeholder="Select a date" required min="<?php echo date('Y-m-d'); ?>">
                        </div>
                        <div class="col-12">
                            <label for="dateInput" class="form-label">Message</label>
                            <textarea name="message" class="form-control" id="" row="2"></textarea>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="send" class="btn btn-danger">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

extract($_POST);

if (isset($send)) {
    // Validate required fields
    if (empty($name) || empty($number)) {
        echo "<script>alert('Name and Phone Number are required. Please fill out these fields.');</script>";
        exit;
    }

    // Sanitize inputs
    $name = htmlspecialchars($name);
    $number = htmlspecialchars($number);
    $email = !empty($email) ? htmlspecialchars($email) : 'Not provided';
    $address = !empty($address) ? htmlspecialchars($address) : 'Not provided';
    $message = !empty($message) ? htmlspecialchars($message) : 'No message provided';

    // Prepare email details
    $to = 'princesingh2632002@gmail.com';
    $subject = 'For Enquiry';
    $messageContent = "
        <html>
        <body>
        <table>
            <tr><th>Name</th><td>$name</td></tr>
            <tr><th>Phone</th><td>$number</td></tr>
            <tr><th>Email</th><td>$email</td></tr>
            <tr><th>Address</th><td>$address</td></tr>
            <tr><th>Message</th><td>$message</td></tr>
        </table>
        </body>
        </html>
    ";

    // Email headers
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: drajaysclinic.com <no-reply@yourdomain.com>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Debug email sending
    if (mail($to, $subject, $messageContent, $headers)) {
        echo "<script>alert('Your message has been sent successfully. We will contact you soon.'); window.location.href = 'index.php';</script>";
    } else {
        echo "Failed to send email. Check server configuration.";
    }
}
?>


<!-- Optional: Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    //needs validation
    const modalForm = document.getElementById('modalForm');
    modalForm.addEventListener('submit', function (e) {
        e.preventDefault();
        if (modalForm.checkValidity()) {
            modalForm.submit();
        }
    });
</script>

<!-- Optional: Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>