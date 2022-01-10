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
            else{
            alert('Gửi thành công. Chúng tôi sẽ liên hệ với bạn sớm nhất!');
            return true};
        })
        
        $("#quantity").change(function(){
            var $t = $("#quantity").val()*Number($("#price").html());
            $("#total").inerHTML =" String($t)";
        }) 

        $('#btnSave').click(function(){
            if($("#tourname").val()==''||$("#tourimg").val()==''||$("#tourdes").val()==''||$("#tourschedule").val()==''){
                alert('Vui lòng điền đầy đủ thông tin!');
                return false;}
                else{
                alert('Thêm thành công');
                return true};
        })

        $('#btnOrder').click(function(){
            if($("#dienthoai").val()==''||$("#solg").val()==''||$("#hoten").val()==''||$("#email").val()==''){
                alert('Vui lòng điền đầy đủ thông tin!');
                return false;}
                else{
                alert('Gửi yêu cầu thành công.Nhân viên sẽ liên hệ với bạn sau ít phút!');
                return true};
        })

        $('#btnEdit').click(function(){
            if($("#tournameE").val().trim()===''||$("#tourimgE").val().trim()===''||$("#tourdesE").val().trim()===''||$("#tourscheduleE").val().trim()===''){
                alert('Vui lòng điền đầy đủ thông tin!');
                return false;}
                else{
                alert('Sửa thành công');
                return true};
        })

        
       }) 

       

       