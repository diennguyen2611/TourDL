$(document).ready(function(){
           $("#btnSearch").click(function(){
               if($("#dataCheck").val()==''){
               alert('Vui lòng điền thông tin!');
               return false;}
               else
               return true;
           })
       }) 