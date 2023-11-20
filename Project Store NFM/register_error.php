<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Successful</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<style>
  .swal2-title {
  color: #db3e25;
}
</style>
<script>
Swal.fire({
    icon: "error",
    title: "Create Account Error",
    text: "An error occurred",
    showConfirmButton: false,
    timer: 2500
}).then(function() {
    window.location.href = "adminGame.php";
});
</script>
</body>
</html>
