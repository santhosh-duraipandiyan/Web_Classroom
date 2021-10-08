<html>  
    <head>  
        <title>Webslesson Demo - Live Table Add Edit Delete using Ajax Jquery in PHP Mysql</title>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    </head>  
    <body>  
        <div class="container">  
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
    $(document).on('click', '#btn_add', function(){  
        var rollno = $('#rollno').text();  
        var name = $('#name').text();
        var age = $('#age').text();  
        var address = $('#address').text();
        var phno = $('#phno').text();    
        if(rollno == '')  
        {  
            alert("Enter roll number");  
            return false;  
        }  
        if(name == '')  
        {  
            alert("Enter name");  
            return false;  
        }  
        if(age == '')  
        {  
            alert("Enter age");  
            return false;  
        }  
        if(address == '')  
        {  
            alert("Enter address");  
            return false;  
        }  
        if(phno == '')  
        {  
            alert("Enter phone number");  
            return false;  
        }  
        $.ajax({  
            url:"insert.php",  
            method:"POST",  
            data:{rollno:rollno, name:name, age:age, address:address, phno:phno},  
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);  
                fetch_data();  
            }  
        })  
    });  
    
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
    $(document).on('blur', '.first_name', function(){  
        var id = $(this).data("id1");  
        var rollno = $(this).text();  
        edit_data(id, rollno, "rollno");  
    });  
    $(document).on('blur', '.last_name', function(){  
        var id = $(this).data("id2");  
        var name = $(this).text();  
        edit_data(id,name, "name");  
    });  
    $(document).on('blur', '.first_name', function(){  
        var id = $(this).data("id3");  
        var age = $(this).text();  
        edit_data(id, age, "age");  
    });  
    $(document).on('blur', '.last_name', function(){  
        var id = $(this).data("id4");  
        var address = $(this).text();  
        edit_data(id,address, "address");  
    });  
    $(document).on('blur', '.first_name', function(){  
        var id = $(this).data("id5");  
        var phno = $(this).text();  
        edit_data(id, phno, "phno");  
    });  
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id6"); 

        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"delete.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
});  
</script>