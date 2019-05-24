<div class="container vh-height">
	<div class="col-md-10">
		<h1 class="text-center text-capitalize">Task 1</h1>

		<div class="form-group">
			<h3 id="data" class="text-center text-capitalize my-5"></h3>
			<h4 hidden id="orginal_timestamp" class="text-center text-capitalize"></h4>

			<?= form_open('tasks/unix_date', 'id="ajaxForm"') ?>
			<label for="unix_time">Enter a Unix time</label>
			<?php echo validation_errors(); ?>
			<input type="text" class="form-control form-control-lg" name="time" id="unix_time" aria-describedby="helpId"
				placeholder="Enter Unix time" required>

			<button id="unix-button" type="submit" class="btn mt-3 btn-lg btn-primary">Submit</button>
			</form>

			<?= form_open('tasks/unix_offset', 'id="ajaxForm2"') ?>
			<label for="unix_time">Enter a Unix time</label>
			<?php echo validation_errors(); ?>

			<label for="offset_time" class="mt-3">Offset the time</label>
			<input type="text" class="form-control form-control-lg" name="offset_time" id="offset_time"
				aria-describedby="helpId" placeholder="Offset unix time">

			<button id="unix-button" type="submit" class="btn mt-3 btn-lg btn-primary">Submit</button>
			</form>
		</div>

	</div>
</div>

<div class="container-fluid bg-light vh-height">
	<div class="container">
		<div class="col-md-10 mx-auto mt-5">
			<h3 class="text-center text-capitalize">
				Get saved unix dates
			</h3>
		</div>
		<div class="text-center mt-5">
			<button id="get_unix_time" class="btn btn-lg btn-primary">Get previous dates</button>
		</div>
		<table class="table  table-bordered mt-5" id="unix_table">
			<thead>
				<tr>
					<th scope="col">id</th>
					<th scope="col">date</th>
					<th scope="col">unix timestamp</th>
				</tr>
			</thead>
			<tbody id="unix_table_body">
			</tbody>
		</table>
	</div>
</div>

<div class="container-fluid vh-height">
	<div class="container">
		<div class="col-md-10 mx-auto mt-5">
			<h3 class="text-center text-capitalize">
				Get saved offset dates
			</h3>
		</div>
		<div class="text-center mt-5">
			<button id="get_offset_time" class="btn btn-lg btn-primary">Get previous dates</button>
		</div>
		<table class="table  table-bordered mt-5" id="unix_table">
			<thead>
				<tr>
					<th scope="col">id</th>
					<th scope="col">date</th>
					<th scope="col">offset unix timestamp</th>
					<th scope="col">orginal unix timestamp</th>
				</tr>
			</thead>
			<tbody id="offset_table_body">
			</tbody>
		</table>
	</div>
</div>

<div class="container-fluid bg-light">
	<div class="container vh-height">

		<div class="col-md-10">
			<h1 class="text-center text-capitalize">Task 2</h1>
			<h3 id="email_output" class="text-center text-capitalize my-5"></h3>
			<h4 id="email_message" class="text-center text-capitalize mb-3"></h4>

			<div class="form-group mx-auto">
				<!-- <h3 id="data" class="text-center text-capitalize my-5"></h3> -->
				<?= form_open('tasks/email_check', 'id="emailForm"') ?>
				<label for="email">Enter a valid email</label>
				<?php echo validation_errors(); ?>
				<input type="email" class="form-control form-control-lg" name="email" id="email" aria-describedby="helpId"
					placeholder="Enter a Email" required>
				<button id="unix-button" type="submit" class="btn btn-lg mt-3 btn-primary">Submit</button>
				</form>
			</div>
		</div>

	</div>
</div>

<div class="container-fluid bg-light vh-height">
	<div class="container">
		<div class="col-md-10 mx-auto mt-5">
			<h3 class="text-center text-capitalize">
				Get saved emails
			</h3>
		</div>
		<div class="text-center mt-5">
			<button id="get_emails" class="btn btn-lg btn-primary">Get previous dates</button>
		</div>
		<table class="table  table-bordered mt-5" id="unix_table">
			<thead>
				<tr>
					<th scope="col">id</th>
					<th scope="col">email</th>
				</tr>
			</thead>
			<tbody id="emails_table_body">
			</tbody>
		</table>
	</div>
