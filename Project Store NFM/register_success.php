<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Successful</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<script>
Swal.fire({
    icon: "success",
    title: "New Account Created Successful",
    text: "Enjoy For The New Account",
    showConfirmButton: false,
    timer: 2500
}).then(function() {
    window.location.href = "login.php";
});
</script>
</body>
</html>
