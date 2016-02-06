var scriptEdit = {
    init: function(){
        this.editEvent();
    },

    editEvent: function () {
        $('.edit_used').each(function () {
            var elementSpan = $(this);
            var userId = elementSpan.data('user-id');
            elementSpan.on('click', function (e) {
                e.preventDefault();
                scriptEdit.getUser(userId);
            });
        });
    },

    getUser: function (userId) {
        $.ajax({
            type: "POST",
            url: '/getUser/' + userId,
            dataType: "json",
            beforeSend: function () {
            },
            success: function (data) {
                scriptEdit.fillForm(data);
                $('#editUsed').modal();
            },
            error: function (data) {
            }
        })
    },

    fillForm: function(userData){
        if(userData == undefined || userData==''){
            return;
        }
        var modalBody = $('#editUsed').find('.modal-body');
        modalBody.find('.name').val(userData.title);
        modalBody.find('.address').val(userData.content);
        modalBody.find('.edit_used').on("click",function(e){
            e.preventDefault();
            scriptEdit.updateUser(userData.id)

        });
    },
}