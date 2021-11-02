php 

include('header.php');
include('..configconnect.php');

div class=container my-main

    h2 class=text-uppercase my-title-adQuản lý người dùngh2
    table class=table table-striped
        thead
            tr
                th scope=colSTTth
                th scope=coluserIDth
                th scope=coluserNameth
                th scope=coluserPassth
                th scope=coluserEmailth
                th scope=coluserCodeth
                th scope=coluserPhoneth
                th scope=colregistration_dateth
                th scope=coluserStatusth
                th scope=colactionth
            tr
        thead
        tbody

        php
            $sql = select   from users;
            $result = mysqli_query($conn,$sql);
            
            if(mysqli_num_rows($result)0){
                $STT=1;
                while($row=mysqli_fetch_assoc($result)){
                    $userID=$row['userID'];
                    $userName=$row['userName'];
                    $userPass=$row['userPass'];
                    $userEmail=$row['userEmail'];
                    $userCode=$row['userCode'];
                    $userPhone=$row['userPhone'];
                    $registration_date=$row['registration_date'];
                    $userStatus=$row['userStatus'];
tr
                th scope=rowphp echo $STT++th
                tdphp echo $userIDtd
                tdphp echo $userNametd
                tdphp echo $userPasstd
                tdphp echo $userEmailtd
                tdphp echo $userCodetd
                tdphp echo $userPhonetd
                tdphp echo $registration_datetd
                tdphp echo $userStatustd

                td
                    a href=deleteuser.phpid=php echo $userID; 
                        onclick=return confirm('Bạn chắc chắn muốn xóa')button type=button
                            class=btn btn-dangerXóabuttona
                td


            tr
         php       }
            } else echo $sql;
        

            
        tbody
    table
div



php
include('footer.php');