</div>

<div class="container vh-height">
	<div class="col-md-10">

		<h1 class="text-center text-capitalize">Task 3</h1>
		<div class="form-group mx-auto">
			<div class="row">
				<div class="col-md-6">
					<h3 id="" class="text-center text-capitalize my-5">Heads</h3>
					<h3 id="coinData" class="text-center text-capitalize my-5"></h3>
				</div>
				<div class="col-md-6">
					<h3 id="" class="text-center text-capitalize my-5">Tails</h3>
					<h3 id="coinData2" class="text-center text-capitalize my-5"></h3>
				</div>
			</div>
			<div class="my-3 col-md-12">
				<div class="progress">
					<div id="heads-bar" class="progress-bar bg-primary" role="progressbar" aria-valuenow="15" aria-valuemin="0"
						aria-valuemax="100"></div>
					<div id="tails-bar" class="progress-bar bg-success" role="progressbar" aria-valuenow="30" aria-valuemin="0"
						aria-valuemax="100"></div>
				</div>
			</div>
			<?= form_open('tasks/coin_flip', 'id="coinForm"') ?>
			<label for="coin">Enter amount of times to filp</label>
			<?php echo validation_errors(); ?>
			<input type="number" min="1" class="form-control form-control-lg" name="coin" id="coin" aria-describedby="helpId"
				placeholder="Enter number of coin filps" required>

			<button id="unix-button" type="submit" class="btn mt-3 btn-lg btn-primary">Submit</button>
			</form>
		</div>

	</div>
</div>

<div class="container-fluid bg-light vh-height">
	<div class="container">
		<div class="col-md-10 mx-auto mt-5">
			<h3 class="text-center text-capitalize">
				Get saved coin flips 
			</h3>
		</div>
		<div class="text-center mt-5">
			<button id="get_coin_flips" class="btn btn-lg btn-primary">Get previous dates</button>
		</div>
		<table class="table  table-bordered mt-5" id="unix_table">
			<thead>
				<tr>
					<th scope="col">id</th>
					<th scope="col">times coin flips</th>
					<th scope="col">heads</th>
					<th scope="col">tails</th>
					<th scope="col">heads percent</th>
					<th scope="col">tails percent</th>
				</tr>
			</thead>
			<tbody id="coin_table_body">
			</tbody>
		</table>
	</div>
</div>

<script>
	//set unix time stamp
	$(document).ready(() => {
		$('#ajaxForm').submit((e) => {
			e.preventDefault();
			let timestamp = $('#unix_time').val();

			$.ajax({
				url: "<?= base_url('tasks/unix_date') ?>",
				method: "POST",
				dataType: 'JSON',
				data: {
					timestamp: timestamp
				},
				success: (data) => {

					if (data.error) {
						console.log(data.error);
						$('#data').html(data.error);
					}
					if (data.date) {
						$('#data').html(data.date);
						$('#orginal_timestamp').html(data.orginal_date);
					}
				},
				error: (xhr, status, error, url) => {
					alert(url, status);
					console.log(xhr);
					console.log(status);
					console.log(error);
				},
			})
		});

// get unix time stamp
		$('#get_unix_time').click(() => {

			$.ajax({
				url: "<?= base_url('data/get_unix_time') ?>",
				method: "POST",
				dataType: 'JSON',
				data: {

				},
				success: (data) => {
					if (data) {
						data.forEach((data) =>{
							$('#unix_table_body').append(`
							<tr>
							<th scope="row">${data.id}</th>
							<td>${data.date}</td>
							<td>${data.raw_time}</td>
						</tr>
							`)
						});
					}
				},
				error: (xhr, status, error, url) => {
					alert(url, status);
					console.log(xhr);
					console.log(status);
					console.log(error);
				},
			})
		});
	})

</script>

