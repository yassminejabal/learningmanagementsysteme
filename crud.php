<?php
function virifer_email($_connection, $_POS)
{
    $email = $_POS['email'];
    $sqll = "SELECT * FROM users WHERE email = '$email'";
    $sqliu = mysqli_query($_connection, $sqll);
    $data = mysqli_fetch_assoc($sqliu);

    return $data;
}
function katjib_datacours($connction, $user_id)
{
    $sql = "SELECT * FROM enrollments where user_id='$user_id'";
    $sqliu = mysqli_query($connction, $sql);
    $data = mysqli_fetch_all($sqliu);
    return $data;
}
function ajoutecoursdansenroulmnte($connction, $user_id, $course_id)
{
    $sql = "INSERT INTO enrollments (user_id,course_id) VALUES('$user_id','$course_id')";
    mysqli_query($connction, $sql);
}
function njibarayu($ARF)
{
    $aray=[];
    for($i=0;$i<count($ARF);$i++){
    array_push($aray,$ARF[$i][2]);
    }
    return $aray;
}
function ajouteusercoures($_connection,$id_courses){
        $sql = "INSERT INTO userscourses (id_courses) VALUES('$id_courses')";
    mysqli_query($_connection, $sql);
}
