<footer class="main-footer <?= isset($hidemenu) ? 'hidden' : '' ?>">
  <div class="goto_topo hidden">
    <i class="fa fa-rocket"></i>
  </div>
  <div class="pull-right h6"><i class="fa fa-clock-o"></i> {elapsed_time}</div>
  <strong>Felippe Palomares Silva de Sena Marques.</strong>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Create the tabs -->
  <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <!-- Home tab content -->
    <div class="tab-pane" id="control-sidebar-home-tab">
      <h3 class="control-sidebar-heading">Recent Activity</h3>
      <ul class="control-sidebar-menu">
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

              <p>Will be 23 on April 24th</p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-user bg-yellow"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

              <p>New phone +1(800)555-1234</p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

              <p>nora@example.com</p>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <i class="menu-icon fa fa-file-code-o bg-green"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

              <p>Execution time 5 seconds</p>
            </div>
          </a>
        </li>
      </ul>
      <!-- /.control-sidebar-menu -->

      <h3 class="control-sidebar-heading">Tasks Progress</h3>
      <ul class="control-sidebar-menu">
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Custom Template Design
              <span class="label label-danger pull-right">70%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Update Resume
              <span class="label label-success pull-right">95%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-success" style="width: 95%"></div>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Laravel Integration
              <span class="label label-warning pull-right">50%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
            </div>
          </a>
        </li>
        <li>
          <a href="javascript:void(0)">
            <h4 class="control-sidebar-subheading">
              Back End Framework
              <span class="label label-primary pull-right">68%</span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
            </div>
          </a>
        </li>
      </ul>
      <!-- /.control-sidebar-menu -->

    </div>
    <!-- /.tab-pane -->

    
  </div>
</aside>
<!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
   <div class="control-sidebar-bg"></div>

 </div>
 <!-- ./wrapper -->
 <!-- JS -->
 <!-- jQuery 3 -->
 <script src="<?= $assets. 'bower_components/jquery/dist/jquery.js' ?>"></script>
 <!-- Bootstrap 3.3.7 -->
 <script src="<?= $assets. 'bower_components/bootstrap/dist/js/bootstrap.js' ?>"></script>
 <!-- AdminLTE App -->
 <script src="<?= $assets. 'dist/js/adminlte.js' ?>"></script>
 <!-- FastClick -->
 <script src="<?= $assets. 'bower_components/fastclick/lib/fastclick.js' ?>"></script>
 <!-- DataTables -->
 <script src="<?= $assets. 'bower_components/datatables.net/js/jquery.dataTables.js' ?>"></script>
 <script src="<?= $assets. 'bower_components/datatables.net-bs/js/dataTables.bootstrap.js' ?>"></script>
 <!-- SlimScroll -->
 <script src="<?= $assets. 'bower_components/jquery-slimscroll/jquery.slimscroll.js' ?>"></script>
 <!-- Moment.js -->
 <script src="<?= $assets. 'js/moment.js' ?>"></script>
 <!-- Bootstrap DateTimePicker -->
 <script src="<?= $assets. 'js/bs-dtp/build/js/bootstrap-datetimepicker.min.js' ?>"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="<?= $assets. 'dist/js/demo.js' ?>"></script>
 <!-- Scripts personalizado -->
 <script src="<?= $assets. 'js/dideweb.js' ?>"></script>
 <!-- Full Calendar -->
 <script src="<?= $assets. 'js/fullcalendar-3.9.0/fullcalendar.js' ?>"></script>
 <script src="<?= $assets. 'js/fullcalendar-3.9.0/locale/pt-br.js' ?>"></script>
 <!-- Pace -->
 <script src="<?= $assets. 'js/PACE/pace.min.js' ?>"></script>
 <!-- iChek -->
 <script src="<?= $assets. 'js/iCheck/icheck.min.js' ?>"></script>
 <!-- Bootstrap Slider -->
 <script src="<?= $assets. 'js/bs-slider/dist/bootstrap-slider.min.js' ?>"></script>
 <!-- Accounting -->
 <script src="<?= $assets. 'js/accounting.js' ?>"></script>
 <!-- Jasny Bootstrap -->
 <script src="<?= $assets. 'js/jasny-bootstrap.js' ?>"></script>
 <!-- Bootstrap Toggle -->
 <script src="<?= $assets. 'js/bs-toggle/js/bootstrap-toggle.min.js' ?>"></script>
 <!-- Bootstrap Multiselect -->
 <script src="<?= $assets. 'js/bootstrap-multiselect.js' ?>"></script>
 <!-- Text-Scrolling-Plugin -->
 <script src="<?= $assets. 'js/Text-Scrolling-Plugin/jquery.marquee.js' ?>"></script>
 <!-- jquery.scrollbar.js -->
 <script src="<?= $assets. 'js/jquery.scrollbar.js' ?>"></script>
  <?php

    if ($_SERVER["REQUEST_URI"] == '/dideweb/despesas/cadastrar_tipo' && form_error('descricao'))
    {
      echo "<script>$('#modalAddTipoDespesa').modal('show');</script>";
    }
  ?>
</body>
</html>
