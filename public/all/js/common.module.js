var commonModule;

$(function () {
    commonModule = {

        invoiceTable: '#invoiceTable',
        transactTable: '#transactTable',

        notify: function (type, message) {
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
        notifyLoad: function () {
            $.ajax({
                type: "GET",
                url: '',
                success: function (data) {
                    if (data.length > 0) {
                        for (i = 0; i < data.length; i++) {
                            commonModule.notify(data[i].type, data[i].message);
                        }
                    }
                },
                error: function (e) {
                    commonModule.checkLoginSession(e);
                }
            });
        },
        refreshTable: function (table) {
            $(table).bootstrapTable('refresh');
        },

        initInvoiceTable: function () {
            $(commonModule.invoiceTable).bootstrapTable({
                pagination: true,
                classes: 'table table-striped full',
                rowStyle: function () {
                    return {
                        classes: 'filled'
                    };
                },
                idField: 'id',
                uniqueID: 'id',
                escape: true,
                method: 'GET',
                sortName: 'created_at',
                sortOrder: 'desc',
                url: $(commonModule.invoiceTable).data('url'),
                columns: [
                    {
                        field: 'created_at',
                        'title': 'Дата',
                        sortable: true,
                        width: '150px',
                        formatter: function(value, row, index) {
                            return '<span class="small">'+value+'</span>';
                        }
                    },
                    {
                        field: 'money_got',
                        title: 'Получил'
                    },
                    {
                        field: 'percent',
                        title: 'Процент'
                    },
                    {
                        field: 'sum',
                        title: 'С суммы'
                    }
                ]
            });
        },

        initTransactTable: function () {
            $(commonModule.transactTable).bootstrapTable({
                pagination: true,
                classes: 'table table-striped full',
                rowStyle: function () {
                    return {
                        classes: 'filled'
                    };
                },
                idField: 'id',
                uniqueID: 'id',
                escape: true,
                method: 'GET',
                sortName: 'created_at',
                sortOrder: 'desc',
                url: $(commonModule.transactTable).data('url'),
                columns: [
                    {
                        field: 'created_at',
                        'title': 'Дата',
                        sortable: true,
                        width: '150px',
                        formatter: function(value, row, index) {
                            return '<span class="small">'+value+'</span>';
                        }
                    },
                    {
                        title: 'Сумма',
                        formatter: function (value, row, index) {
                            return row.amount * 5000;
                        }
                    },
                    {
                        field: 'amount',
                        title: 'Доли'
                    }
                ]
            });
        },

        tableSelector: function (e, r, table, ids) {
            var selected,
                index;

            if (e.type == 'check') {
                ids.push(r.id);
            } else if (e.type == 'uncheck') {
                index = $.inArray(r.id, ids);
                if (index >= 0) {
                    ids.splice(index, 1);
                }
            } else if (e.type == 'check-all') {
                selected = $(table).bootstrapTable('getSelections');
                $.each(selected, function (key, value) {
                    if ($.inArray(value.id, ids) == -1) {
                        ids.push(value.id);
                    }
                });
            } else if (e.type == 'uncheck-all') {
                selected = $(table).bootstrapTable('getData', 'useCurrentPage');
                $.each(selected, function (key, value) {
                    index = $.inArray(value.id, ids);
                    if (index >= 0) {
                        ids.splice(index, 1);
                    }
                });
            }
            return ids;
        }
    };

    $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')}
    });

});