<?php
require "library.php";
needUserInfo();
if(!$is_admin){
    header("Location: ".$root);
    exit();
}
?>
<html>
  <head xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php printDeps();?>
                                                     <title>Chalk it Up | Admin</title>
</head>
<body>
<?php printNav();?>

<h1>Admin</h!>
                                                     <h2>Add class</h2>
                                                     <form action='new_class.php' method='POST'>
                                                     <input type='text' name='display_name' placeholder="Display Name class(display_name)"/><br/>
                                                     <?php $select_teacher_modal = userSelectionInput('teachers', 'Teachers');?><br/>
                                                     <input type='submit' value='Create'/><br/>
                                                     </form>
<?php echo $select_teacher_modal;?>

                                                     <h2>Add user</h2>
                                                     <form action='new_user.php' method='POST'>
                                                     <input type='text' name='login_name' placeholder="Login Name"/><br/>
                                                     <input type='text' name='display_name' placeholder="Display Name"/><br/>
                                                     <input type='password' name='password' placeholder="(optional) Default Password"/><br/>
                                                     <input type='submit' value='Create'/><br/>
                                                     </form>



</body>
                                                     <html>
                                                     