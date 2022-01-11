

document.addEventListener('DOMContentLoaded', () => {


    if ($("#drophere").length > 0) {


        let csrfToken = $('meta[name = "csrf-token"]').attr('content');
        let uniqueSecret = $('input[name="uniqueSecret"]').attr('value');
        // console.log(csrfToken , uniqueSecret);

        let myDropzone = new Dropzone("#drophere", {
            url: '/article/images/upload',

            params: {
                _token: csrfToken,
                uniqueSecret: uniqueSecret,
            },

            addRemoveLinks: true,
            
            
            init:function(){
                $.ajax({
                    type:'GET',
                    url: '/article/image',
                    data:{
                        uniqueSecret: uniqueSecret,
                    },
                    dataType: 'json'
                }).done(function(data){
                    $.each(data, function(key, value){
                        let file = {
                            serverId: value.id
                        };

                        myDropzone.options.addedfile.call(myDropzone, file);
                        myDropzone.options.thumbnail.call(myDropzone, file, value.src);
                    });
                });
            }

            
        });

       

        myDropzone.on("success", function (file, response) {
            file.serverId = response.id;
        });


        myDropzone.on("removedFile", function (file) {
            $.ajax({
                type: 'DELETE',
                url: '/article/images/remove',
                data: {
                    
                    _token: csrfToken,
                    id: file.serverId,
                    uniqueSecret: uniqueSecret,

                },
                dataType: 'json'
            })

        });
    }

})



