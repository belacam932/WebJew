<style>
  .menu-horizontal {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #fafafa;

  }

  .menu-horizontal li {
    float: left;
  }

  .menu-horizontal li a {
    display: block;
    color: #333;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    margin-right: 20px;
    margin-left: 55px;
    font-size: 20px;
  }

  .menu-horizontal li a:hover {
    background-color: #f0f0f0;
  }
</style>
<?php
$sp = new hanghoa();
$tenmenu = $sp->getMenu();
?>
<div class="container">
  <ul class="menu-horizontal">
    <?php
    while ($set = $tenmenu->fetch()) :
    ?>
      <li>
        <a href="index.php?action=sanpham&act=<?php echo $set['idloai']; ?>">
          <?php if ($set['idmenu'] === 5) echo $set['tenloai']; ?>
        </a>
      </li>
    <?php
    endwhile;
    ?>
  </ul>
</div>