<script>
//set offset date
$(document).ready(() => {
		$('#ajaxForm2').submit((e) => {
			e.preventDefault();

			let timestamp = $('#orginal_timestamp').text();
			let offset = $('#offset_time').val();

			$.ajax({
				url: "<?= base_url('tasks/unix_offset') ?>",
				method: "POST",
				dataType: 'JSON',
				data: {
					offset: offset,
					timestamp: timestamp,
				},
				success: (data) => {
					if (data.date) {
						$('#data').html(data.date);
						$('#orginal_timestamp').html(data.orginal_date);
					}
				},
				error: (xhr, status, error, url) => {

					console.log(xhr);
					console.log(status);
					console.log(error);
				},
			})
		});

// get offset date

		$('#get_offset_time').click(() => {

			$.ajax({
				url: "<?= base_url('data/get_offset_time') ?>",
				method: "POST",
				dataType: 'JSON',
				data: {

				},
				success: (data) => {
					if (data) {
						data.forEach((data) =>{
							$('#offset_table_body').append(`
							<tr>
							<th scope="row">${data.id}</th>
							<td>${data.date}</td>
							<td>${data.offset_raw_date}</td>
							<td>${data.orginal_raw_date}</td>
						</tr>
							`)
						});
					}
				},
				error: (xhr, status, error, url) => {
					alert(url, status);
					console.log(xhr);
					console.log(status);
					console.log(error);
				},
			})
		});
	});
</script>

<script>
	// set email

	$(document).ready(() => {
		$('#emailForm').submit((e) => {
			e.preventDefault();

			let email = $('#email').val();

			$.ajax({
				url: "<?= base_url('tasks/email_check') ?>",
				method: "POST",
				dataType: 'JSON',
				data: {
					email: email
				},
				success: (data) => {
					if (data.error) {
						$('#email_output').html(data.email);
						$('#email_message').html(data.error);
					} else if (data.vaild) {
						$('#email_output').html(data.email);
						$('#email_message').html(data.vaild);
					}
				},
				error: (xhr, status, error, url) => {
					alert(url, status);
					console.log(xhr);
					console.log(status);
					console.log(error);
				},
			})
		})

// get emails
		$('#get_emails').click(() => {

			$.ajax({
				url: "<?= base_url('data/get_emails') ?>",
				method: "POST",
				dataType: 'JSON',
				data: {

				},
				success: (data) => {
					if (data) {
						data.forEach((data) =>{
							$('#emails_table_body').append(`
							<tr>
							<th scope="row">${data.id}</th>
							<td>${data.email}</td>
							</tr>
							`)
						});
					}
				},
				error: (xhr, status, error, url) => {
					alert(url, status);
					console.log(xhr);
					console.log(status);
					console.log(error);
				},
			})
		});
	})
</script>

<script>
// flip coin 
$(document).ready(() => {
		$('#coinForm').submit((e) => {
			e.preventDefault();
			let number = $('#coin').val();

			$.ajax({
				url: "<?= base_url('tasks/coin_flip') ?>",
				method: "POST",
				dataType: 'JSON',
				data: {
					number: number
				},
				success: (data) => {
					if (data) {
						$('#coinData').html(data.heads);
						$('#coinData2').html(data.tails);
						$('#heads-bar').attr('style', 'width:' + data.headsPercent);
						$('#tails-bar').attr('style', 'width:' + data.tailsPercent);
					}
				},
				error: (xhr, status, error, url) => {
					alert(url, status);
					console.log(xhr);
					console.log(status);
					console.log(error);
				},
			})
		})

// get coin data

		$('#get_coin_flips').click(() => {

			$.ajax({
				url: "<?= base_url('data/get_coin_flips') ?>",
				method: "POST",
				dataType: 'JSON',
				data: {

				},
				success: (data) => {
					if (data) {
						data.forEach((data) =>{
							$('#coin_table_body').append(`
							<tr>
							<th scope="row">${data.id}</th>
							<td>${data.number_coin_filps}</td>
							<td>${data.number_heads}</td>
							<td>${data.number_tails}</td>
							<td>${data.percent_heads}</td>
							<td>${data.percent_tails}</td>
						</tr>
							`)
						});
					}
				},
				error: (xhr, status, error, url) => {
					alert(url, status);
					console.log(xhr);
					console.log(status);
					console.log(error);
				},
			})
		});
	})
</script>