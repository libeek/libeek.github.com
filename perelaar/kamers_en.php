<?php
	$title = 'Rooms';

	function output_content() {
?>

<p id="photos"><img src="foto/cups.jpg"><img src="foto/room12.jpg"><img src="foto/key.jpg"><img src="foto/mirror.jpg"><img src="foto/view.jpg"><img src="foto/bed.jpg"></p>

<p>De Perelaar has two luxury double rooms, each with a stunning view. The rooms are stylishly decorated to a high quality.</p>

<p>Each room has a flat screen television, clock radio, free local telephone calls, seating, and tea- and coffee-making facilities.</p>

<p>Each room has its own <em>en suite</em> bathroom, with bath, shower, toilet and washbasin.</p>

<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){ 
        $('#viewer').after('<div id="boxView"><img id="viewing" src=""></div>');
        $('#viewing').attr('src',$('#viewer img:first').attr('src',this.src));
        $('#viewer img:first').addClass('hover');
        $('#viewer img').mouseover(function(){
            $('#viewer img').removeClass('hover');
            $(this).addClass('hover');
            $('#viewing').attr('src',this.src);
        });
    });
</script>

<div id="viewer"><img src="foto/window.jpg"> <img src="foto/ensuite.jpg"> <img src="foto/bathroom.jpg"> <img src="foto/stool.jpg"></div>

<?php
	}
?>
