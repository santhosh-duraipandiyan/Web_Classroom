<?php  
 $connect = mysqli_connect("localhost", "root", "", "student's data");  
 $output = '';  
 $sql = "SELECT * FROM results";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="20%">ID</th>  
                     <th width="20%">NAME</th>  
                     <th width="10%">SUBJECT-1</th>
                     <th width="10%">SUBJECT-2</th>
                     <th width="10%">SUBJECT-3</th>
                     <th width="10%">SUBJECT4</th> 
                     <th width="10%">SUBJECT5</th> 
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
                     <td class="name" data-id1="'.$row["id"].'" contenteditable>'.$row["name"].'</td>  
                     <td class="subject1" data-id2="'.$row["id"].'" contenteditable>'.$row["subject1"].'</td> 
                     <td class="subject2" data-id3="'.$row["id"].'" contenteditable>'.$row["subject2"].'</td>  
                     <td class="subject3" data-id4="'.$row["id"].'" contenteditable>'.$row["subject3"].'</td> 
                     <td class="subject4" data-id5="'.$row["id"].'" contenteditable>'.$row["subject4"].'</td> 
                     <td class="subject5" data-id6="'.$row["id"].'" contenteditable>'.$row["subject5"].'</td>   
                     <td><button type="button" name="delete_btn" data-id7="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="name" contenteditable></td>  
                <td id="subject1" contenteditable></td>  
                <td id="subject2" contenteditable></td>  
                <td id="subject3" contenteditable></td>  
                <td id="subject4" contenteditable></td>  
                <td id="subject5" contenteditable></td> 
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td></td>  
					      <td id="name" contenteditable></td>  
                <td id="subject1" contenteditable></td>  
                <td id="subject2" contenteditable></td>  
                <td id="subject3" contenteditable></td>  
                <td id="subject4" contenteditable></td>  
                <td id="subject5" contenteditable></td> 
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>