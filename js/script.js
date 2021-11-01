

$(document).ready(function(){
           $("#btn-search").click(function(){
              
               $("#btn-search").attr('href', 'moretour.php?id='+$("search-data").val());
           })
       }) 

