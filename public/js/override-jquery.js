$(document).ready(function(){
    $('#campusLocation').on('change', function(){
        var locationID = $(this).val();
        if(locationID) {
            console.log(locationID);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                  });

            $.ajax({
                url: '/getLocationID/'+locationID,
                type:"GET",
                dataType:"json",

                success:function(data) {
                    $('#generation').empty()
                    $.each(data, function(key, value){
                        $('#generation').append('<option value="'+ value.generationID +'">' + value.generationName + '</option>');

                    });
                }
            });
        } else {
            
        }

    });
})