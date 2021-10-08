<?php  
 $connect = mysqli_connect("localhost", "root", "", "timetable");  
 $output = '';  
 $sql = "SELECT * FROM tb";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered" style="border: 1px solid #999;">  
                <tr style="background:#999;">  
                     <th width="10%">S.NO</th>  
                     <th width="15%">DAY</th>  
                     <th width="15%">FIRST</th>  
                     <th width="15%">SECOND</th> 
                     <th width="15%">THIRD</th>  
                     <th width="15%">FOURTH</th>  
                     <th width="15%">FIFTH</th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 { 
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="day" data-id1="'.$row["id"].'" contenteditable>'.$row["day"].'</td>  
                     <td class="first" data-id2="'.$row["id"].'" contenteditable>'.$row["first"].'</td>
                     <td class="second" data-id3="'.$row["id"].'" contenteditable>'.$row["second"].'</td>
                     <td class="third" data-id4="'.$row["id"].'" contenteditable>'.$row["third"].'</td>
                     <td class="fourth" data-id5="'.$row["id"].'" contenteditable>'.$row["fourth"].'</td>
                     <td class="fifth" data-id6="'.$row["id"].'" contenteditable>'.$row["fifth"].'</td>


                </tr>  
           ';  
      }  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>