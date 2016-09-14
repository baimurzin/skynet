var adminModule = {};

$(function () {
    adminModule = {
        userShareRequestTable: '#userShareRequestTable',
        userShareRequestTableSelected: [],
        usersTable: '#usersTable',
        usersTableSelected: [],
        dividendPayForm: '#dividendPayForm',

        initUserShareRequestTable: function () {
            $(adminModule.userShareRequestTable).parents('div.box-body:first').find('.disable-selected').prop('disabled', true);

            $(adminModule.userShareRequestTable).bootstrapTable({
                clickToSelect: true,
                pagination: true,
                classes: 'table table-striped',
                idField: 'id',
                uniqueID: 'id',
                escape: true,
                method: 'GET',
                sortName: 'created_at',
                sortOrder: 'desc',
                url: $(adminModule.userShareRequestTable).data('url'),
                columns: [
                    {
                        field: 'state',
                        checkbox: true,
                        formatter: function (value, row, index) {
                            return $.inArray(row.id, adminModule.userShareRequestTableSelected) >= 0;
                        }
                    },
                    {
                        field: 'amount',
                        title: 'Кол-во долей',
                        sortable: true
                    },
                    {
                        field: 'sum',
                        title: 'Сумма',
                        sortable: true,
                        formatter: function (value, row, index) {
                            return row.amount * 5000;
                        }
                    },
                    {
                        field: 'full_name',
                        title: 'От кого'
                    },
                    {
                        field: 'created_at',
                        title: 'Дата',
                        sortable: true,
                        width: '150px',
                        formatter: function (value, row, index) {
                            return '<span class="small">' + value + '</span>';
                        }
                    }
                ]
            });

            $(adminModule.userShareRequestTable).on('check.bs.table uncheck.bs.table check-all.bs.table uncheck-all.bs.table', function (e, r) {
                adminModule.userShareRequestTableSelected = adminModule.tableSelector(e, r, adminModule.userShareRequestTable, adminModule.userShareRequestTableSelected);

                $(adminModule.userShareRequestTable).parents('div.box-body:first').find('.disable-selected').prop('disabled', !adminModule.userShareRequestTableSelected.length);
            });
        },

        initUsersTable: function () {
            $(adminModule.usersTable).parents('div.box-body:first').find('.disable-selected').prop('disabled', true);

            $(adminModule.usersTable).bootstrapTable({
                clickToSelect: true,
                pagination: true,
                classes: 'table table-striped',
                idField: 'id',
                uniqueID: 'id',
                escape: true,
                method: 'GET',
                sortName: 'created_at',
                sortOrder: 'desc',
                url: $(adminModule.usersTable).data('url'),
                columns: [
                    {
                        field: 'full_name',
                        title: 'Фамилия Имя',
                        sortable: true
                    },
                    {
                        field: 'email',
                        title: 'E-mail',
                        sortable: true
                    },
                    {
                        field: 'phone',
                        title: 'Телефон'
                    },
                    {
                        field: 'skype',
                        title: 'Skype'
                    },
                    {
                        field: 'a_money',
                        title: 'Партнерские'
                    },
                    {
                        field: 'dividends',
                        title: "Дивиденды"
                    },
                    {
                        field: 'created_at',
                        title: 'Дата',
                        sortable: true,
                        width: '150px',
                        formatter: function (value, row, index) {
                            return '<span class="small">' + value + '</span>';
                        }
                    }
                ]
            });

            $(adminModule.usersTable).on('check.bs.table uncheck.bs.table check-all.bs.table uncheck-all.bs.table', function (e, r) {
                adminModule.usersTableSelected = adminModule.tableSelector(e, r, adminModule.usersTable, adminModule.usersTableSelected);

                $(adminModule.usersTable).parents('div.box-body:first').find('.disable-selected').prop('disabled', !adminModule.usersTableSelected.length);
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
        },

        payDividends: function (o) {
            var data = $(adminModule.dividendPayForm).serialize();
            $.ajax({
                type: 'POST',
                data: data,
                url: $(adminModule.dividendPayForm).data('pay_url'),
                success: function (data) {
                    commonModule.notify('success', "Дивиденды рассчитаны");
                },
                error: function (err) {
                    commonModule.notify('error', err.message);
                }
            })
        },

        approveSharesRequest: function (target) {
            var url = $(target).data('approve_url'),
                ids = adminModule.userShareRequestTableSelected;
            $.ajax({
                method: 'POST',
                url: url + '/' + ids.join(","),
                success: function (data) {
                    commonModule.notify('success', 'Selected reports were archived!');
                    commonModule.refreshTable(adminModule.userShareRequestTable);
                },
                error: function (e) {
                    commonModule.notify('error', e.status + ': ' + e.statusText);
                }
            })
        },

        declineSharesRequests: function (target) {
            var url = $(target).data('delete_url'),
                ids = adminModule.userShareRequestTableSelected,
                table = adminModule.userShareRequestTable,
                confirm = 'Уверены?',
                empty = 'Ничего не быбрано',
                success = 'Выбранные заявки удалены!',
                error = '';

            adminModule.destroyItemsFromTable(url, table, ids, confirm, empty, success, error);
        },

        destroyItemsFromTable: function (url, table, ids, msgConfirm, msgEmpty, msgSuccess, msgError, callback, method) {
            var data = {};

            if (!confirm(msgConfirm)) return false;

            if (!ids.length) {
                commonModule.notify('error', msgEmpty);
                return false;
            }

            if (!method) {
                method = 'delete';
            }
            data._method = method;

            $.ajax({
                type: "POST",
                url: url + '/' + ids.join(","),
                data: data,
                success: function () {
                    commonModule.notify('success', msgSuccess);
                    if (callback) {
                        callback();
                    } else {
                        commonModule.refreshTable(table);
                    }
                },
                error: function (e) {
                    commonModule.notify('error', e.status + ': ' + e.statusText);
                }
            });
        }
    };
});