<html xmlns="http://www.w3.org/1999/xhtml">  
   <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
      <title>Untitled Document</title>  
   </head>  
   <table border="1">  
      <tbody>  
         <tr>  
            <td>id</td>  
            <td>Name</td> 
            <td>Email</td>
            <td>Password</td> 
         </tr>  
         <?php  
         foreach ($h->result() as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->id;?></td>  
            <td><?php echo $row->Name;?></td> 
            <td><?php echo $row->Email;?></td>
            <td><?php echo $row->Password;?></td> 
            </tr>  
         <?php }  
         ?>  
      </tbody>  
   </table>  
<body>  
</body>  
</html>  