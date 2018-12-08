(function ($) {
    $(function () {
        $('table#coupons').DataTable();
        $('table#students').DataTable();
        $('table#counselors').DataTable();
        $('input[type=file]').change(function () {
            var t         = $(this).val();
            var labelText = 'File : ' + t.substr(12, t.length);
            $(this).prev('label').text(labelText);
        })
    });
    /*
     * Run right away
     * */
})(jQuery);
