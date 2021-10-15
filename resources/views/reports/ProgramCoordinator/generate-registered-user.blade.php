<div style="width:80%;">
	{{ $data }}
</div>
<?php
    header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header("Content-Disposition: attachment; filename=gez.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
?>
