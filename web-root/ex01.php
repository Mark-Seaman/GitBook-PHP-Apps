<?php include 'header.php'; ?>
<?php include 'files.php'; ?>

<?php 
    $path = '.';
    $files = get_file_list($path);
?>

<h2>Directory Listing</h2>

<?php if (count($files) == 0) : ?>
    <p>No images uploaded.</p>
<?php else: ?>
    <ul>
        <?php foreach($files as $filename) :
            $file_url = $path . '/' . urlencode($filename);
        ?>
        <li>
            <a href="<?php echo $file_url; ?>"><?php echo $filename; ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php readfile('index.php'); ?>
<?php file_put_contents('/ex04.php', read_file('index.php')); ?>


<?php include 'footer.php' ?>
