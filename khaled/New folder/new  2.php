<html>
<input name="file" type="text" id="file">

<script type="text/javascript">
    $(document).ready(function() {
        $('.button').click(function() {
            var val = $('#file').val();

            $.get('meta.php', {file: val}, function(data) {
                var result = $.parseJSON(data);
                $('input[name="nick_name"]').val(result.avaname);
                $('#age').val(result.tavaage).attr('selected', 'selected');
            });
        });
    });
</script>

<input type="button" class="button" value="GET/IMPORT">
</html>