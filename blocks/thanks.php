<article>
	<header>
		<h1>Thanks for Contacting Us!</h1>
	</header>
  <p>We will get back to you ASAP.</p>
  <table>
    <?php foreach($_POST as $key=>$value): ?>
      <tr>
        <td><?php echo $key; ?></td>
        <td><?php echo $value; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</article>
