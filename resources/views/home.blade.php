@extends('layouts.app')

@section('content')
<!-- Home Section -->
<section id="home" class="d-flex align-items-center min-vh-100 position-relative text-white">
    <!-- Background Image -->
    <div class="bg-image position-absolute top-0 start-0 w-100 h-100" 
         style="background: url('/images/contoh.jpg') center/cover no-repeat;">
    </div>

    <!-- Overlay Mask -->
    <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity: 0.6;"></div>

    <!-- Content -->
    <div class="container position-relative text-center">
        <h1 class="fw-bold display-4">We Code<br>We Deliver</h1>
        <p class="mt-3">
            Twiscode specializes in developing high-performing mobile and web applications.
        </p>
        <a href="#" class="btn btn-light border rounded-circle mt-3 shadow-sm">
            <i class="bi bi-play-fill text-success fs-3"></i>
        </a>
    </div>
</section>




    <!-- Work section -->
<!-- Work Section -->
<section id="work" class="py-5">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Image Card -->
      <div class="col-md-6 mb-4 mb-md-0">
        <div class="card border-0 shadow-sm rounded-3">
          <div class="position-relative">
            <img src="/images/work.jpg" class="card-img-top rounded-3" alt="Work Image">
            <a href="#" class="btn btn-light border position-absolute top-0 end-0 m-2 shadow-sm">
              View Detail
            </a>
          </div>
        </div>
      </div>

      <!-- Text Content -->
      <div class="col-md-6">
        <h2 class="fw-bold mb-4">What We Do?</h2>

        <div class="mb-4">
          <h6 class="fw-bold"><i class="bi bi-phone me-2"></i> Mobile Application</h6>
          <p class="text-muted small">
            Building mobile applications is never easy. P2P lending app? Logistic App? E-Commerce App? 
            We have done them all. Done them all well. Done them all fast.
          </p>
        </div>

        <div class="mb-4">
          <h6 class="fw-bold"><i class="bi bi-laptop me-2"></i> Web Application</h6>
          <p class="text-muted small">
            We can build any web applications you need. From blogs, company profiles, to e-commerce 
            with specific functionalities. Our team can follow your stack and needs.
          </p>
        </div>

        <div>
          <h6 class="fw-bold"><i class="bi bi-palette me-2"></i> UI/UX Design</h6>
          <p class="text-muted small">
            We try to elevate your ideas with great UI/UX design, tailored to your taste, addressing 
            the right pain points.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Services -->
<section id="service" class="py-5">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Text Content -->
      <div class="col-lg-6">
        <h1 class="fw-bold mb-3">
          Jasa Pembuatan &<br>Maintenance Website Profesional
        </h1>
        <p class="text-muted mb-4">
          Wujudkan digitalisasi perusahaan Anda dengan mempunyai website profesional yang dapat diakses dengan cepat, tampilan menarik & mobile friendly.
        </p>

        <!-- Button -->
        <a href="#" class="btn btn-primary btn-lg rounded-pill px-4 mb-4">
          Konsultasi Gratis
        </a>

        <!-- Small Info -->
        <p class="small text-muted">*We are open to any question and discussion. Drop us a message!</p>

        <!-- Stats -->
        <div class="d-flex gap-5 mt-4">
          <div>
            <h3 class="fw-bold text-primary">15+</h3>
            <p class="text-muted mb-0">Years Experience</p>
          </div>
          <div>
            <h3 class="fw-bold text-primary">550+</h3>
            <p class="text-muted mb-0">Project Done</p>
          </div>
          <div>
            <h3 class="fw-bold text-primary">320</h3>
            <p class="text-muted mb-0">Loyal Client</p>
          </div>
        </div>
      </div>

      <!-- Image Content -->
      <div class="col-lg-6 text-center mt-3">
        <img src="/images/contoh.jpg" alt="Website Preview" class="img-fluid rounded-3 shadow">
      </div>
    </div>
  </div>
</section>


<!-- Our Customer Section -->
<section id="customer" class="py-5">
  <div class="container text-center">
    
    <!-- Title -->
    <h2 class="fw-bold mb-5">Our Customer</h2>

    <!-- Logos -->
    <div class="row g-4 justify-content-center">
      
      <div class="col-6 col-md-3">
        <img src="/images/hima.png" alt="Customer 1" class="img-fluid grayscale hover-scale">
      </div>
      
      <div class="col-6 col-md-3">
        <img src="/images/fik.jpeg" alt="Customer 2" class="img-fluid grayscale hover-scale">
      </div>
      
      <div class="col-6 col-md-3">
        <img src="/images/rakean.png" alt="Customer 3" class="img-fluid grayscale hover-scale">
      </div>
      
      <div class="col-6 col-md-3">
        <img src="/images/ubp.png" alt="Customer 4" class="img-fluid grayscale hover-scale">
      </div>

    </div>

  </div>
