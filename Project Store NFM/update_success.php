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
    title: "Update Successful",
    text: "Your changes have been successfully updated.",
    showConfirmButton: false,
    timer: 1500
}).then(function() {
    window.location.href = "adminGame.php";
});
</script>
</body>
</html>
