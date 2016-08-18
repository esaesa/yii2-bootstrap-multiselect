function fillAjax(id, url) {
    var selected = $('#' + id).val();
    $.ajax({
        dataType: "json",
        url: url,
        data: {'x': 'b'},
        success: function (data, status, jqXHR) {
            var options = [];
            options = $.map(data.Options, function (val, key) {
                return {value: val.Value, label: val.DisplayText};
            });
            $('#' + id).multiselect('dataprovider', options);
            $('#' + id).multiselect('select', selected)
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
        }
    });
}