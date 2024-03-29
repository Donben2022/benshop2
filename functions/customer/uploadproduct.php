<?php
include '../db-connection.php';

$product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
$product_price = mysqli_real_escape_string($conn, $_POST['product_price']);
$product_category = mysqli_real_escape_string($conn, $_POST['product_category']);
$product_sub_category = mysqli_real_escape_string($conn, $_POST['product_sub_category']);
$product_description = mysqli_real_escape_string($conn, $_POST['product_description']);


if (empty($product_name) || empty($product_price) || empty($product_category) || empty($product_sub_category) || empty($product_description)) {
    $message = "
        <script>
            toastr.error('Please Provide all the details');
        </script>
    ";
} else if (!preg_match("/^[a-zA-z0-9 ]*$/", $product_name)) {
    $message = "
        <script>
            toastr.error('Provided an invalid name');
        </script>
    ";
} else {
    if ($_FILES['picture'] === "") {
        $message = "
        <script>
            toastr.error('Provide at least 1 product image');
        </script>
    ";
       
    } else {
        $filename = $_FILES['picture']['name'];
        $filetmpname = $_FILES['picture']['tmp_name'];
        $filesize = $_FILES['picture']['size'];
        $fileerror = $_FILES['picture']['error'];
        $filetype = $_FILES['picture']['type'];
        $fileext = explode('.', $filename);
        $fileActualExt = strtolower(end($fileext));
        $allowed = array('jpg', 'png', 'jpeg');
        if (in_array($fileActualExt, $allowed)) {
            if ($fileerror === 0) {
                if ($filesize > 10000000) {
                    echo "<script>alert('upload too big');</script>";
                } else {
                    $filenamenew = uniqid('', true) . "." . $fileActualExt;
                    $filedestination = '../products/' . $filenamenew;
                    move_uploaded_file($filetmpname, $filedestination);
                    
                    $email_username = $_SESSION['seller'];
                    $checkemail = "SELECT *  FROM `login` WHERE `login_username`= '$email_username'";
                    $queryemail = mysqli_query($conn, $checkemail);
                    $checkemailrows = mysqli_num_rows($queryemail);
                    if ($checkemailrows >= 1) {
                        while ($fetch = mysqli_fetch_assoc($queryemail)) {
                            $globalusername = $fetch['login_username']; 
                            $globalloggedinid = $fetch['login_id'];
                            $checkcustomer = "SELECT *  FROM `seller` WHERE `seller_login_id` = '$globalloggedinid'";
                            $querycustomer = mysqli_query($conn, $checkcustomer);
                             
                            while ($fetchcustomer = mysqli_fetch_assoc($querycustomer)) {
                                $globalfirstname = $fetchcustomer['seller_first_name'];
                                $globallastname = $fetchcustomer['seller_last_name'];
                                $globalcontact = $fetchcustomer['seller_mobile'];
                                $globalemail = $fetchcustomer['seller_email'];
                                $globallocation = $fetchcustomer['seller_location'];
                                $globaluserid = $fetchcustomer['seller_login_id'];
                                $globalsellerid = $fetchcustomer['seller_id'];
                            }
                
                            $globalname = $globalfirstname . " " . $globallastname;
                            global $globalname;
                            global $globalusername;
                            global $globalemail;
                            global $globalname;
                            global $globalcontact;
                            global $globallocation;
                            global $globalloggedinid;
                            global $globaluserid;
                            global $globalsellerid;
                        }
                    }
          
             $uploadproduct = "INSERT INTO `products`(`product_name`, `product_description`, `product_price`, `product_user_id`, `product_images`, `product_category_id`, `product_sub_category_id`, `product_status`) VALUES ('$product_name', '$product_description','$product_price','$globalsellerid','$filenamenew','$product_category','$product_sub_category','available')";
                    $queryuploadimage = mysqli_query($conn, $uploadproduct);
                    if ($queryuploadimage) {
                        $message = "
                                <script>
                                    toastr.success('Your product has been uploaded');
                                </script>
                                    ";
                                    echo "<script>window.location.replace('my-products.php');</script>";
                    }else{
                        $message = "
                        <script>
                            toastr.error('An error occurred ');
                        </script>
                            ";
                    }
                }
            } else {
                $message = "
                        <script>
                            toastr.error('An error occurred during images upload');
                        </script>
                            ";
            }
        } else {
            $message = "
                    <script>
                        toastr.error('Upload Only Images with jpg,png, jpeg extensions as product images');
                    </script>
                ";
        }
    }
}
