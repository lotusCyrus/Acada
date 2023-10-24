function getId(clickedcourse)
{   var clickedcourse=clickedcourse.id;
    alert(clickedcourse);
    location.href="../downloads.php?clickedcourse="+ clickedcourse;
}