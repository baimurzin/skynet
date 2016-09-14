var commonModule;

$(function () {
    commonModule = {
        
        
        notify: function(type, message) {
            if (!type || !message) return false;

            Lobibox.notify(type, {
                soundPath: '/js/lobibox/sounds/',
                soundExt: '.ogg',
                showClass: 'bounceIn',
                hideClass: 'bounceOut',
                delay: 10000,
                delayIndicator: false,
                position: "top right",
                msg: message
            });
        },
        notifyLoad: function() {
            $.ajax({
                type: "GET",
                url: '',
                success: function (data) {
                    if (data.length > 0) {
                        for(i=0;i<data.length;i++) {
                            commonModule.notify(data[i].type, data[i].message);
                        }
                    }
                },
                error: function(e) {
                    commonModule.checkLoginSession(e);
                }
            });
        },
        refreshTable: function (table) {
            $(table).bootstrapTable('refresh');
        }
    };

    $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}
    });

});