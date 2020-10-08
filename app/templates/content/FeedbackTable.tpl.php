<!--<h2 class="table-h2">Atsiliepimai apie mus</h2>-->
<!--<table id="feedback-table">-->
<!--	<tbody>-->
<!--    --><?php //foreach ($data['rows'] as $row) : ?>
<!--		<tr>-->
<!--			<td class="time">--><?php //print $row['date'] ?><!--</td>-->
<!--			<td class="name">--><?php //print $row['name'] ?><!--</td>-->
<!--			<td class="text">--><?php //print $row['text'] ?><!--</td>-->
<!--		</tr>-->
<!--    --><?php //endforeach; ?>
<!--	</tbody>-->
<!--</table>-->


<h2 class="table-h2">Atsiliepimai apie mus</h2>
<div id="feedback-table">
    <?php foreach ($data['rows'] as $row) : ?>
		<div class="table-card">
			<div class="name-block">
				<div class="time"><?php print $row['date'] ?></div>
				<div class="name"><?php print $row['name'] ?></div>
			</div>
			<div class="text"><?php print $row['text'] ?></div>
		</div>
    <?php endforeach; ?>
</div>