
<!DOCTYPE html>
<html>
<head>
    <title></title>


<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    
    


   
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css
">
</head>
<body>
    <?php
$conn=mysqli_connect("localhost","root","","exicutive");

$sql="SELECT * FROM payment_details";
$result=mysqli_query($conn,$sql);
$total=mysqli_num_rows($result);
//echo $total;
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
               
                   
                        <table id="example" class="table table-striped table-bordered" style="width:100%">

        <thead>
            <tr>
                <th>Sr\No.</th>
                <th>Amount</th>
                <th>Name</th>
                <th>Father/Husband Name</th>
                <th>Email</th>
            <th>Mobile_Number</th>
                <th>Date</th>
                <th>Blood_group</th>
                <th>qualificaton</th>
                <th>gender </th>
                <th>village</th>
                <th>post</th>
                <th>PS</th>
                <th>distict</th>
                <th>state</th>
                <th>pincode </th>
                <th>adhar_number</th>
                <th>pan_number</th>
                <th>status</th>
                <th>txn_id</th>
            </tr>
            <?php
            $n=1;
while($res=mysqli_fetch_assoc($result))
{
 
   echo "<tr>
   <td>".$n++."</td>
   <td>".$res['amount']."</td>
         <td>".$res['name']."</td>
          <td>".$res['father_name']."</td>
           <td>".$res['email']."</td>
            <td>".$res['mobile']."</td>
             <td>".$res['date']."</td>
             <td>".$res['blood_group']."</td>
          <td>".$res['qualificaton']."</td>
           <td>".$res['gender']."</td>
            <td>".$res['village']."</td>
             <td>".$res['post']."</td>
              <td>".$res['ps']."</td>
           <td>".$res['distict']."</td>
            <td>".$res['state']."</td>
             <td>".$res['pincode']."</td>

              <td>".$res['adhar_number']."</td>
            <td>".$res['pan_number']."</td>
             <td>".$res['status']."</td>
              <td>".$res['txn_id']."</td>
           <td><a href='delete.php?id=$res[id]' onclick='return checkclick()'>Delete</a></td>
             
              
             
             
         </tr>
   ";
}

//else
//{ echo "no result found";}
?>

        </thead>
        <tbody>
            
            
        </tfoot>
    </table>
           <script>
function checkclick()
{
return confirm ("Are you sure you want to delete data? ");}
</script>         
                
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
</body>
</html>