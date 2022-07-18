<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
	<style>
		 .warna-baris {
			 background-color: yellow;
		}

		 .warna-baris2 {
			background-color: silver;
		}
	</style>

<table cellpadding="10" border="1" cellspacing="0">

	<?php for( $i = 1; $i <= 5; $i++ ) : ?>
		<?php if ( $i % 2 == 1 ) : ?> 
			<tr class="warna-baris">
		<?php else : ?>
			<tr class="warna-baris2">
		<?php endif; ?>
				<?php for( $j = 0; $j <= 5; $j++ ) : ?>
					<td><?= "$i,$j"; ?></td>
				<?php endfor; ?>
		</tr>
	<?php endfor; ?>
	
</table>

</body>
</html>