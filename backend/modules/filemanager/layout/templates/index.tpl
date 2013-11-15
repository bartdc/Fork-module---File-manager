{include:{$BACKEND_CORE_PATH}/layout/templates/head.tpl}
{include:{$BACKEND_CORE_PATH}/layout/templates/structure_start_module.tpl}

<div class="pageTitle">
	<h2>{$lblFilemanager|ucfirst}</h2>
</div>
	<script type="text/javascript" src="/backend/core/js/ckfinder/ckfinder.js"></script>
	<script type="text/javascript">
		var finder = new CKFinder();
		finder.basePath = '../';
		finder.height = 600;
		finder.width = 1030;
		finder.create();
	</script>

{include:{$BACKEND_CORE_PATH}/layout/templates/structure_end_module.tpl}
{include:{$BACKEND_CORE_PATH}/layout/templates/footer.tpl}