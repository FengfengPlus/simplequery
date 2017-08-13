function query() {
    var pre = document.getElementById("input").value;
    
    prep={data:pre};
    $.ajax({
        //提交数据的类型 POST GET
        type:"POST",
        //提交的网址
        url:"query.php",
        //提交的数据
        data:prep,
        
        success:function(data){
            document.getElementById("fin").innerHTML=data;         
        }   ,
     });

     
    }
