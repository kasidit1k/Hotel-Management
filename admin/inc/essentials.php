<?php

function adminLogin()
{
    session_start();  // เริ่มต้น session
    if (!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)) {
        // ถ้า session adminLogin ไม่ถูกตั้งค่า ให้ redirect ไปที่หน้า login (index.php)
        echo "<script>
            window.location.href='index.php';
        </script>";
    }
}

function redirect($url)
{
    echo "<script>
            window.location.href='$url';
        </script>";
}

function alert($type, $msg)
{
    $bs_class = ($type == "success") ? "alert-success" : "alert-danger";

    echo <<<HTML
        <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
            <strong class="me-3">$msg</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    HTML;
}
