<div class="tab-spacer">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" id="tab_datve">

    <li class="active"><a href="#datve" data-toggle="tab"> <i class="fa fa-bolt"></i> Hình thức đặt vé</a></li>
    <li><a href="#thanhtoan" data-toggle="tab"> <i class="fa fa-clock-o"></i> Hình thức thanh toán</a></li>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content">

    <div class="tab-pane fade in active" id="datve">
      <?php get_template_part( '_hinh-thuc-dat-ve-2' ); ?>
    </div>

    <div class="tab-pane fade" id="thanhtoan">
      <?php get_template_part( '_hinh-thuc-thanh-toan-2' ); ?>
    </div>

  </div>
</div>
