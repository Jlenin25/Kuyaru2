<!-- @extends('layouts.index')
@section('content') -->
<?php //include('slider.php'); ?>
<section>
    <div class="container">
        <div class="row">
            <?php
            include('category.php');
            include('products.php');
            ?>
        </div>
    </div>
</section>
<!-- @endsection -->