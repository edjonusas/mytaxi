<h2 class="table-h2">Atsiliepimai apie mus</h2>
<table id="feedback-table">
	<tbody>
    <?php foreach ($data['rows'] as $row) : ?>
		<tr>
			<td class="time"><?php print $row['date'] ?></td>
			<td class="name"><?php print $row['name'] ?></td>
			<td class="text"><?php print $row['text'] ?></td>
		</tr>
    <?php endforeach; ?>
	</tbody>
</table>
