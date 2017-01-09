
<html>
    <head>
        <title>Register User</title>
        <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
        <link  rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
    
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    </head>

    <body>

        <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
   
      <li><a href="#">UserData</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php/user/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="index.php/user/login1"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
          
          <a href="index.php/insert_ctrl/page1">select</a>
            
            <div id="container">
            <?php echo form_open('insert_ctrl'); ?>
            <h1>Register User</h1><hr/> 
            <?php if (isset($message)) { ?>
                <CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
            <?php } ?>
                <?php echo form_label('Name :'); ?> <?php echo form_error('dname'); ?><br />
            <?php echo form_input(array('id' => 'dname', 'name' => 'dname')); ?><br />

            <?php echo form_label('Email :'); ?> <?php echo form_error('demail'); ?><br />
            <?php echo form_input(array('id' => 'demail', 'name' => 'demail')); ?><br />

            <?php echo form_label('Password:'); ?> <?php echo form_error('dmobile'); ?><br />
            <input type="password" id="dpassword" name="dpassword">
    

            <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
            <?php echo form_close(); ?><br/>
           <div id="fugo">

            </div>

        </div>
        
    </body>
</html>
