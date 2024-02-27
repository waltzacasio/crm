<?php if($this->session->flashdata('user_loggedin')) : ?>
    <?= '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>';?>
<?php endif;?>

<?php if($this->session->flashdata('post_added')) : ?>
    <?= '<p class="alert alert-success">'.$this->session->flashdata('post_added').'</p>';?>
<?php endif;?>

<?php if($this->session->flashdata('post_delete')) : ?>
    <?= '<p class="alert alert-success">'.$this->session->flashdata('post_delete').'</p>';?>
<?php endif;?>


<h1 class="text-center"><?= $title;?></h1>

<form id="searchForm" class="d-flex" role="search" method="post" action="<?= base_url();?>search">
          <input class="form-control me-2" name="search" id="search" type="search" placeholder="Search" aria-label="Search" required>
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

<br/>
