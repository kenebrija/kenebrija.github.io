$(document).ready(function(){

    $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        e.preventDefault(); 

        var formData = {
            person_id: $('select[name=user]').val(),
            project_id: $('#projects').val(),
            name: $('#user option:selected').text(),
        }
        var state = $('#btn-save').val();
        console.log(formData);

        $.ajax({

            type: 'POST',
            url: '/projects/assignments/' + formData.project_id,
            data: formData,
            dataType: 'json',
        
            success: function (data, xhr, status, thrown) {
                console.log(data.pid);
 
                var li = $('<li class="members"></li>')
                    .attr('id', data.pid)
                    .html(formData.name);

                var removeButton = $('<button class="remove1 btn1"> Remove </button>')
                    .attr('id', data.pid)
                    .attr('value', data.pid)
                    .click(onRemoveProjectButtonClicked)

                li.append(removeButton);

                
                $('#add').append(li);
                $('option:selected', '#user').remove();
            },
            error: function ( data, xhr, status, thrown) {
                console.log('Error:', data, xhr, status, thrown);
            }
        });
    });

    var onRemoveProjectButtonClicked = function(e) {
        e.preventDefault(); 

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        var personId = $(this).val();
        var formData = {
            name: $(this).attr('id'),
            id2: personId,
        }

        $.ajax({
            type: 'DELETE',
            url: '/projects/assignments/' + personId,
            data: formData,
        
            success: function (data, xhr, status, thrown) {
                console.log(data, xhr, status, thrown);
        
                 $(".members").remove("#" + personId);
                 $('#user').append($('<option>', {
                    value: formData.id2,
                    text: formData.name,
                }));


            },
            error: function ( data, xhr, status, thrown) {
                console.log('Error:', data, xhr, status, thrown);
            }
        });

        alert(personId);
    };

    $('.remove1').click(onRemoveProjectButtonClicked);
});
