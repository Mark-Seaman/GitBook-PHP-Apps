<?php

    // Setup a page title variable
    $page_title = "UNC BACS Class Server";

    // Include the page start
    include 'bacs_350/header.php';

    // Define directory listing
    include 'bacs_350/files.php';

    // Get the files in the current directory
    $path = '.';
    $files = get_dir_list($path);
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


<?php include 'footer.php' ?>