</section>

<!-- Team Section -->
<section id="team" class="py-5 bg-light">
  <div class="container text-center">
    
    <!-- Title -->
    <h2 class="fw-bold mb-5">Meet Our Team</h2>

    <!-- Team Members -->
    <div class="row g-4 justify-content-center">

      <!-- Team Member 1 -->
      <div class="col-12 col-md-4">
        <div class="card border-0 shadow-sm p-4">
          <img src="/images/foto1.jpg" alt="Team Member 1" class="rounded-circle img-fluid mx-auto mb-3" style="width: 150px; height: 150px; object-fit: cover;">
          <h5 class="fw-bold mb-1">Fajar Herlambang</h5>
          <p class="text-muted">CEO & Founder</p>
          <div>
            <a href="#" class="text-dark me-2"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-dark me-2"><i class="bi bi-twitter"></i></a>
            <a href="#" class="text-dark"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>

      <!-- Team Member 2 -->
      <div class="col-12 col-md-4">
        <div class="card border-0 shadow-sm p-4">
          <img src="/images/team2.jpg" alt="Team Member 2" class="rounded-circle img-fluid mx-auto mb-3" style="width: 150px; height: 150px; object-fit: cover;">
          <h5 class="fw-bold mb-1">Ahmad Rakha</h5>
          <p class="text-muted">Lead Developer</p>
          <div>
            <a href="#" class="text-dark me-2"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-dark me-2"><i class="bi bi-twitter"></i></a>
            <a href="#" class="text-dark"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>

      <!-- Team Member 3 -->
      <div class="col-12 col-md-4">
        <div class="card border-0 shadow-sm p-4">
          <img src="/images/team3.jpg" alt="Team Member 3" class="rounded-circle img-fluid mx-auto mb-3" style="width: 150px; height: 150px; object-fit: cover;">
          <h5 class="fw-bold mb-1">Raka Dwi</h5>
          <p class="text-muted">UI/UX Designer</p>
          <div>
            <a href="#" class="text-dark me-2"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-dark me-2"><i class="bi bi-twitter"></i></a>
            <a href="#" class="text-dark"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- Career Section -->
<section id="career" class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">

      <!-- Image -->
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="/images/career.jpg" 
             alt="Join Our Team" class="img-fluid rounded shadow">
      </div>

      <!-- Text -->
      <div class="col-md-6">
        <h2 class="fw-bold mb-3">Join Our Team</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          Et at fringilla id maecenas in scelerisque in. Pharetra, 
          erat amet, vestibulum ullamcorper. Nunc feugiat lacus et 
          eget urna ornare risus malesuada. Cursus morbi vel sed ipsum eget tincidunt ultrices.
        </p>
        <a href="{{ route('career.jobs') }}" class="btn btn-dark px-4">Apply</a>
      </div>

    </div>
  </div>
</section>

<!-- Contact & Footer Section -->
<footer class="bg-light pt-5 mt-5 border-top">
  <div class="container">

    <!-- Contact Content -->
    <div id="contact" class="row text-center text-md-start">

      <!-- Location -->
      <div class="col-12 col-md-4 mb-4">
        <h5 class="fw-bold mb-3">Location</h5>
        <div class="border rounded shadow-sm p-3">
          <h6 class="fw-bold mb-1">Twiscode</h6>
          <p class="mb-0">Jl. Kayoon, Surabaya</p>
          <div class="mt-2">
            <iframe src="https://www.google.com/maps?q=Jl.+Kayoon,+Surabaya&output=embed" 
                    width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>

      <!-- Company -->
      <div class="col-6 col-md-4 mb-4">
        <h5 class="fw-bold mb-3">Company</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-decoration-none text-dark">Work</a></li>
          <li><a href="#" class="text-decoration-none text-dark">Service</a></li>
          <li><a href="#" class="text-decoration-none text-dark">Team</a></li>
          <li><a href="#" class="text-decoration-none text-dark">Contact</a></li>
        </ul>
      </div>

      <!-- Contact Us -->
      <div class="col-6 col-md-4 mb-4">
        <h5 class="fw-bold mb-3">Contact Us</h5>
        <p><i class="bi bi-facebook me-2"></i>Twiscode</p>
        <p><i class="bi bi-instagram me-2"></i>Twiscode</p>
        <p><i class="bi bi-envelope me-2"></i>andree@twiscode.com</p>
      </div>

    </div>

    <!-- Footer Bottom -->
    <div class="border-top pt-3 mt-3 text-center">
      <p class="mb-0">
        Twiscode Pte. Ltd. | PT. Dapur Rumah Sejahtera
      </p>
    </div>

  </div>
</footer>








@endsection
