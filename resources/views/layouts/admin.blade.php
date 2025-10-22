<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? 'Admin Dashboard' }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- sweet alert -->

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style>
    body {
      background-color: #f5f5f5;
      overflow-x: hidden;
    }

    /* Sidebar */
    .sidebar {
      width: 250px;
      height: 100vh;
      position: fixed;
      left: 0;
      top: 0;
      background-color: #e9e8e8ff;
      transition: all 0.3s ease;
      z-index: 1000;
      padding: 20px;
    }

    /* Saat sidebar tertutup */
    .sidebar.collapsed {
      left: -250px;
    }

    /* Konten utama */
    .content {
      margin-left: 250px;
      padding: 20px;
      transition: all 0.3s ease;
    }

    /* Jika sidebar tertutup */
    .content.expanded {
      margin-left: 0;
    }

    .nav-link {
      color: #000;
      margin-top: 8px;
      transition: all 0.2s;
    }

    .nav-link.active,
    .nav-link:hover {
      background-color: #aeb1b5ff;
      color: #000;
      border-radius: 8px;
    }

    /* Tombol toggle */
    .toggle-btn {
      position: fixed;
      top: 15px;
      left: 15px;
      background-color: #e9e8e8ff;
      border: none;
      border-radius: 5px;
      padding: 8px 12px;
      z-index: 1100;
      cursor: pointer;
    }

    .toggle-btn i {
      font-size: 1.2rem;
      color: #000;
    }

    /* Responsif untuk mobile */
    @media (max-width: 768px) {
      .sidebar {
        left: -250px;
      }

      .sidebar.show {
        left: 0;
      }

      .content {
        margin-left: 0;
      }
    }
  </style>
</head>
<body>

  <!-- Tombol Toggle -->
  <button class="toggle-btn" id="toggle-btn">
    <i class="bi bi-list"></i>
  </button>

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <ul class="nav flex-column" style="margin-top: 45px;">
      <li class="nav-item">
        <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
          <i class="bi bi-speedometer2 me-2"></i> Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('admin.jobs.index') }}" class="nav-link {{ request()->routeIs('admin.jobs.*') ? 'active' : '' }}">
          <i class="bi bi-briefcase me-2"></i> Manage Jobs
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="bi bi-people me-2"></i> Users
        </a>
      </li>
    </ul>
  </div>

  <!-- Konten utama -->
  <div class="content" id="content">
    @yield('content')
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const toggleBtn = document.getElementById('toggle-btn');
    const sidebar = document.getElementById('sidebar');
    const content = document.getElementById('content');

    toggleBtn.addEventListener('click', () => {
      // Untuk layar besar
      if (window.innerWidth > 768) {
        sidebar.classList.toggle('collapsed');
        content.classList.toggle('expanded');
      } 
      // Untuk layar kecil (mobile)
      else {
        sidebar.classList.toggle('show');
      }
    });

    // Tutup sidebar otomatis saat klik di luar (khusus mobile)
    document.addEventListener('click', function(e) {
      if (window.innerWidth <= 768 && !sidebar.contains(e.target) && !toggleBtn.contains(e.target)) {
        sidebar.classList.remove('show');
      }
    });
  </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const toggleBtn = document.getElementById('toggle-btn');
    const sidebar = document.getElementById('sidebar');
    const content = document.getElementById('content');

    toggleBtn.addEventListener('click', () => {
      // Untuk layar besar
      if (window.innerWidth > 768) {
        sidebar.classList.toggle('collapsed');
        content.classList.toggle('expanded');
      } 
      // Untuk layar kecil (mobile)
      else {
        sidebar.classList.toggle('show');
      }
    });

    // Tutup sidebar otomatis saat klik di luar (khusus mobile)
    document.addEventListener('click', function(e) {
      if (window.innerWidth <= 768 && !sidebar.contains(e.target) && !toggleBtn.contains(e.target)) {
        sidebar.classList.remove('show');
      }
    });
  </script>

  <!-- ✅ SweetAlert Global untuk Delete & Save -->
  <script>
  document.addEventListener('DOMContentLoaded', function () {
    // Hapus Data (Delete)
    const deleteButtons = document.querySelectorAll('.btn-delete');
    deleteButtons.forEach(button => {
      button.addEventListener('click', function (e) {
        e.preventDefault();
        const form = this.closest('form');

        Swal.fire({
          title: 'Yakin ingin menghapus?',
          text: "Data ini akan dihapus secara permanen!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#d33',
          cancelButtonColor: '#6c757d',
          confirmButtonText: 'Ya, hapus!',
          cancelButtonText: 'Batal'
        }).then((result) => {
          if (result.isConfirmed) {
            form.submit();
          }
        });
      });
    });
  });
  </script>

  @yield('scripts')

</body>
</html>
