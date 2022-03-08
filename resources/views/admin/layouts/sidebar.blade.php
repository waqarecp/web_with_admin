  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ url('admin') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->  
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('admin/products') }}">
          <i class="bi bi-person"></i>
          <span>Products</span>
        </a>
      </li>    
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('chatify') }}">
          <i class="bi bi-person"></i>
          <span>Chat</span>
        </a>
      </li>
<!-- 
       <li class="nav-item">
        <a class="nav-link " href="{{ url('admin/products') }}">
          <i class="bi bi-grid"></i>
          <span>Products</span>
        </a>
      </li> -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#products-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Manage Products</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="products-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('admin/view-products') }}">
              <i class="bi bi-circle"></i><span>View Products</span>
            </a>
          </li>
          <li>
            <a href="">
              <i class="bi bi-circle"></i><span>---</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('admin/alerts') }}">
              <i class="bi bi-circle"></i><span>Alerts</span>
            </a>
          </li>
          <li>
            <a href="{{ url('admin/accordion')}}">
              <i class="bi bi-circle"></i><span>Accordion</span>
            </a>
          </li>
          <li>
            <a href="{{ url('admin/badges')}}">
              <i class="bi bi-circle"></i><span>Badges</span>
            </a>
          </li>
          <li>
            <a href="{{ url('admin/breadcrumbs')}}">
              <i class="bi bi-circle"></i><span>Breadcrumbs</span>
            </a>
          </li>
          <li>
            <a href="{{ url('admin/buttons') }}">
              <i class="bi bi-circle"></i><span>Buttons</span>
            </a>
          </li>
          <li>
            <a href="{{ url('admin/cards') }}">
              <i class="bi bi-circle"></i><span>Cards</span>
            </a>
          </li>
          <li>
            <a href="{{ url('admin/carousel') }}">
              <i class="bi bi-circle"></i><span>Carousel</span>
            </a>
          </li>
          <li>
            <a href="{{ url('admin/group') }}">
              <i class="bi bi-circle"></i><span>List group</span>
            </a>
          </li>
          <li>
            <a href="{{ url('admin/modal') }}">
              <i class="bi bi-circle"></i><span>Modal</span>
            </a>
          </li>
          <li>
            <a href="{{ url('admin/tabs') }}">
              <i class="bi bi-circle"></i><span>Tabs</span>
            </a>
          </li>
          <li>
            <a href="{{ url('admin/pagination') }}">
              <i class="bi bi-circle"></i><span>Pagination</span>
            </a>
          </li>
          <li>
            <a href="{{ url('admin/progress') }}">
              <i class="bi bi-circle"></i><span>Progress</span>
            </a>
          </li>
          <li>
            <a href="{{ url('admin/spinners') }}">
              <i class="bi bi-circle"></i><span>Spinners</span>
            </a>
          </li>
          <li>
            <a href="{{  url('admin/tooltips') }}">
              <i class="bi bi-circle"></i><span>Tooltips</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('admin/forms-elements')}}">
              <i class="bi bi-circle"></i><span>Form Elements</span>
            </a>
          </li>
          <li>
            <a href="{{ url('admin/forms-layouts') }}">
              <i class="bi bi-circle"></i><span>Form Layouts</span>
            </a>
          </li>
          <li>
            <a href="{{ url('admin/forms-editors') }}">
              <i class="bi bi-circle"></i><span>Form Editors</span>
            </a>
          </li>
          <li>
            <a href="{{ url('admin/forms-validation') }}">
              <i class="bi bi-circle"></i><span>Form Validation</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('admin/tables-general') }}">
              <i class="bi bi-circle"></i><span>General Tables</span>
            </a>
          </li>
          <li>
            <a href="{{ url('admin/tables-data') }}">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('admin/charts-chartjs') }}">
              <i class="bi bi-circle"></i><span>Chart.js</span>
            </a>
          </li>
          <li>
            <a href="{{ url('admin/charts-apexcharts') }}">
              <i class="bi bi-circle"></i><span>ApexCharts</span>
            </a>
          </li>
          <li>
            <a href="{{ url('admin/charts-echarts') }}">
              <i class="bi bi-circle"></i><span>ECharts</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ url('admin/icons-bootstrap') }}">
              <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
            </a>
          </li>
          <li>
            <a href="{{ url('admin/icons-remix') }}">
              <i class="bi bi-circle"></i><span>Remix Icons</span>
            </a>
          </li>
          <li>
            <a href="{{ url('admin/icons-boxicons') }}">
              <i class="bi bi-circle"></i><span>Boxicons</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('admin/users-profile') }}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('admin/faq') }}">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('admin/contact') }}">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('admin/register') }}">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('admin/login') }}">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('admin/404') }}">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('admin/blank') }}">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->