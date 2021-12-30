<div id="layoutSidenav_content">
<main>
	<div class="container mt-4">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<div class="row">
						<label for="test">test</label>
					</div>
					<div class="card-footer">
						<button id="pay-button" class="btn btn-primary">Pay!</button>
					</div>
				</div>
			</div>
		</div>
	</div>



	<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-RT96BokoJBdHxB9s"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript">
		$('#pay-button').click(function(event) {
			// event.preventDefault();
			// $(this).attr("disabled", "disabled");

			$.ajax({
				url: '<?= site_url() ?>/snap/token',
				cache: false,

				success: function(data) {
					//location = data;

					console.log('token = ' + data);

					var resultType = document.getElementById('result-type');
					var resultData = document.getElementById('result-data');

					function changeResult(type, data) {
						$("#result-type").val(type);
						$("#result-data").val(JSON.stringify(data));
						//resultType.innerHTML = type;
						//resultData.innerHTML = JSON.stringify(data);
					}

					snap.pay(data, {

						onSuccess: function(result) {
							changeResult('success', result);
							console.log(result.status_message);
							console.log(result);
							$("#payment-form").submit();
						},
						onPending: function(result) {
							changeResult('pending', result);
							console.log(result.status_message);
							$("#payment-form").submit();
						},
						onError: function(result) {
							changeResult('error', result);
							console.log(result.status_message);
							$("#payment-form").submit();
						}
					});
				}
			});
		});
	</script>
</main>
