$(document).ready(function(){
           $("#btnSearch").click(function(){
               if($("#dataCheck").val()==''){
               alert('Vui lòng điền thông tin!');
               return false;}
               else
               return true;
           })

           $("#sendBtn").click(function(){
            if($("#InputName").val()==''||$("#InputMobile").val()==''||$("#InputEmail").val()==''||$("#InputRequest").val()==''){
            alert('Vui lòng điền đầy đủ thông tin!');
            return false;}
            else
            alert('Gửi thành công. Chúng tôi sẽ liên hệ với bạn sớm nhất!');
            return true;
        })
       }) 

       