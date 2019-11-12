<!-- header --> 
<?php $this -> load -> view('templates/header'); ?>

<!-- form for add event -->
<?php echo form_open('add_event'); ?>
	<div class="formgrop">
		<label class="w-auto block">Event Name</label>
		<input type="text" name="event_name" class="p-2 border rounded border-gray-300" placeholder="Event Name">
	</div>

	<div class="formgrop">
		<label class="w-64 block">Event Description</label>
		<textarea type="text" name="event_desc" class="p-2 border rounded border-gray-300" placeholder="Event Name"></textarea>
	</div>
	<div class="formgrop mb-2">
		<label class="w-64 block">Head</label>
		<select type="text" name="event_head" class="p-2 border rounded border-gray-300" placeholder="Event Name">
			<option value="1">some option</option>
		</select>
	</div>


	<input type="submit" name="add_event_btn" class="p-2 bg-green-400 text-white shadow rounded px-6">

</form>

<!-- footer