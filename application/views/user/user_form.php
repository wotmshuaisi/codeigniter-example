<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Form</title>
</head>
<body>
    <?php echo form_open('index.php/user/submit/'); ?>
        <label>Username</label>
        <input type='text' name='username' size='50' />
        <label>Company</label>
        <input type='text' name='company' size='50' />
        <label>Submit</label>
        <input type="submit" value="Submit" />
    </form>
    <?php 
        echo validation_errors();
    ?>
</body>
</html>