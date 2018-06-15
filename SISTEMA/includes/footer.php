
<footer class="footer">
	<div class="container">


	
	</div>
</footer>

<!-- LightBox -->
<script src="<?=U?>assets/js/ekko-lightbox.js"></script>
<script type="text/javascript">
	$(document).on('click', '[data-toggle="lightbox"]', function(event) {
		event.preventDefault();
		$(this).ekkoLightbox();
	});
</script>
<!-- LightBox -->

<!-- Mascara -->
<script>
$(document).ready(function(){
  $('.data').mask('00/00/0000');
  $('.horario').mask('00:00:00');
  $('.dia_horario').mask('00/00/0000 00:00:00');
  $('.cep').mask('00000-000');
  $('.telefone').mask('(00) 0000-0000');
  $('.celular').mask('(000) 000-0000');
  $('.cpf').mask('000.000.000-00', {reverse: true});
  $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
  $('.dinheiro').mask('000.000.000.000.000,00', {reverse: true});
  $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
  $('.fallback').mask("00r00r0000", {
      translation: {
        'r': {
          pattern: /[\/]/,
          fallback: '/'
        },
        placeholder: "__/__/____"
      }
    });
  $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
});
</script>
<!-- Mascara -->

<!-- Api Google Maps -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpnLhbnR5HYHlf8hTD1FE8NKO4VUl_L7U"></script>

<script>
	function initMap(lat, lon) {
		var uluru = {
			lat: lat,
			lng: lon
		};
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 16,
			center: uluru
		});
		var marker = new google.maps.Marker({
			position: uluru,
			icon: '../assets/img/google-maps.png',
			map: map
		});
	}
</script>
<!-- Api Google Maps -->

</body>
</html>
