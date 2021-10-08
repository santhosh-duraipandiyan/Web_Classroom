<?php  
 $connect = mysqli_connect("localhost", "root", "", "student's data");  
 $output = '';  
 $sql = "SELECT * FROM students";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Id</th>  
                     <th width="10%">Rollno</th>  
                     <th width="20%">name</th>
                     <th width="10%">age</th>
                     <th width="20%">address</th>
                     <th width="20%">phno</th>  
                     <th width="10%">Delete</th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
	  if($rows > 10)
	  {
		  $delete_records = $rows - 10;
		  $delete_sql = "DELETE FROM students LIMIT $delete_records";
		  mysqli_query($connect, $delete_sql);
	  }
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="rollno" data-id1="'.$row["id"].'" contenteditable>'.$row["rollno"].'</td>  
                     <td class="name" data-id2="'.$row["id"].'" contenteditable>'.$row["name"].'</td> 
                     <td class="age" data-id3="'.$row["id"].'" contenteditable>'.$row["age"].'</td>  
                     <td class="address" data-id4="'.$row["id"].'" contenteditable>'.$row["address"].'</td> 
                     <td class="phno" data-id5="'.$row["id"].'" contenteditable>'.$row["phno"].'</td>   
                     <td><button type="button" name="delete_btn" data-id6="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="rollno" contenteditable></td>  
                <td id="name" contenteditable></td>  
                <td id="age" contenteditable></td>  
                <td id="address" contenteditable></td>  
                <td id="phno" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td></td>  
					     <td id="rollno" contenteditable></td>  
               <td id="name" contenteditable></td>  
               <td id="age" contenteditable></td>  
               <td id="address" contenteditable></td>  
               <td id="phno" contenteditable></td>   
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>