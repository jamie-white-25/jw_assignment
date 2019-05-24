<div class="container my-5">
	<h1 class="text-center text-capitalize">Unix date</h1>
	<div class="form-group mx-auto col-md-8">
		<h3 id="data" class="text-center text-capitalize my-5"><?= $date ?></h3>
		<?= form_open('tasks/unix_num_to_date', 'id="ajaxForm"') ?>
            <label for="unix_time">Enter a Unix time</label>
            <?php echo validation_errors(); ?>
            <input type="text" class="form-control form-control-lg" name="time" id="unix_time" aria-describedby="helpId"
                placeholder="Enter Unix time" required>
            <button id="unix-button" type="submint" class="btn mt-3 btn-primary">Submit</button>
		</form>
	</div>
</div>
