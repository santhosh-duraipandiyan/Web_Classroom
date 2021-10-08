<html>  
    <head>  
        <title>Webslesson Demo - Live Table Add Edit Delete using Ajax Jquery in PHP Mysql</title>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    </head>  
    <body>  
        <center><h1 style="padding-top: 25px; padding-bottom: 25px; background:#999;">RESULT UPDATE</h1></center>
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
        var name = $('#name').text();
        var subject1 = $('#subject1').text();  
        var subject2 = $('#subject2').text();
        var subject3 = $('#subject3').text();
        var subject4 = $('#subject4').text();
        var subject5 = $('#subject5').text();    
        if(name == '')  
        {  
            alert("Enter name");  
            return false;  
        }  
        if(subject1 == '')  
        {  
            alert("Enter subject1");  
            return false;  
        }  
        if(subject2 == '')  
        {  
            alert("Enter subject2");  
            return false;  
        }  
        if(subject3 == '')  
        {  
            alert("Enter subject3");  
            return false;  
        }  
        if(subject4 == '')  
        {  
            alert("Enter subject4");  
            return false;  
        }  
        if(subject5 == '')  
        {  
            alert("Enter subject5");  
            return false;  
        }  
        $.ajax({  
            url:"insert.php",  
            method:"POST",  
            data:{name:name, subject1:subject1, subject2:subject2, subject3:subject3, subject4:subject4, subject5:subject5,},  
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
    $(document).on('blur', '.name', function(){  
        var id = $(this).data("id1");  
        var rollno = $(this).text();  
        edit_data(id, name, "name");  
    });  
    $(document).on('blur', '.subject1', function(){  
        var id = $(this).data("id2");  
        var name = $(this).text();  
        edit_data(id,subject1, "subject1");  
    });  
    $(document).on('blur', '.subject2', function(){  
        var id = $(this).data("id2");  
        var name = $(this).text();  
        edit_data(id,subject2, "subject2");  
    });  
    $(document).on('blur', '.subject3', function(){  
        var id = $(this).data("id2");  
        var name = $(this).text();  
        edit_data(id,subject3, "subject3");  
    });  
    $(document).on('blur', '.subject4', function(){  
        var id = $(this).data("id2");  
        var name = $(this).text();  
        edit_data(id,subject4, "subject4");  
    });  
    $(document).on('blur', '.subject5', function(){  
        var id = $(this).data("id2");  
        var name = $(this).text();  
        edit_data(id,subject5, "subject5");  
    });  
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id7"); 

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