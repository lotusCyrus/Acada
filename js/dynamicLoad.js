$(document).ready(function(){
    var limit=4;
    var start=0;
    var action='inactive';
    function load_course_data(limit, start)
    {
        $.ajax({
            url:"fetch.php",
            method:"POST",
            data:{limit:limit, start:start},
            cache:false,
            success:function (data){
                $('#load_data').append(data);
                if(data =='')
                {
                $('#load_data_message').html("<button type='button' class='btn btn'>No Data Found</button>" );
                action='active';    
            }
                else{
                  $('#load_data_message').html("<button type='button' class='btn btn-warning'>Please wait...</button>");
                   action="inactive";
                }
            }
        })
    }
    if(action=='inactive')
    {
        action='active';
        load_course_data(limit, start)
    }
})