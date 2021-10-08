<html>  
    <head>  
        <title>TIMETABLE-UPDATE</title>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <!-- font -->
        <link href="https://fonts.googleapis.com/css?family=Raleway|Chivo|Cinzel+Decorative" rel="stylesheet">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    </head>  
    <body>  
        <center>
        <h1 style="font-family: 'Cinzel Decorative', cursive;">timetable update</h1>
        </center>
        <div class="container" style="margin-top: 150px;">  
            <br />  
            <br />
			<br />
			<div class="table-responsive">  
				<span id="result"></span>
				<div id="live_data"></div>                 
			</div>  
		</div>
    </body>  
</html>  
<script>  
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"select.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
      
    
	function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
				$('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
    $(document).on('blur', '.day', function(){  
        var id = $(this).data("id1");  
        var day = $(this).text();  
        edit_data(id, day, "day");  
    });  
    $(document).on('blur', '.first', function(){  
        var id = $(this).data("id2");  
        var first = $(this).text();  
        edit_data(id,first, "first");  
    });  
     $(document).on('blur', '.second', function(){  
        var id = $(this).data("id3");  
        var second = $(this).text();  
        edit_data(id,second, "second");  
    });  
      $(document).on('blur', '.third', function(){  
        var id = $(this).data("id4");  
        var third = $(this).text();  
        edit_data(id,third, "third");  
    });  
       $(document).on('blur', '.fourth', function(){  
        var id = $(this).data("id5");  
        var fourth = $(this).text();  
        edit_data(id,fourth, "fourth");  
    });  
        $(document).on('blur', '.fifth', function(){  
        var id = $(this).data("id6");  
        var fifth = $(this).text();  
        edit_data(id,fifth, "fifth");  
    });  
});  
</script>