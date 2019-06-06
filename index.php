<?php include 'fns/functions.php'; ?>

<?php $graph = new graphic('Tech Developer'); ?>
<?php $element = new elements(); ?>

<?php
	if(isset($_POST['contactMe'])){
		$contact = new contactForm();
		$contact->saveData();
		$contact->confirm();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<?php $graph->head(); ?>
</head>
<body  <?php $graph->scrollSpy(); ?>>
	<!-- Navbar -->
	<?php $element->navbar(); ?>
	<!-- Navbar -->

	<!-- Headr -->
	<?php $element->header(); ?>
	<!-- Header -->

	<!-- Who I Am -->
	<?php $element->whoIAm(); ?>
	<!-- Who I Am -->

	<!-- What I Do -->
	<?php $element->whatIDo(); ?>
	<!-- What I Do -->

	<!-- Services -->
	<?php $element->services(); ?>
	<!-- Services -->


	<!-- My Clients -->
	<?php $element->myClients(); ?>
	<!-- My Clients -->

	<!-- My Collaborations -->
	<?php $element->myCollaborations(); ?>
	<!-- My collaborations -->

	<!-- Tell About Me -->
	<?php // $element->tellAboutMe(); ?>
	<!-- Tell About Me -->

	<!-- Architecture -->
	<?php $element->architecture(); ?>
	<!-- Architecture -->

	<!-- Prices -->
	<?php $element->prices(); ?>
	<!-- Prices -->

	<!-- Contact Me -->
	<?php $element->contactMe(); ?>
	<!-- Contact Me -->



	<!-- Footer -->
	<?php $element->footer(); ?>
	<!-- Footer -->



	<!-- Popup -->
	<?php $element->modalContact(); ?>
	<?php $element->modalIcons(); ?>
	<?php $element->modalServices(); ?>
	<!-- Popup -->

	<!-- JS -->
	<?php $graph->js(); ?>
	<!-- JS -->
</body>
</html>