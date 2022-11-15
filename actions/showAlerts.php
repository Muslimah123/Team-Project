<?php
//function that will display the  pop up when the admin has updated product
function showUpdateAlert()
{
    if (isset($_GET['update'])) 
    {
        if ($_GET['update'] == 'success') 
        {
            echo "<script> Swal.fire(
            {
                icon: 'success',
                type: 'success',
                title: 'Updated successful',
                text: 'The product is updated successfully!'
            }).then(function() 
            {
                window.location.href = 'product.php';
            }) </script>";
        } else if ($_GET['update'] == 'error') 
        {
            echo "<script> Swal.fire(
            {
                icon: 'error',
                type: 'error',
                title: 'Update failed',
                text: 'Product couldn\'t be updated'
            }).then(function() 
            {
                window.location.href = 'product.php';
            }) </script>";
        }
    }
}

//function that will display the  pop up when a customer has sent a concern
function showconcernAlert()
{
    if (isset($_GET['contact'])) 
    {
        if ($_GET['contact'] == 'success') 
        {
            echo "<script> Swal.fire(
            {
                icon: 'success',
                type: 'success',
                title: 'Message sent successfully',
                text: 'Your message has been successfully sent!'
            }).then(function() 
            {
                window.location.href = 'contact.php';
            }) </script>";
        } else if ($_GET['contact'] == 'error') {
            echo "<script> Swal.fire(
            {
                icon: 'error',
                type: 'error',
                title: 'Message failed',
                text: 'Your message could not be sent .Please try again'
            }).then(function() 
            {
                window.location.href = 'contact.php';
            }) </script>";
        }
    }
}
?>