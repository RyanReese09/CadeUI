<?php
if($page==="Homepage")
{
?>
<script type="text/javascript" src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="//jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script type="text/javascript" src="/cadeui/system/js/scrollit.js"></script>
<script type="text/javascript" src="/cadeui/system/js/scrollflow.js"></script>
<script type="text/javascript" src="/cadeui/system/js/sticky.js"></script>
<script type="text/javascript" src="/cadeui/system/js/scripts.js"></script>
<?php
}
else if($page==="Login" && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
?>
<script type="text/javascript" src="/cadeui/system/js/process-home.js"></script>
<?php
}
else if($page==="Login")
{
?>
<script type="text/javascript" src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="//jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script type="text/javascript" src="/cadeui/system/js/process-home.js"></script>
<script type="text/javascript" src="/cadeui/system/js/scripts.js"></script>
<?php
}
else
{
?>
<script type="text/javascript" src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="/cadeui/system/js/scripts.js"></script>
<?php
}
?>