<?php

function userLogin($post)
{
    extract($post);
    $errors = [];

    //Checking for email...
    if (!empty($email)) {
        $tmpEmail = sanitize($email);

        if ($tmpEmail) {
            $mail = $tmpEmail;
        } else {
            $errors[] = "Invalid email address!";
        }
    } else {
        $errors[] = "Please enter your email address!";
    }


    //Checking for password...
    if (!empty($password)) {
        $password = $password;
    }else {
        $errors[] = "Please enter your password!";
    }


    //The Sql Statement...
    if (!$errors) {
        $sql = "SELECT * FROM users WHERE email = '$mail'";
        $result = executeQuery($sql);
        if ($result) {
            $encryptedpassword = $result['password'];
            if (sha1($password) === $encryptedpassword) {
                $_SESSION['userId'] = $result['user_id'];
                return true;
            } else {
                return "Invalid Login Details!";
            }
        } else {
            return "Invalid Login Details!";
        }
    } else {
        return $errors;
    }

}


function userRegister($post) {
    extract($post);
    $errors = [];


    if (!empty($fname)) {
        $fname = sanitize($fname);
    }else {
        $errors[] = "First name is empty!"  . "<br>";
    }

    if (!empty($lname)) {
        $lname = sanitize($lname);
    }else {
        $errors[] = "First name is empty!"  . "<br>";
    }

    //Checking for email...
    if (!empty($email)) {
        $tmpEmail = sanitize($email);

        if ($tmpEmail) {
            $mail = $tmpEmail;
        } else {
            $errors[] = "Invalid email address!"  . "<br>";
        }
    } else {
        $errors[] = "Admin email address is empty!"  . "<br>";
    }

    if (!empty($phone)) {
        $phone = sanitize($phone);
    }else {
        $errors[] = "Phone number is empty!"  . "<br>";
    }

    //Checking for password...
    if (!empty($password)) {
        $tmp_password = sanitize($password);
    }else {
        $errors[] = "Enter preferred password!"  . "<br>";
    }

    if (!empty($cpassword)) {
        $tmp_cpassword = sanitize($cpassword);
    }else {
        $errors[] = "Confirm password!"  . "<br>";
    }

    if ($tmp_password === $password) {
        $password = sha1($tmp_password);
    } else {
        $errors[] = "Passwords do not match!"  . "<br>";
    }

    if (!empty($address)) {
        $address = sanitize($address);
    }else {
        $errors[] = "Address is empty!"  . "<br>";
    }

    if (!$errors) {
        $sql = "INSERT INTO users (firstname, lastname, email, phone, password, address) VALUES ('$fname', '$lname', '$mail', '$phone', '$password', '$address')";

        $result = validateQuery($sql);
        if ($result) {
            return true;
        } else {
            $errors[] = "Operation Failed! Try Again" . "<br>";
        }
    } else {
        return $errors;
    }
}

function updateUser($post, $id) {
    extract($post);
    $errors = [];


    if (!empty($fname)) {
        $fname = sanitize($fname);
    }else {
        $errors[] = "First name is empty!"  . "<br>";
    }

    if (!empty($lname)) {
        $lname = sanitize($lname);
    }else {
        $errors[] = "First name is empty!"  . "<br>";
    }

    //Checking for email...
    if (!empty($email)) {
        $tmpEmail = sanitize($email);

        if ($tmpEmail) {
            $mail = $tmpEmail;
        } else {
            $errors[] = "Invalid email address!"  . "<br>";
        }
    } else {
        $errors[] = "Admin email address is empty!"  . "<br>";
    }

    if (!empty($phone)) {
        $phone = sanitize($phone);
    }else {
        $errors[] = "Phone number is empty!"  . "<br>";
    }

    //Checking for password...
    if (isset($password)) {
        $tmp_password = sanitize($password);
    }else {
        $password = $realpassword;
    }

    if (!empty($cpassword)) {
        $tmp_cpassword = sanitize($cpassword);
    }

    if (isset($password)) {
        if ($tmp_password === $password) {
            $password = sha1($tmp_password);
        } else {
            $errors[] = "Passwords do not match!"  . "<br>";
        }
    }

    if (!$errors) {
        $sql = "UPDATE users SET firstname = '$fname', lastname = '$lname', email = '$mail', phone = '$phone', password = '$password'";

        $result = validateQuery($sql);
        if ($result) {
            return true;
        } else {
            $errors[] = "Operation Failed! Try Again" . "<br>";
        }
    } else {
        return $errors;
    }
}