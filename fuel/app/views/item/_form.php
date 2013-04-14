<script type="text/javascript">
  //<![CDATA[
	$(function()
  {
		$('#itemname').poshytip({
			className: 'tip-darkgray',
			showOn: 'focus',
			alignTo: 'target',
			alignX: 'right',
			alignY: 'center',
			offsetX: 5
		});
		$('#description').poshytip({
			className: 'tip-darkgray',
			showOn: 'focus',
			alignTo: 'target',
			alignX: 'right',
			alignY: 'center',
			offsetX: 5
		});
		$('#serialnumber').poshytip({
			className: 'tip-darkgray',
			showOn: 'focus',
			alignTo: 'target',
			alignX: 'right',
			alignY: 'center',
			offsetX: 5
		});
	});
	//]]>
</script>

<?php echo Form::open(); ?>
	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('Item Name', 'itemname'); ?>

			<div class="input">
				<?php echo Form::input('itemname', Input::post('itemname', isset($item) ? $item->itemname : ''), array('class' => 'span4', 'id' => 'itemname', 'title' => 'Enter the name of the item.')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Item Description', 'itemdescription'); ?>

			<div class="input">
				<?php echo Form::input('itemdescription', Input::post('itemdescription', isset($item) ? $item->itemdescription : ''), array('class' => 'span4', 'id' => 'description', 'title' => 'Enter a brief description of the item, including any defining markings or aspects.')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Item Serial #', 'itemserial'); ?>

			<div class="input">
				<?php echo Form::input('itemserial', Input::post('itemserial', isset($item) ? $item->itemserial : ''), array('class' => 'span4', 'id' => 'serialnumber', 'title' => 'Enter the serial number located on the item.')); ?>

			</div>
		</div>
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>

		</div>
	</fieldset>
<?php echo Form::close(); ?>