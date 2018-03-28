<!--<div class="footer">
<div class="container">

			<p>© 2018. All Rights Reserved.</p>
		</div>
		</div>-->
		<!-- //footer -->
	</section>
	<script src="{{ asset('public/js/bootstrap.js') }}"></script>
	<script src="{{ asset('public/js/proton.js') }}"></script>
{{-- 	<script src="{{ asset('public/js/location.js') }}"></script> --}}
<!-- date-picker -->

	

	
	<script>
$(document).ready(function(){
    $("#txtFromDate").datepicker({
        numberOfMonths: 2,
        onSelect: function(selected) {
          $("#txtToDate").datepicker("option","minDate", selected)
        }
    });
    $("#txtToDate").datepicker({ 
        numberOfMonths: 2,
        onSelect: function(selected) {
           $("#txtFromDate").datepicker("option","maxDate", selected)
        }
    });  
});

</script>
	

	
</body>
</html>